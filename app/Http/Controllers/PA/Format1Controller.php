<?php

namespace App\Http\Controllers\PA;

use App\PaFormat1;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PaFormat1Request;
use Illuminate\Support\Facades\DB;

use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;
use Response;
use Redirect;

class Format1Controller extends Controller
{
   public function index(Request $request)
    {
        $create  = route('format1.create');
        $table   = route('format1_table');
        $export  = route('format1_xls');
        $title   = "Toma PA Sentado y de Pie";

        return View('PA.format1.index',compact('title','export','table','create'));
    }

    public function create()
    {
        return View('PA.format1.form');
    }

    
    public function store(PaFormat1Request $request)
    {

        $PaFormat1 = new PaFormat1;
        $PaFormat1->fill($request->all());
        $PaFormat1->user_id =auth()->user()->id;
        $PaFormat1->save();

         $notification = array(
            'message' => 'Registro almacenado con exito.', 
            'alert_type' => 'success',);
        
            \Session::flash('notification', $notification);
        return Redirect::action('PA\Format1Controller@index');
    }

    
    public function show($id)
    {
        $data = PaFormat1::join('patient as p','p.patient_id','pa_format1.patient_id')
                ->select( DB::raw("CONCAT(p.first_name,' ',p.last_name) as name"),
                    'p.hist_id',
                    'p.cedula',
                    DB::raw('TIMESTAMPDIFF(YEAR,p.date_birth,pa_format1.DATH1) AS edad'),
                    'p.gender',
                    'pa_format1.*')
                ->where('id',$id)
                ->orderBy('id','DESC')
                ->first();
       
        $view = \View::make('PA.format1.format_pdf', compact('data'))->render();        
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        $pdf->setPaper("letter");
        return $pdf->stream();     
    }

   
    public function edit($id)
    {
        $pasls = PaFormat1::select('*')->findOrFail($id);
        return View('PA.format1.form',compact('pasls'));
    }

    
    public function update(PaFormat1Request $request, $id)
    {
       
        $PaFormat1 = PaFormat1::findOrFail($id);
        $PaFormat1->fill($request->all());
        $PaFormat1->user_updated =auth()->user()->id;
        $PaFormat1->update();
        $notification = array(
            'message' => 'Registro actualizado con exito.', 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);
        return Redirect::action('PA\Format1Controller@index');
    }

   
    public function destroy($id)
    {
       $PaFormat1 = PaFormat1::findOrFail($id);
       $PaFormat1->user_deleted =auth()->user()->id;
       $PaFormat1->update();
       $PaFormat1 = PaFormat1::findOrFail($id)->delete();
       return;
    }

