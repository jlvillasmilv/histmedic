<?php

namespace App\Http\Controllers\PA;

use App\PaFormat2;
use App\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PaFormat2Request;
use Illuminate\Support\Facades\DB;

use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;
use Response;
use Redirect;

class Format2Controller extends Controller
{
   
    public function index(Request $request)
    {
        $create  = route('format2.create');
        $table   = route('format2_table');
        $export  = route('format2_xls');
        $title   = "TOMA DE PRESIÓN ARTERIAL ACOSTADO DE PIE";

        return View('PA.format2.index',compact('title','export','table','create'));
    }
    
    public function create()
    {
        $patients = Patient::select('patient_id', DB::raw("CONCAT(hist_id,'-', first_name,' ',last_name) as name"))
        ->orderBy('first_name', 'ASC')
        ->pluck('name','patient_id');
        return View('PA.format2.form',compact('patients'));
    }

    
    public function store(PaFormat2Request $request)
    {

        $PaFormat2 = new PaFormat2;
        $PaFormat2->fill($request->all());
        $PaFormat2->user_id =auth()->user()->id;
        $PaFormat2->save();

         $notification = array(
            'message' => 'Registro almacenado con exito.', 
            'alert_type' => 'success',);
        
            \Session::flash('notification', $notification);
        return Redirect::action('PA\Format2Controller@index');
    }

    
    public function show($id)
    {
        $data = PaFormat2::join('patient as p','p.patient_id','pa_format2.patient_id')
                ->select( DB::raw("CONCAT(p.first_name,' ',p.last_name) as name"),
                    'p.hist_id',
                    'p.cedula',
                    DB::raw('TIMESTAMPDIFF(YEAR,p.date_birth,pa_format2.DATH1) AS edad'),
                    'p.gender',
                    'pa_format2.*',
                    'pa_format2.1OSBP as x1OSBP',
                    'pa_format2.1ODBP as x1ODBP',
                    'pa_format2.5OSBP as x5OSBP',
                    'pa_format2.5ODBP as x5ODBP')
                ->where('id',$id)
                ->orderBy('id','DESC')
                ->first();
       
        $view = \View::make('PA.format2.format_pdf', compact('data'))->render();        
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        $pdf->setPaper("letter");
        return $pdf->stream();     
    }

   
    public function edit($id)
    {
        $patients = Patient::select('patient_id', DB::raw("CONCAT(hist_id,'-', first_name,' ',last_name) as name"))
                    ->orderBy('first_name', 'ASC')->pluck('name','patient_id');
        $pasls = PaFormat2::select('*','1OSBP as x1OSBP','1ODBP as x1ODBP','5OSBP as x5OSBP','5ODBP as x5ODBP')->findOrFail($id);
        return View('PA.format2.form',compact('patients','pasls'));
    }

    
    public function update(PaFormat2Request $request, $id)
    {
        $PaFormat2 = PaFormat2::findOrFail($id);
        $PaFormat2->fill($request->all());
        $PaFormat2->user_updated =auth()->user()->id;
        $PaFormat2->update();
        $notification = array(
            'message' => 'Registro actualizado con exito.', 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);
        return Redirect::action('PA\Format2Controller@index');
    }

   
    public function destroy($id)
    {
       $PaFormat2 = PaFormat2::findOrFail($id);
       $PaFormat2->user_deleted =auth()->user()->id;
       $PaFormat2->update();
       $PaFormat2 = PaFormat2::findOrFail($id)->delete();
       return;
    }

    public function export_xls(Request $request)
    {

       $GLOBALS['variable'] =$request->input('tx');
        
        Excel::create('Toma_AP_Acostado_Pie', function($excel) {
              
            $excel->sheet('Toma_AP_Acostado_Pie', function($sheet) {

            $data = PaFormat2::Search($GLOBALS['variable'])
                        ->select( 'p.hist_id', DB::raw("CONCAT(p.first_name,' ',p.last_name) as nombre"),
                        'p.cedula',
                        DB::raw('TIMESTAMPDIFF(YEAR,p.date_birth,pa_format2.DATH1) AS Edad'),
                        'p.gender as sexo',
                        DB::raw('DATE_FORMAT(pa_format2.DATH1,"%m/%d/%Y") AS DATH1'),
                        'pa_format2.A_SBP6',
                        'pa_format2.A_DBP6',
                        'pa_format2.RATE6',
                        'pa_format2.1ODBP',
                        'pa_format2.RATE8',
                        'pa_format2.5OSBP',
                        'pa_format2.5ODBP',
                        'pa_format2.RATE10')
                        ->orderBy('pa_format2.id','DESC')
                        ->get();

                    $data = json_decode( json_encode($data), true);
                    $sheet->fromArray($data);
            });
        })->export('xlsx');

    }  
    
    public function table(Request $request)
    {
         $query = PaFormat2::with('patient','user')
                 ->select('pa_format2.id','pa_format2.user_id','pa_format2.patient_id','pa_format2.DATH1 as fecha','pa_format2.created_at');
      
         return Datatables::of($query)->addColumn('action', function ($dat) {

               return ' <a href="' .route("format2.show", $dat->id) . '" class="btn btn-sm btn-info" role="button" target="_blank" data-toggle="tooltip" data-placement="right"><i class="fa fa-file-text" title="Ver registro"></i></a>

                  <a href="' .route("format2.edit", $dat->id) . '" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" data-toggle="tooltip" data-placement="right" title="Editar registro"></i></a> 
                  <button class="btn btn-sm btn-danger btn-delete" data-toggle="tooltip" data-placement="right" title="Eliminar" data-remote="'.route("format2.destroy", $dat->id) . '"><i class="fa fa-trash-o"></i></button> ';
                  })
                  ->editColumn('created_at', function ($contact){
                        return date('m/d/Y', strtotime($contact->created_at) );
                    })
                  ->filterColumn('created_at', function ($query, $keyword) {
                        $query->whereRaw("DATE_FORMAT(pa_format2.created_at,'%m/%d/%y') like ?", ["%$keyword%"]);
                    })
                   ->editColumn('fecha', function ($contact){
                        return date('m/d/Y', strtotime($contact->fecha) );
                    })
                   ->filterColumn('fecha', function ($query, $keyword) {
                        $query->whereRaw("DATE_FORMAT(pa_format2.DATH1,'%m/%d/%y') like ?", ["%$keyword%"]);
                    })
                  ->rawColumns(['action'])
                  ->make(true);
    }
}