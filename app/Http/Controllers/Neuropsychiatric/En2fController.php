<?php

namespace App\Http\Controllers\Neuropsychiatric;

use App\Neuropsychiatric\En2f;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\En2fRequest;
use Illuminate\Support\Facades\DB;

use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;
use Redirect;

class En2fController extends Controller
{
     public function index(Request $request)
     {
          $create  = route('en2f.create');
          $table   = route('en2f_table');
          $export  = route('en2f_xls');
          $title   = "NeuroPsiquiatria 2do Formato";

          return View('NeuroPsiquiatria.en2f.index',compact('title','export','table','create'));
       }
       
       public function create()
       {
           return View('NeuroPsiquiatria.en2f.form');
       }

       
       public function store(En2fRequest $request)
       {
           $En2f = new En2f;
           $En2f->fill($request->all());
           $En2f->user_id =auth()->user()->id;
           $En2f->save();

            $notification = array(
            'message' => 'Registro almacenado con exito.', 
            'alert_type' => 'success',);
        
            \Session::flash('notification', $notification);
           return Redirect::action('Neuropsicriatria\En2fController@index');
       }

       
       public function show($id)
       {
           $data = En2f::join('patient as p','p.patient_id','en2f.patient_id')
                               ->select( DB::raw("CONCAT(p.first_name,' ',p.last_name) as Neupsi_Nombres"),
                                          DB::raw('TIMESTAMPDIFF(YEAR,p.date_birth,en2f.fech_neu) AS edad_neu'),
                                         'p.hist_id as Hist_ID',
                                         'en2f.*')
                               ->where('en2f.id',$id)
                               ->first();
          
           $view = \View::make('NeuroPsiquiatria.en2f.format_pdf', compact('data'))->render();        
           $pdf  = \App::make('dompdf.wrapper');
           $pdf->loadHTML($view);
           $pdf->setPaper("letter", "portrait");
           return $pdf->stream();     
       }

      
       public function edit($id)
       {
           $data = En2f::findOrFail($id);
           return View('NeuroPsiquiatria.en2f.form',compact('data'));
       }

       
       public function update(En2fRequest $request, $id)
       {
           $En2f = En2f::findOrFail($id);
           $En2f->fill($request->all());
           $En2f->user_updated =auth()->user()->id;
           $En2f->update();
           $notification = array(
            'message' => 'Registro actualizado con exito.', 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);
           return Redirect::action('Neuropsychiatric\En2fController@index');
       }

      
       public function destroy($id)
       {
          $En2f = En2f::findOrFail($id);
          $En2f->user_deleted =auth()->user()->id;
          $En2f->update();
          $En2f = En2f::findOrFail($id)->delete();
          return;
       }

      public function export_xls(Request $request)
       {

          $GLOBALS['variable'] =$request->input('tx');
           
           Excel::create('en2f', function($excel) {
                 
           $excel->sheet('en2f', function($sheet) {

           $data = En2f::Search($GLOBALS['variable'])
                               ->select( DB::raw("CONCAT(p.first_name,' ',p.last_name) as Neupsi_Nombres"),
                                         DB::raw('DATE_FORMAT(p.date_birth,"%m/%d/%Y") AS edad_neu'),
                                         'p.hist_id as Hist_ID',
                                         'en2f.*')
                             ->where('p.hist_id', 'LIKE', "%".$GLOBALS['variable']."%")
                             ->orWhere('p.cedula', 'LIKE', "%".$GLOBALS['variable']."%")
                             ->orWhere('p.first_name', 'LIKE', "%".$GLOBALS['variable']."%")            
                             ->orderBy('p.hist_id','DESC')->get();

                   $data = json_decode( json_encode($data), true);
                   $sheet->fromArray($data);
               });
           })->export('xlsx');

          }

        public function table(Request $request)
        {
           $query = En2f::with('patient','user')
                   ->select('en2f.id','en2f.user_id','en2f.patient_id','en2f.fech_neu as fecha','en2f.created_at');
        
           return Datatables::of($query)->addColumn('action', function ($dat) {

                 return ' <a href="' .route("en2f.show", $dat->id) . '" class="btn btn-sm btn-info" role="button" target="_blank" data-toggle="tooltip" data-placement="right"><i class="fa fa-file-text" title="Ver registro"></i></a>

                    <a href="' .route("en2f.edit", $dat->id) . '" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" data-toggle="tooltip" data-placement="right" title="Editar registro"></i></a> 
                    <button class="btn btn-sm btn-danger btn-delete" data-toggle="tooltip" data-placement="right" title="Eliminar" data-remote="'.route("en2f.destroy", $dat->id) . '"><i class="fa fa-trash-o"></i></button> ';
                    })
                    ->editColumn('created_at', function ($contact){
                          return date('m/d/Y', strtotime($contact->created_at) );
                      })
                    ->filterColumn('created_at', function ($query, $keyword) {
                          $query->whereRaw("DATE_FORMAT(en2f.created_at,'%m/%d/%y') like ?", ["%$keyword%"]);
                      })
                     ->editColumn('fecha', function ($contact){
                          return date('m/d/Y', strtotime($contact->fecha) );
                      })
                     ->filterColumn('fecha', function ($query, $keyword) {
                          $query->whereRaw("DATE_FORMAT(en2f.fech_neu,'%m/%d/%y') like ?", ["%$keyword%"]);
                      })
                    ->rawColumns(['action'])
                    ->make(true);
      }

      
   }
