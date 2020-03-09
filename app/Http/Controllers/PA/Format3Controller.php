<?php

namespace App\Http\Controllers\PA;

use App\PaFormat3;
use App\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PaFormat3Request;
use Illuminate\Support\Facades\DB;

use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;
use Response;
use Redirect;

class Format3Controller extends Controller
{
   public function index(Request $request)
    {
        $create  = route('format3.create');
        $table   = route('format3_table');
        $export  = route('format3_xls');
        $title   = "TOMA DE PRESION SENTADO, ACOSTADO Y DE PIE";

        return View('PA.format3.index',compact('title','export','table','create'));
    }
    
    public function create()
    {
        $patients = Patient::select('patient_id', DB::raw("CONCAT(hist_id,'-', first_name,' ',last_name) as name"))
        ->orderBy('first_name', 'ASC')
        ->pluck('name','patient_id');
        return View('PA.format3.form',compact('patients'));
    }

    
    public function store(PaFormat3Request $request)
    {

        $PaFormat3 = new PaFormat3;
        $PaFormat3->fill($request->all());
        $PaFormat3->user_id =auth()->user()->id;
        $PaFormat3->save();

         $notification = array(
            'message' => 'Registro almacenado con exito.', 
            'alert_type' => 'success',);
        
            \Session::flash('notification', $notification);
        return Redirect::action('PA\Format3Controller@index');
    }

    
    public function show($id)
    {
        $data = PaFormat3::join('patient as p','p.patient_id','pa_format3.patient_id')
                ->select( DB::raw("CONCAT(p.first_name,' ',p.last_name) as name"),
                    'p.hist_id',
                    'p.cedula',
                    DB::raw('TIMESTAMPDIFF(YEAR,p.date_birth,pa_format3.DATH1) AS edad'),
                    'p.gender',
                    'pa_format3.*')
                ->where('id',$id)
                ->orderBy('id','DESC')
                ->first();
       
        $view = \View::make('PA.format3.format_pdf', compact('data'))->render();        
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        $pdf->setPaper("letter");
        return $pdf->stream();     
    }

   
    public function edit($id)
    {
        $patients = Patient::select('patient_id', DB::raw("CONCAT(hist_id,'-', first_name,' ',last_name) as name"))
                    ->orderBy('first_name', 'ASC')->pluck('name','patient_id');
        $pasls = PaFormat3::select('*')->findOrFail($id);
        return View('PA.format3.form',compact('patients','pasls'));
    }

    
    public function update(PaFormat3Request $request, $id)
    {
       
        $PaFormat3 = PaFormat3::findOrFail($id);
        $PaFormat3->fill($request->all());
        $PaFormat3->user_updated =auth()->user()->id;
        $PaFormat3->update();
        $notification = array(
            'message' => 'Registro actualizado con exito.', 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);
        return Redirect::action('PA\Format3Controller@index');
    }

   
    public function destroy($id)
    {
       $PaFormat3 = PaFormat3::findOrFail($id);
       $PaFormat3->user_deleted =auth()->user()->id;
       $PaFormat3->update();
       $PaFormat3 = PaFormat3::findOrFail($id)->delete();
       return;
    }

