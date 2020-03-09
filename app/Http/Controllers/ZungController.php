<?php

namespace App\Http\Controllers;

use App\Zung;
use Illuminate\Http\Request;
use App\Http\Requests\ZungRequest;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

use Maatwebsite\Excel\Facades\Excel;
use Response;
use Redirect;

class ZungController extends Controller
{
   public function index()
   {
        $create  = route('zung.create');
        $table   = route('zung_table');
        $export  = route('zung_xls');
        $title   = "Encuesta Zung";

        return View('zung.index',compact('title','export','table','create'));
    }

    
    public function create()
    {
        return View('zung.form');
    }

    
    public function store(ZungRequest $request)
    {
        
        $Zung = new Zung;
        $Zung->fill($request->all());
        $Zung->user_id =auth()->user()->id;
        $Zung->save();

         $notification = array(
            'message' => 'Registro almacenado con exito.', 
            'alert_type' => 'success',);
        
            \Session::flash('notification', $notification);
        return Redirect::action('ZungController@index');
    }

    
    public function show($id)
    {
        $data = Zung::join('patient as p','p.patient_id','zung.patient_id')
                ->select( DB::raw("CONCAT(p.first_name,' ',p.last_name) as name"),'p.hist_id','zung.*')
                ->where('id',$id)
                ->orderBy('id','DESC')
                ->first();
       
        $view = \View::make('zung.format_pdf', compact('data'))->render();        
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        $pdf->setPaper("letter", "portrait");
        return $pdf->stream();     
    }

   
    public function edit($id)
    {
        $data = Zung::findOrFail($id);
        return View('zung.form',compact('data'));
    }

    
    public function update(ZungRequest $request, $id)
    {
        $Zung = Zung::findOrFail($id);
        $Zung->fill($request->all());
        $Zung->user_updated =auth()->user()->id;
        $Zung->update();
        $notification = array(
            'message' => 'Registro actualizado con exito.', 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);
        return Redirect::action('ZungController@index');
    }

   
    public function destroy($id)
    {
       $Zung = Zung::findOrFail($id);
       $Zung->user_deleted =auth()->user()->id;
       $Zung->update();
       $Zung = Zung::findOrFail($id)->delete();
       return;
    }

   public function export_xls(Request $request)
    {

       $GLOBALS['variable'] =$request->input('tx');
        
        Excel::create('Zung', function($excel) {
              
        $excel->sheet('Zung', function($sheet) {

        $data = Zung::Search($GLOBALS['variable'])
                    ->join('patient as p','p.patient_id','zung.patient_id')
                    ->select(DB::raw("CONCAT(p.first_name,' ',p.last_name) as Nombre"),
                             DB::raw('DATE_FORMAT(zung.Fecha_zung,"%m/%d/%Y") AS Fecha_zung'),
                            'p.hist_id as Hist_ID',
                            'zung.Zung_1',
                            'zung.Zung_2',
                            'zung.Zung_3',
                            'zung.Zung_4',
                            'zung.Zung_5',
                            'zung.Zung_6',
                            'zung.Zung_7',
                            'zung.Zung_8',
                            'zung.Zung_9',
                            'zung.Zung_10',
                            'zung.Zung_11',
                            'zung.Zung_12',
                            'zung.Zung_13',
                            'zung.Zung_14',
                            'zung.Zung_15',
                            'zung.Zung_16',
                            'zung.Zung_17',
                            'zung.Zung_18',
                            'zung.Zung_19',
                            'zung.Zung_20',
                            'zung.Total_zung',
                            'zung.EAD_indice'                        
                      )->orderBy('id','DESC')->get();

                $data = json_decode( json_encode($data), true);
                $sheet->fromArray($data);
            });
        })->export('xlsx');

       }

    public function table(Request $request)
    {
         $query = Zung::with('patient','user')
                 ->select('zung.id','zung.user_id','zung.patient_id','zung.Fecha_zung as fecha','zung.created_at');
      
         return Datatables::of($query)->addColumn('action', function ($dat) {

               return ' <a href="' .route("zung.show", $dat->id) . '" class="btn btn-sm btn-info" role="button" target="_blank" data-toggle="tooltip" data-placement="right"><i class="fa fa-file-text" title="Ver registro"></i></a>

                  <a href="' .route("zung.edit", $dat->id) . '" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" data-toggle="tooltip" data-placement="right" title="Editar registro"></i></a> 
                  <button class="btn btn-sm btn-danger btn-delete" data-toggle="tooltip" data-placement="right" title="Eliminar" data-remote="'.route("zung.destroy", $dat->id) . '"><i class="fa fa-trash-o"></i></button> ';
                  })
                  ->editColumn('created_at', function ($contact){
                        return date('m/d/Y', strtotime($contact->created_at) );
                    })
                  ->filterColumn('created_at', function ($query, $keyword) {
                        $query->whereRaw("DATE_FORMAT(zung.created_at,'%m/%d/%y') like ?", ["%$keyword%"]);
                    })
                   ->editColumn('fecha', function ($contact){
                        return date('m/d/Y', strtotime($contact->fecha) );
                    })
                   ->filterColumn('fecha', function ($query, $keyword) {
                        $query->whereRaw("DATE_FORMAT(zung.Fecha_zung,'%m/%d/%y') like ?", ["%$keyword%"]);
                    })
                  ->rawColumns(['action'])
                  ->make(true);
    }

   
}
