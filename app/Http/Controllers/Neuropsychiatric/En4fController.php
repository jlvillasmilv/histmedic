<?php

namespace App\Http\Controllers\Neuropsychiatric;

use App\Neuropsychiatric\En4f;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\En4fRequest;
use Illuminate\Support\Facades\DB;

use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;
use Redirect;

class En4fController extends Controller
{
       public function index(Request $request)
       {
          $create  = route('en4f.create');
          $table   = route('en4f_table');
          $export  = route('en4f_xls');
          $title   = "NeuroPsiquiatria 4to Formato";

          return View('NeuroPsiquiatria.en4f.index',compact('title','export','table','create'));
       }
       
       public function create()
       {
          
           return View('NeuroPsiquiatria.en4f.form');
       }

       
       public function store(En4fRequest $request)
       {
           $En4f = new En4f;
           $En4f->fill($request->all());
           $En4f->user_id =auth()->user()->id;
           $En4f->save();

            $notification = array(
            'message' => 'Registro almacenado con exito.', 
            'alert_type' => 'success',);
        
            \Session::flash('notification', $notification);
           return Redirect::action('Neuropsychiatric\En4fController@index');
       }

       
       public function show($id)
       {
           $data = En4f::join('patient as p','p.patient_id','en4f.patient_id')
                               ->select( 'p.hist_id as Hist_ID',
                                         DB::raw('DATE_FORMAT(en4f.fech_neu,"%m/%d/%Y") AS fech_neu'),
                                         DB::raw("CONCAT(p.first_name) as Neupsi_Nombres"),
                                         DB::raw("CONCAT(p.last_name) as Neupsi_Apellidos"),
                                         DB::raw('TIMESTAMPDIFF(YEAR,p.date_birth,en4f.fech_neu) AS edad_neu'),
                                         'p.gender as genero_neu',
                                         DB::raw('DATE_FORMAT(p.date_birth,"%m/%d/%Y") AS Dob_neu'),
                                         'p.ethnicity as raza',
                                        'en4f.*')
                               ->where('en4f.id',$id)
                               ->first();
                              
           $pdf = \PDF::loadView('NeuroPsiquiatria.en4f.format_pdf', compact('data'));
           return $pdf->stream();
       }

      
       public function edit($id)
       {
           $data = En4f::findOrFail($id);
           return View('NeuroPsiquiatria.en4f.form',compact('data'));
       }

       
       public function update(En4fRequest $request, $id)
       {
           $En4f = En4f::findOrFail($id);
           $En4f->fill($request->all());
           $En4f->user_updated =auth()->user()->id;
           $En4f->update();
           $notification = array(
            'message' => 'Registro actualizado con exito.', 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);
           return Redirect::action('Neuropsychiatric\En4fController@index');
       }

      
       public function destroy($id)
       {
          $En4f = En4f::findOrFail($id);
          $En4f->user_deleted =auth()->user()->id;
          $En4f->update();
          $En4f = En4f::findOrFail($id)->delete();
          return;
       }

      public function export_xls(Request $request)
      {

          $GLOBALS['variable'] =$request->input('tx');
           
           Excel::create('en4f', function($excel) {
                 
           $excel->sheet('en4f', function($sheet) {

           $data = En4f::Search($GLOBALS['variable'])
                               ->select( 'p.hist_id as Hist_ID',
                                         DB::raw('DATE_FORMAT(en4f.fech_neu,"%m/%d/%Y") AS fech_neu'),
                                         DB::raw("CONCAT(p.first_name) as Neupsi_Nombres"),
                                         DB::raw("CONCAT(p.last_name) as Neupsi_Apellidos"),
                                         DB::raw('TIMESTAMPDIFF(YEAR,p.date_birth,en4f.fech_neu) AS edad_neu'),
                                         'p.gender as genero_neu',
                                         DB::raw('DATE_FORMAT(p.date_birth,"%m/%d/%Y") AS Dob_neu'),
                                         'p.ethnicity as raza',
                                        'en4f.*')
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
           $query = En4f::with('patient','user')
                   ->select('en4f.id','en4f.user_id','en4f.patient_id','en4f.fech_neu as fecha','en4f.created_at');
        
           return Datatables::of($query)->addColumn('action', function ($dat) {

                 return ' <a href="' .route("en4f.show", $dat->id) . '" class="btn btn-sm btn-info" role="button" target="_blank" data-toggle="tooltip" data-placement="right"><i class="fa fa-file-text" title="Ver registro"></i></a>

                    <a href="' .route("en4f.edit", $dat->id) . '" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" data-toggle="tooltip" data-placement="right" title="Editar registro"></i></a> 
                    <button class="btn btn-sm btn-danger btn-delete" data-toggle="tooltip" data-placement="right" title="Eliminar" data-remote="'.route("en4f.destroy", $dat->id) . '"><i class="fa fa-trash-o"></i></button> ';
                    })
                    ->editColumn('created_at', function ($contact){
                          return date('m/d/Y', strtotime($contact->created_at) );
                      })
                    ->filterColumn('created_at', function ($query, $keyword) {
                          $query->whereRaw("DATE_FORMAT(en4f.created_at,'%m/%d/%y') like ?", ["%$keyword%"]);
                      })
                     ->editColumn('fecha', function ($contact){
                          return date('m/d/Y', strtotime($contact->fecha) );
                      })
                     ->filterColumn('fecha', function ($query, $keyword) {
                          $query->whereRaw("DATE_FORMAT(en4f.fech_neu,'%m/%d/%y') like ?", ["%$keyword%"]);
                      })
                    ->rawColumns(['action'])
                    ->make(true);
      }

      
   }
