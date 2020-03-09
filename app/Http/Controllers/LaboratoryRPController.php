<?php

namespace App\Http\Controllers;

use App\LaboratoryRP;
use Illuminate\Http\Request;
use App\Http\Requests\LaboratoryRpRequest;
use Illuminate\Support\Facades\DB;

use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;
use Response;
use Redirect;

class LaboratoryRPController extends Controller
{
    public function index(Request $request)
    {
        $create  = route('labrp.create');
        $table   = route('labrp_table');
        $export  = route('labrp_xls');
        $title   = "LABORATORIO CLINICO RP";

        return View('laboratory_rp.index',compact('title','export','table','create'));
    }

    public function create()
    {
       
        return View('laboratory_rp.form');
    }

    
    public function store(LaboratoryRpRequest $request)
    {
        $LaboratoryRP = new LaboratoryRP;
        $LaboratoryRP->fill($request->all());
        $LaboratoryRP->user_id =auth()->user()->id;
        $LaboratoryRP->save();

         $notification = array(
            'message' => 'Registro almacenado con exito.', 
            'alert_type' => 'success',);
        
            \Session::flash('notification', $notification);
        return Redirect::action('LaboratoryRPController@index');
    }

    
    public function show($id)
    {
        $data = LaboratoryRP::join('patient as p','p.patient_id','laboratory_rp.patient_id')
                ->select( DB::raw("CONCAT(p.first_name,' ',p.last_name) as name"),'p.hist_id','p.gender',
                     DB::raw('DATE_FORMAT(p.date_birth,"%m/%d/%Y") AS LT_DOB'),'laboratory_rp.*')
                ->where('id',$id)
                ->orderBy('id','DESC')
                ->first();
       
        $view = \View::make('laboratory_rp.format_pdf', compact('data'))->render();        
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        $pdf->setPaper("letter", "portrait");
        return $pdf->stream();     
    }

   
    public function edit($id)
    {
        $data = LaboratoryRP::findOrFail($id);
        return View('laboratory_rp.form',compact('data'));
    }

    
    public function update(LaboratoryRpRequest $request, $id)
    {
        $LaboratoryRP = LaboratoryRP::findOrFail($id);
        $LaboratoryRP->fill($request->all());
        $LaboratoryRP->user_updated =auth()->user()->id;
        $LaboratoryRP->update();
        $notification = array(
            'message' => 'Registro actualizado con exito.', 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);
        return Redirect::action('LaboratoryRPController@index');
    }

   
    public function destroy($id)
    {
       $LaboratoryRP = LaboratoryRP::findOrFail($id);
       $LaboratoryRP->user_deleted =auth()->user()->id;
       $LaboratoryRP->update();
       $LaboratoryRP = LaboratoryRP::findOrFail($id)->delete();
       return;
    }

   public function export_xls(Request $request)
    {

       $GLOBALS['variable'] =$request->input('tx');
        
        Excel::create('laboratory_rp', function($excel) {
              
        $excel->sheet('laboratory_rp', function($sheet) {

        $data = LaboratoryRP::Search($GLOBALS['variable'])
                    ->select('p.hist_id as Hist_ID',
                            DB::raw("CONCAT(p.first_name,' ',p.last_name) as LT_Patient"),
                            'p.gender as LT_Sex',
                            DB::raw('DATE_FORMAT(p.date_birth,"%m/%d/%Y") AS LT_DOB'),
                            DB::raw('DATE_FORMAT(laboratory_rp.Fecha_Laboratory,"%m/%d/%Y") AS Fecha_Laboratory'),
                            'laboratory_rp.wbc',
                            'laboratory_rp.lym',
                            'laboratory_rp.mid',
                            'laboratory_rp.gran',
                            'laboratory_rp.rbc',
                            'laboratory_rp.hgb',
                            'laboratory_rp.hct',
                            'laboratory_rp.mcv',
                            'laboratory_rp.mch',
                            'laboratory_rp.mchc',
                            'laboratory_rp.rdw',
                            'laboratory_rp.plt',
                            'laboratory_rp.glucosa',
                            'laboratory_rp.bun',
                            'laboratory_rp.creatini',
                            'laboratory_rp.colester',
                            'laboratory_rp.ldl_cole',
                            'laboratory_rp.hdl_cole',
                            'laboratory_rp.triglice',
                            'laboratory_rp.acido_ur',
                            'laboratory_rp.total_pr',
                             DB::raw("CONCAT(p.first_name,' ',p.last_name) as Hcy_Nombre"),
                            'p.hist_id as Hist_ID.',
                             DB::raw('DATE_FORMAT(laboratory_rp.Hcy_Fecha,"%m/%d/%Y") AS Hcy_Fecha'),
                            'laboratory_rp.Hcy_Nlaboratorio',
                            'laboratory_rp.Hcy_Hcy',
                            'laboratory_rp.Hcy_VitB12',
                            'laboratory_rp.Hcy_Folato'                        
                      )->orderBy('id','DESC')->get();

                $data = json_decode( json_encode($data), true);
                $sheet->fromArray($data);
            });
        })->export('xlsx');

       }

    public function table(Request $request)
    {
         $query = LaboratoryRP::with('patient','user')
                 ->select('laboratory_rp.id','laboratory_rp.user_id','laboratory_rp.patient_id','laboratory_rp.Fecha_Laboratory as fecha','laboratory_rp.created_at');
      
         return Datatables::of($query)->addColumn('action', function ($dat) {

               return ' <a href="' .route("labrp.show", $dat->id) . '" class="btn btn-sm btn-info" role="button" target="_blank" data-toggle="tooltip" data-placement="right"><i class="fa fa-file-text" title="Ver registro"></i></a>

                  <a href="' .route("labrp.edit", $dat->id) . '" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" data-toggle="tooltip" data-placement="right" title="Editar registro"></i></a> 
                  <button class="btn btn-sm btn-danger btn-delete" data-toggle="tooltip" data-placement="right" title="Eliminar" data-remote="'.route("labrp.destroy", $dat->id) . '"><i class="fa fa-trash-o"></i></button> ';
                  })
                  ->editColumn('created_at', function ($contact){
                        return date('m/d/Y', strtotime($contact->created_at) );
                    })
                  ->filterColumn('created_at', function ($query, $keyword) {
                        $query->whereRaw("DATE_FORMAT(laboratory_rp.created_at,'%m/%d/%y') like ?", ["%$keyword%"]);
                    })
                   ->editColumn('fecha', function ($contact){
                        return date('m/d/Y', strtotime($contact->fecha) );
                    })
                   ->filterColumn('fecha', function ($query, $keyword) {
                        $query->whereRaw("DATE_FORMAT(laboratory_rp.Fecha_Laboratory,'%m/%d/%y') like ?", ["%$keyword%"]);
                    })
                  ->rawColumns(['action'])
                  ->make(true);
    }

   
}
