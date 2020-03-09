<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;
use App\Patient;
use App\Http\Requests\PacienteRequest;
use Response;
use Redirect;

class PacientController extends Controller
{
   
    public function index(Request $request)
    {

      return View('patient.index');
    }

   
    public function create()
    {
        $id=null;
        return View('patient.form',compact('id'));
    }

    
    public function store(PacienteRequest $request)
    {
        try {
           
         $patient=new Patient;
         $patient->fill($request->all());
         $patient->user_id=Auth::user()->id;
         $patient->save();

          }catch (Exception $e){

             $notification = array(
            'message' => 'Error Ingresando Datos Intente mas Tarde', 
            'alert_type' => 'error',);
        
           \Session::flash('notification', $notification);
          return Redirect::action('PacientController@index');

          }
            $notification = array(
            'message' => 'Registro almacenado con exito.', 
            'alert_type' => 'success',);
        
            \Session::flash('notification', $notification);
           return Redirect::action('PacientController@index');

    }

   
    public function show($id)
    {
        $patients=Patient::findOrFail($id);

          return View('patient.show',compact('patients'));
    }

  
    public function edit($id)
    {
         $patients=Patient::findOrFail($id);

          return View('patient.form',compact('patients','id'));
    }

    public function update(PacienteRequest $request, $id)
    {

        try {

         $data=$request->all();

         DB::beginTransaction();
         $patient=Patient::findOrFail($id);
         $patient->fill($data);
         $patient->user_id=Auth::user()->id;
         $patient->update();

      
         DB::commit();
          }catch (Exception $e){
             DB::rollBack();
             $notification = array(
            'message' => 'Error Ingresando Datos Intente mas Tarde', 
            'alert_type' => 'error',);
        
           \Session::flash('notification', $notification);

          return Redirect::action('PacientController@index');

          }
          $notification = array(
            'message' => 'Registro actualizado con exito.', 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);
        return Redirect::action('PacientController@index');
    }

   
    public function destroy($id)
    {
       Patient::where('patient_id',$id)->delete();// eliminar el elemento
       return Response::json(['ok' => 'ok']);
    }


    public function table(Request $request)
    {
         $query = Patient::query();
      
         return Datatables::of($query)->addColumn('action', function ($dat) {

               return ' <a href="' .route("pacient.show", $dat->patient_id) . '" class="btn btn-sm btn-info"><i class="fa fa-file-text" data-toggle="tooltip" data-placement="right" title="Ver '.$dat->first_name.' '.$dat->last_name.'"></i></a>

                  <a href="' .route("pacient.edit", $dat->patient_id) . '" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" data-toggle="tooltip" data-placement="right" title="Editar '.$dat->first_name.' '.$dat->last_name.'"></i></a> 
                  <button class="btn btn-sm btn-danger btn-delete" data-toggle="tooltip" data-placement="right" title="Eliminar '.$dat->first_name.' '.$dat->last_name.'" data-remote="'.route("pacient.destroy", $dat->patient_id) . '"><i class="fa fa-trash-o"></i></button> ';
                  })
                  ->addColumn('checkbox', '<input type="checkbox" name="_checkbox[]" class="_checkbox" value="{{$patient_id}}" />')
                  ->rawColumns(['action'])
                  ->make(true);
    }

    public function export_xls(Request $request)
    {
      $GLOBALS['tx'] =$request->input('tx');
      Excel::create('Pacientes', function($excel) {
              
            $excel->sheet('Pacientes', function($sheet) {
           
                $dat =Patient::Search( $GLOBALS['tx'])->get();
                $dat = json_decode( json_encode($dat), true);
                $sheet->fromArray($dat);

            });
        })->export('xls');

    }



}
