<?php

namespace App\Http\Controllers\Neuropsychiatric;

use App\Neuropsychiatric\En3f;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\En3fRequest;
use Illuminate\Support\Facades\DB;

use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;
use Redirect;

class En3fController extends Controller
{
       public function index(Request $request)
       {
          $create  = route('en3f.create');
          $table   = route('en3f_table');
          $export  = route('en3f_xls');
          $title   = "NeuroPsiquiatria 3er Formato";

          return View('NeuroPsiquiatria.en3f.index',compact('title','export','table','create'));
       }

       
       public function create()
       {
          
           return View('NeuroPsiquiatria.en3f.form');
       }

       
       public function store(En3fRequest $request)
       {
           $En3f = new En3f;
           $En3f->fill($request->all());
           $En3f->user_id =auth()->user()->id;
           $En3f->save();

            $notification = array(
            'message' => 'Registro almacenado con exito.', 
            'alert_type' => 'success',);
        
            \Session::flash('notification', $notification);
           return Redirect::action('Neuropsychiatric\En3fController@index');
       }

       
       public function show($id)
       {
           $data = En3f::join('patient as p','p.patient_id','en3f.patient_id')
                               ->select( 'p.hist_id as Hist_ID',
                                         DB::raw('DATE_FORMAT(en3f.fech_neu,"%m/%d/%Y") AS fech_neu'),
                                         DB::raw("CONCAT(p.first_name) as Neupsi_Nombres"),
                                         DB::raw("CONCAT(p.last_name) as Neupsi_Apellidos"),
                                         DB::raw('TIMESTAMPDIFF(YEAR,p.date_birth,en3f.fech_neu) AS edad_neu'),
                                         'p.gender as genero_neu',
                                         DB::raw('DATE_FORMAT(p.date_birth,"%m/%d/%Y") AS Dob_neu'),
                                         'p.ethnicity as raza',
                                        'en3f.*')
                               ->where('en3f.id',$id)
                               ->first(); 

           $pdf = \PDF::loadView('NeuroPsiquiatria.en3f.format_pdf', compact('data'));
           return $pdf->stream();
       }

      
       public function edit($id)
       {
           $data = En3f::findOrFail($id);
           return View('NeuroPsiquiatria.en3f.form',compact('data'));
       }

       
       public function update(En3fRequest $request, $id)
       {
           $En3f = En3f::findOrFail($id);
           $En3f->fill($request->all());
           $En3f->user_updated =auth()->user()->id;
           $En3f->update();
           $notification = array(
            'message' => 'Registro actualizado con exito.', 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);
           return Redirect::action('Neuropsychiatric\En3fController@index');
       }

      
       public function destroy($id)
       {
          $En3f = En3f::findOrFail($id);
          $En3f->user_deleted =auth()->user()->id;
          $En3f->update();
          $En3f = En3f::findOrFail($id)->delete();
          return;
       }

      public function export_xls(Request $request)
       {

          $GLOBALS['variable'] =$request->input('tx');
           
           Excel::create('en3f', function($excel) {
                 
           $excel->sheet('en3f', function($sheet) {

           $data = En3f::Search($GLOBALS['variable'])
                               ->select( 'p.hist_id as Hist_ID',
                                         DB::raw('DATE_FORMAT(en3f.fech_neu,"%m/%d/%Y") AS fech_neu'),
                                         DB::raw("CONCAT(p.first_name) as Neupsi_Nombres"),
                                         DB::raw("CONCAT(p.last_name) as Neupsi_Apellidos"),
                                         DB::raw('TIMESTAMPDIFF(YEAR,p.date_birth,en3f.fech_neu) AS edad_neu'),
                                         'p.gender as genero_neu',
                                         DB::raw('DATE_FORMAT(p.date_birth,"%m/%d/%Y") AS Dob_neu'),
                                         'p.ethnicity as raza',
                                        'en3f.*')
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
           $query = En3f::with('patient','user')
                   ->select('en3f.id','en3f.user_id','en3f.patient_id','en3f.fech_neu as fecha','en3f.created_at');
        
           return Datatables::of($query)->addColumn('action', function ($dat) {

                 return ' <a href="' .route("en3f.show", $dat->id) . '" class="btn btn-sm btn-info" role="button" target="_blank" data-toggle="tooltip" data-placement="right"><i class="fa fa-file-text" title="Ver registro"></i></a>

                    <a href="' .route("en3f.edit", $dat->id) . '" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" data-toggle="tooltip" data-placement="right" title="Editar registro"></i></a> 
                    <button class="btn btn-sm btn-danger btn-delete" data-toggle="tooltip" data-placement="right" title="Eliminar" data-remote="'.route("en3f.destroy", $dat->id) . '"><i class="fa fa-trash-o"></i></button> ';
                    })
                    ->editColumn('created_at', function ($contact){
                          return date('m/d/Y', strtotime($contact->created_at) );
                      })
                    ->filterColumn('created_at', function ($query, $keyword) {
                          $query->whereRaw("DATE_FORMAT(en3f.created_at,'%m/%d/%y') like ?", ["%$keyword%"]);
                      })
                     ->editColumn('fecha', function ($contact){
                          return date('m/d/Y', strtotime($contact->fecha) );
                      })
                     ->filterColumn('fecha', function ($query, $keyword) {
                          $query->whereRaw("DATE_FORMAT(en3f.fech_neu,'%m/%d/%y') like ?", ["%$keyword%"]);
                      })
                    ->rawColumns(['action'])
                    ->make(true);
      }
      
   }