     public function export_xls(Request $request)
    {

       $GLOBALS['variable'] =$request->input('tx');
        
        Excel::create('Toma_AP_Acostado_Pie', function($excel) {
              
        $excel->sheet('Toma_AP_Acostado_Pie', function($sheet) {

        $data = PaFormat3::Search($GLOBALS['variable'])
                    ->select( DB::raw("CONCAT(p.first_name,' ',p.last_name) as nombre"),
                    'p.cedula',
                    'p.hist_id',
                    'pa_format3.BW',
                    'pa_format3.BH',
                     DB::raw('TIMESTAMPDIFF(YEAR,p.date_birth,pa_format3.DATH1) AS Edad'),
                    DB::raw('DATE_FORMAT(pa_format3.DATH1,"%m/%d/%Y") AS DATH1'),
                    'pa_format3.SBP1',
                    'pa_format3.DBP1',
                    'pa_format3.PAM1',
                    'pa_format3.RATE1',
                    'pa_format3.DATH2',
                    'pa_format3.SBP2',
                    'pa_format3.DBP2',
                    'pa_format3.PAM2',
                    'pa_format3.RATE2',
                    'pa_format3.DATH3',
                    'pa_format3.SBP3',
                    'pa_format3.DBP3',
                    'pa_format3.PAM3',
                    'pa_format3.RATE3',
                    'pa_format3.A_SBP6',
                    'pa_format3.A_DBP6',
                    'pa_format3.A_PAM',
                    'pa_format3.RATE6',
                    'pa_format3.x1OSBP as 1OSBP',
                    'pa_format3.x1ODBP as 1ODBP',
                    'pa_format3.x1OPAM as 1OPAM',
                    'pa_format3.RATE8',
                    'pa_format3.x3OSBP as 3OSBP',
                    'pa_format3.x3ODBP as 3ODBP',
                    'pa_format3.x3OPAM as 3OPAM',
                    'pa_format3.RATE9',
                    'pa_format3.x5OSBP as 5OSBP',
                    'pa_format3.x5ODBP as 5ODBP',
                    'pa_format3.x5OPAM as 5OPAM',
                    'pa_format3.RATE10',
                    'pa_format3.Fatiga',
                    'pa_format3.Debilidad',
                    'pa_format3.Mareos',
                    'pa_format3.Vision_borrosa',
                    'pa_format3.Vision_luminosos',
                    'pa_format3.Palpitaciones',
                    'pa_format3.Cefalea',
                    'pa_format3.Dolor_cuello',
                    'pa_format3.Otras_sintomas',
                    'pa_format3.Sudoracion',
                    'pa_format3.Palidez_cut_muc',
                    'pa_format3.Otras_signos'
                    )->orderBy('pa_format3.id','DESC')->get();

                $data = json_decode( json_encode($data), true);
                $sheet->fromArray($data);
            });
        })->export('xlsx');

       }

    public function table(Request $request)
    {
         $query = PaFormat3::with('patient','user')
                 ->select('pa_format3.id','pa_format3.user_id','pa_format3.patient_id','pa_format3.DATH1 as fecha','pa_format3.created_at');
      
         return Datatables::of($query)->addColumn('action', function ($dat) {

               return ' <a href="' .route("format3.show", $dat->id) . '" class="btn btn-sm btn-info" role="button" target="_blank" data-toggle="tooltip" data-placement="right"><i class="fa fa-file-text" title="Ver registro"></i></a>

                  <a href="' .route("format3.edit", $dat->id) . '" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" data-toggle="tooltip" data-placement="right" title="Editar registro"></i></a> 
                  <button class="btn btn-sm btn-danger btn-delete" data-toggle="tooltip" data-placement="right" title="Eliminar" data-remote="'.route("format3.destroy", $dat->id) . '"><i class="fa fa-trash-o"></i></button> ';
                  })
                  ->editColumn('created_at', function ($contact){
                        return date('m/d/Y', strtotime($contact->created_at) );
                    })
                  ->filterColumn('created_at', function ($query, $keyword) {
                        $query->whereRaw("DATE_FORMAT(pa_format3.created_at,'%m/%d/%y') like ?", ["%$keyword%"]);
                    })
                   ->editColumn('fecha', function ($contact){
                        return date('m/d/Y', strtotime($contact->fecha) );
                    })
                   ->filterColumn('fecha', function ($query, $keyword) {
                        $query->whereRaw("DATE_FORMAT(pa_format3.DATH1,'%m/%d/%y') like ?", ["%$keyword%"]);
                    })
                  ->rawColumns(['action'])
                  ->make(true);
    }
}