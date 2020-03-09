<?php

namespace App\Http\Controllers\Neuropsychiatric;

use App\Neuropsychiatric\En1f;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\En1fRequest;
use Illuminate\Support\Facades\DB;

use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;
use Redirect;

class En1fController extends Controller
{
       public function index()
       {
          $create  = route('en1f.create');
          $table   = route('en1f_table');
          $export  = route('en1f_xls');
          $title   = "NeuroPsiquiatria 1er Formato";

          return View('NeuroPsiquiatria.en1f.index',compact('title','export','table','create'));
       }
       
       public function create()
       {
          
           return View('NeuroPsiquiatria.en1f.form');
       }

       
       public function store(En1fRequest $request)
       {
           $En1f = new En1f;
           $En1f->fill($request->all());
           $En1f->user_id =auth()->user()->id;
           $En1f->save();

            $notification = array(
            'message' => 'Registro almacenado con exito.', 
            'alert_type' => 'success',);
        
            \Session::flash('notification', $notification);
           return Redirect::action('Neuropsychiatric\En1fController@index');
       }

       
       public function show($id)
       {
           $data = En1f::join('patient as p','p.patient_id','en1f.patient_id')
                               ->select( 'p.hist_id',
                                        DB::raw('DATE_FORMAT(en1f.fech_neu,"%m/%d/%Y") AS fech_neu'),
                                        DB::raw("p.first_name as Neupsi_Nombres"),
                                        DB::raw("p.last_name as Neupsi_Apellidos"),
                                        DB::raw('TIMESTAMPDIFF(YEAR,p.date_birth,en1f.fech_neu) AS edad_neu'),
                                        'p.gender as genero_neu',
                                        DB::raw('DATE_FORMAT(p.date_birth,"%m/%d/%Y") AS Dob_neu'),
                                        'p.ethnicity as raza',
                                        'en1f.*')
                               ->where('en1f.id',$id)
                               ->first();
          
           $view = \View::make('NeuroPsiquiatria.en1f.format_pdf', compact('data'))->render();        
           $pdf  = \App::make('dompdf.wrapper');
           $pdf->loadHTML($view);
           $pdf->setPaper("letter", "portrait");
           return $pdf->stream();     
       }

      
       public function edit($id)
       {
           $data = En1f::findOrFail($id);
           return View('NeuroPsiquiatria.en1f.form',compact('data'));
       }

       
       public function update(En1fRequest $request, $id)
       {
           $En1f = En1f::findOrFail($id);
           $En1f->fill($request->all());
           $En1f->user_updated =auth()->user()->id;
           $En1f->update();
           $notification = array(
            'message' => 'Registro actualizado con exito.', 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);
           return Redirect::action('Neuropsychiatric\En1fController@index');
       }

      
       public function destroy($id)
       {
          $En1f = En1f::findOrFail($id);
          $En1f->user_deleted =auth()->user()->id;
          $En1f->update();
          $En1f = En1f::findOrFail($id)->delete();
          return;
       }

      public function export_xls(Request $request)
       {

          $GLOBALS['variable'] =$request->input('tx');
           
           Excel::create('en1f', function($excel) {
                 
           $excel->sheet('en1f', function($sheet) {

           $data = En1f::Search($GLOBALS['variable'])
                               ->select( 'p.hist_id',
                                        DB::raw('DATE_FORMAT(en1f.fech_neu,"%m/%d/%Y") AS fech_neu'),
                                        DB::raw("p.first_name as Neupsi_Nombres"),
                                        DB::raw("p.last_name as Neupsi_Apellidos"),
                                        DB::raw('TIMESTAMPDIFF(YEAR,p.date_birth,en1f.fech_neu) AS edad_neu'),
                                        'p.gender as genero_neu',
                                        DB::raw('DATE_FORMAT(p.date_birth,"%m/%d/%Y") AS Dob_neu'),
                                        'p.ethnicity as raza',
                                        'en1f.*')
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
         $query = En1f::with('patient','user')
                 ->select('en1f.id','en1f.user_id','en1f.patient_id','en1f.fech_neu as fecha','en1f.created_at');
      
         return Datatables::of($query)->addColumn('action', function ($dat) {

               return ' <a href="' .route("en1f.show", $dat->id) . '" class="btn btn-sm btn-info" role="button" target="_blank" data-toggle="tooltip" data-placement="right"><i class="fa fa-file-text" title="Ver registro"></i></a>

                  <a href="' .route("en1f.edit", $dat->id) . '" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" data-toggle="tooltip" data-placement="right" title="Editar registro"></i></a> 
                  <button class="btn btn-sm btn-danger btn-delete" data-toggle="tooltip" data-placement="right" title="Eliminar" data-remote="'.route("en1f.destroy", $dat->id) . '"><i class="fa fa-trash-o"></i></button> ';
                  })
                  ->editColumn('created_at', function ($contact){
                        return date('m/d/Y', strtotime($contact->created_at) );
                    })
                  ->filterColumn('created_at', function ($query, $keyword) {
                        $query->whereRaw("DATE_FORMAT(en1f.created_at,'%m/%d/%y') like ?", ["%$keyword%"]);
                    })
                   ->editColumn('fecha', function ($contact){
                        return date('m/d/Y', strtotime($contact->fecha) );
                    })
                   ->filterColumn('fecha', function ($query, $keyword) {
                        $query->whereRaw("DATE_FORMAT(en1f.fech_neu,'%m/%d/%y') like ?", ["%$keyword%"]);
                    })
                  ->rawColumns(['action'])
                  ->make(true);
    }

      
   }
