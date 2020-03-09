<?php

namespace App\Http\Controllers;

use App\TerceraEdad;
use App\Http\Requests\TerceraEdadRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

use Maatwebsite\Excel\Facades\Excel;
use Redirect;

class TerceraEdadController extends Controller
{
   public function index(Request $request)
    {

        $create  = route('encuesta_tercera_edad.create');
        $table   = route('encuesta_tercera_edad_table');
        $export  = route('encuesta_tercera_edad_xls');
        $title   = "Encuesta tercera edad";

        return View('tercera_edad.index',compact('title','export','table','create'));

    }
    
    public function create()
    {
       
        return View('tercera_edad.form');
    }

    
    public function store(TerceraEdadRequest $request)
    {
        
        $TerceraEdad = new TerceraEdad;
        $TerceraEdad->fill($request->all());
        $TerceraEdad->user_id =auth()->user()->id;
        $TerceraEdad->save();

         $notification = array(
            'message' => 'Registro almacenado con exito.', 
            'alert_type' => 'success',);
        
            \Session::flash('notification', $notification);
        return Redirect::action('TerceraEdadController@index');
    }

    
    public function show($id)
    {
        $data = TerceraEdad::join('patient as p','p.patient_id','tercera_edad.patient_id')
                            ->select( 'p.first_name as AI_Nombre1er',
                             'p.second_name as AI_Nombre2do',
                             'p.last_name as AI_Apellido1er',
                             'p.second_last_name as AI_Apellido2do',
                             'p.cedula as AI_Cedula',
                              DB::raw('DATE_FORMAT(p.date_birth,"%m/%d/%Y") AS AI_DBIRTH'),
                             'p.city_born as AI_CuidadNacimiento',
                             'p.state_country as AI_Estado_Pais',
                             'p.gender as AL_SEX',
                             'p.ethnicity as AI_Raza',
                             'p.hist_id','tercera_edad.*')
                            ->where('tercera_edad.id',$id)
                            ->first();
       
        $view = \View::make('tercera_edad.format_pdf', compact('data'))->render();        
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        $pdf->setPaper("letter", "portrait");
        return $pdf->stream();     
    }

   
    public function edit($id)
    {
        $data = TerceraEdad::findOrFail($id);
        return View('tercera_edad.form',compact('data'));
    }

    
    public function update(TerceraEdadRequest $request, $id)
    {
        $TerceraEdad = TerceraEdad::findOrFail($id);
        $TerceraEdad->fill($request->all());
        $TerceraEdad->user_updated =auth()->user()->id;
        $TerceraEdad->update();
        $notification = array(
            'message' => 'Registro actualizado con exito.', 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);
        return Redirect::action('TerceraEdadController@index');
    }

   
    public function destroy($id)
    {
       $TerceraEdad = TerceraEdad::findOrFail($id);
       $TerceraEdad->user_deleted =auth()->user()->id;
       $TerceraEdad->update();
       $TerceraEdad = TerceraEdad::findOrFail($id)->delete();
       return;
    }

   public function export_xls(Request $request)
    {

       $GLOBALS['variable'] =$request->input('tx');
        
        Excel::create('TerceraEdad', function($excel) {
              
        $excel->sheet('TerceraEdad', function($sheet) {

        $data = TerceraEdad::Search($GLOBALS['variable'])
                            ->select( 'p.first_name as AI_Nombre1er',
                             'p.second_name as AI_Nombre2do',
                             'p.last_name as AI_Apellido1er',
                             'p.second_last_name as AI_Apellido2do',
                             'p.cedula as AI_Cedula',
                              DB::raw('DATE_FORMAT(p.date_birth,"%m/%d/%Y") AS AI_DBIRTH'),
                             'p.city_born as AI_CuidadNacimiento',
                             'p.state_country as AI_Estado_Pais',
                             'p.gender as AL_SEX',
                             'p.ethnicity as AI_Raza',
                             'p.hist_id','tercera_edad.*')
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
         $query = TerceraEdad::with('patient','user')->select('tercera_edad.id','tercera_edad.user_id','tercera_edad.patient_id','tercera_edad.AI_fecha as fecha','tercera_edad.created_at');
      
         return Datatables::of($query)->addColumn('action', function ($dat) {

               return ' <a href="' .route("encuesta_tercera_edad.show", $dat->id) . '" class="btn btn-sm btn-info" role="button" target="_blank" data-toggle="tooltip" data-placement="right"><i class="fa fa-file-text" title="Ver registro"></i></a>

                  <a href="' .route("encuesta_tercera_edad.edit", $dat->id) . '" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" data-toggle="tooltip" data-placement="right" title="Editar registro"></i></a> 
                  <button class="btn btn-sm btn-danger btn-delete" data-toggle="tooltip" data-placement="right" title="Eliminar" data-remote="'.route("encuesta_tercera_edad.destroy", $dat->id) . '"><i class="fa fa-trash-o"></i></button> ';
                  })
                  ->editColumn('created_at', function ($contact){
                        return date('m/d/Y', strtotime($contact->created_at) );
                    })
                  ->filterColumn('created_at', function ($query, $keyword) {
                        $query->whereRaw("DATE_FORMAT(tercera_edad.created_at,'%m/%d/%y') like ?", ["%$keyword%"]);
                    })
                   ->editColumn('fecha', function ($contact){
                        return date('m/d/Y', strtotime($contact->fecha) );
                    })
                   ->filterColumn('fecha', function ($query, $keyword) {
                        $query->whereRaw("DATE_FORMAT(tercera_edad.AI_fecha,'%m/%d/%y') like ?", ["%$keyword%"]);
                    })
                  ->rawColumns(['action'])
                  ->make(true);
    }

   
}