    public function export_xls(Request $request)
    {

       $GLOBALS['variable'] =$request->input('tx');
        
        Excel::create('Toma_AP_Acostado_Pie', function($excel) {
              
        $excel->sheet('Toma_AP_Acostado_Pie', function($sheet) {

        $data = PaFormat1::Search($GLOBALS['variable'])
                    ->select('p.hist_id',
                             DB::raw("CONCAT(p.first_name,' ',p.last_name) as nombre"),
                             DB::raw('TIMESTAMPDIFF(YEAR,p.date_birth,pa_format1.DATH1) AS Edad'),
                            'pa_format1.BH',
                             DB::raw('DATE_FORMAT(pa_format1.DATH1,"%m/%d/%Y") AS DATH1'),
                            'pa_format1.BW',
                            'pa_format1.SBP1',
                            'pa_format1.DBP1',
                            'pa_format1.PAM1',
                            'pa_format1.RATE1',
                            'pa_format1.x1OSBP as 1OSBP',
                            'pa_format1.x1ODBP as 1ODBP',
                            'pa_format1.x1OPAM as 1OPAM',
                            'pa_format1.RATE8',
                            'pa_format1.DATH2',
                            'pa_format1.BW2',
                            'pa_format1.SBP2',
                            'pa_format1.DBP2',
                            'pa_format1.PAM2',
                            'pa_format1.RATE2',
                            'pa_format1.x2OSBP as 2OSBP',
                            'pa_format1.x2ODBP as 2ODBP',
                            'pa_format1.x2OPAM as 2OPAM',
                            'pa_format1.RATE_pie2',
                            'pa_format1.DATH3',
                            'pa_format1.BW3',
                            'pa_format1.SBP3',
                            'pa_format1.DBP3',
                            'pa_format1.PAM3',
                            'pa_format1.RATE3',
                            'pa_format1.x3OSBP as 3OSBP',
                            'pa_format1.x3ODBP as 3ODBP',
                            'pa_format1.x3OPAM as 3OPAM',
                            'pa_format1.RATE_pie3',
                            'pa_format1.DATH4',
                            'pa_format1.BW4',
                            'pa_format1.SBP4',
                            'pa_format1.DBP4',
                            'pa_format1.PAM4',
                            'pa_format1.RATE4',
                            'pa_format1.x4OSBP as 4OSBP',
                            'pa_format1.x4ODBP as 4ODBP',
                            'pa_format1.x4OPAM as 4OPAM',
                            'pa_format1.RATE_pie4',
                            'pa_format1.DATH5',
                            'pa_format1.BW5',
                            'pa_format1.SBP5',
                            'pa_format1.DBP5',
                            'pa_format1.PAM5',
                            'pa_format1.RATE5',
                            'pa_format1.x5OSBP as 5OSBP',
                            'pa_format1.x5ODBP as 5ODBP',
                            'pa_format1.x5OPAM as 5OPAM',
                            'pa_format1.RATE_pie5',
                            'pa_format1.DATH6',
                            'pa_format1.BW6',
                            'pa_format1.SBP6',
                            'pa_format1.DBP6',
                            'pa_format1.PAM6',
                            'pa_format1.RATE6',
                            'pa_format1.x6OSBP as 6OSBP',
                            'pa_format1.x6ODBP as 6ODBP',
                            'pa_format1.x6OPAM as 6OPAM')
                     ->orderBy('pa_format1.id','DESC')->get();

                $data = json_decode( json_encode($data), true);
                $sheet->fromArray($data);
            });
        })->export('xlsx');

       }

    public function table(Request $request)
    {
         $query = PaFormat1::with('patient','user')
                 ->select('pa_format1.id','pa_format1.user_id','pa_format1.patient_id','pa_format1.DATH1 as fecha','pa_format1.created_at');
      
         return Datatables::of($query)->addColumn('action', function ($dat) {

               return ' <a href="' .route("format1.show", $dat->id) . '" class="btn btn-sm btn-info" role="button" target="_blank" data-toggle="tooltip" data-placement="right"><i class="fa fa-file-text" title="Ver registro"></i></a>

                  <a href="' .route("format1.edit", $dat->id) . '" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" data-toggle="tooltip" data-placement="right" title="Editar registro"></i></a> 
                  <button class="btn btn-sm btn-danger btn-delete" data-toggle="tooltip" data-placement="right" title="Eliminar" data-remote="'.route("format1.destroy", $dat->id) . '"><i class="fa fa-trash-o"></i></button> ';
                  })
                  ->editColumn('created_at', function ($contact){
                        return date('m/d/Y', strtotime($contact->created_at) );
                    })
                  ->filterColumn('created_at', function ($query, $keyword) {
                        $query->whereRaw("DATE_FORMAT(pa_format1.created_at,'%m/%d/%y') like ?", ["%$keyword%"]);
                    })
                   ->editColumn('fecha', function ($contact){
                        return date('m/d/Y', strtotime($contact->fecha) );
                    })
                   ->filterColumn('fecha', function ($query, $keyword) {
                        $query->whereRaw("DATE_FORMAT(pa_format1.DATH1,'%m/%d/%y') like ?", ["%$keyword%"]);
                    })
                  ->rawColumns(['action'])
                  ->make(true);
    }
 
}