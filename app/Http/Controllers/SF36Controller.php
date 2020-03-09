<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\SF36Request;

use Yajra\DataTables\Facades\DataTables;

use App\SF36;
use Response;
use Redirect;


class SF36Controller extends Controller
{
    
   public function index(Request $request)
    {

        $create  = route('sf36.create');
        $table   = route('sf36_table');
        $export  = route('sf36_xls');
        $title   = "Encuesta SF36";

        return View('sf36.index',compact('title','export','table','create'));
      
    }

   
    public function create()
    {
      
        return View('sf36.form'); 
    }

    
    public function store(SF36Request $request)
    {

        try {

         $sf36=new SF36;
         $sf36->fill($request->all());
         $sf36->user_id=Auth::user()->id;
         $sf36->save();

          }catch (Exception $e){

          Flash::error('Error Ingresando Datos Intente mas Tarde');
          return Redirect::action('SF36Controller@index');

          }
            $notification = array(
            'message' => 'Registro almacenado con exito.', 
            'alert_type' => 'success',);
        
            \Session::flash('notification', $notification);
           return Redirect::action('SF36Controller@index');

    }

    
    public function show($id)
    {

       $sf36=SF36::leftjoin('patient as p','p.patient_id','sf36.patient_id')
              ->select(DB::raw("CONCAT(p.first_name,' ',p.last_name) as SF_NombreApellido"),  
                'p.hist_id','p.gender',
                DB::raw('TIMESTAMPDIFF(YEAR,date_birth,sf36.datsf36) AS SF_Edad'),
               'sf36.*',
                'sf36.sf36_id')->where('sf36_id',$id)->first();
        
          // dd($sf36);
        $view = \View::make('sf36.format_pdf', compact('sf36'))->render();
          
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        $pdf->setPaper("letter", "portrait");

       return $pdf->stream();  
        
    }

   
    public function edit($id)
    {
      $data=SF36::findOrFail($id);
      return View('sf36.form',compact('data'));
    }

    
    public function update(SF36Request $request, $id)
    {
         try {

         $sf36=SF36::findOrFail($id);
         $sf36->fill($request->all());
         $sf36->user_updated=Auth::user()->id;
         $sf36->update();

          }catch (Exception $e){

          Flash::error('Error Ingresando Datos Intente mas Tarde');
          return Redirect::action('SF36Controller@index');

          }
            $notification = array(
            'message' => 'Registro almacenado con exito.', 
            'alert_type' => 'success',);
        
            \Session::flash('notification', $notification);
           return Redirect::action('SF36Controller@index');

    }

   
    public function destroy($id)
    {
        
      
       $SF36 = SF36::findOrFail($id);
       $SF36->user_deleted =auth()->user()->id;
       $SF36->update();
       $SF36 = SF36::findOrFail($id)->delete();
       return;
    }

  public function export_xls(Request $request)
  {

       $GLOBALS['variable'] =$request->input('tx');
          Excel::create('SF36 Evaluation', function($excel) {
              
            $excel->sheet('SF36 Evaluation', function($sheet) {
                  
                $sf36 =SF36::Search2( $GLOBALS['variable'])->get();
                $sf36 = json_decode( json_encode($sf36), true);
                $sheet->fromArray($sf36);

            });
        })->export('xlsx');

  }

  public function table(Request $request)
  {
         $query = SF36::with('patient','user')->select('sf36.sf36_id','sf36.user_id','sf36.patient_id','sf36.datsf36 as fecha','sf36.created_at');
      
         return Datatables::of($query)->addColumn('action', function ($dat) {

               return ' <a href="' .route("sf36.show", $dat->sf36_id) . '" class="btn btn-sm btn-info" role="button" target="_blank"><i class="fa fa-file-text" data-toggle="tooltip" data-placement="right" title="Ver registro"></i></a>

                  <a href="' .route("sf36.edit", $dat->sf36_id) . '" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" data-toggle="tooltip" data-placement="right" title="Editar registro"></i></a> 
                  <button class="btn btn-sm btn-danger btn-delete" data-toggle="tooltip" data-placement="right" title="Eliminar" data-remote="'.route("sf36.destroy", $dat->sf36_id) . '"><i class="fa fa-trash-o"></i></button> ';
                  })
                  ->editColumn('created_at', function ($contact){
                        return date('m/d/Y', strtotime($contact->created_at) );
                    })
                  ->filterColumn('created_at', function ($query, $keyword) {
                        $query->whereRaw("DATE_FORMAT(sf36.created_at,'%m/%d/%y') like ?", ["%$keyword%"]);
                    })
                   ->editColumn('fecha', function ($contact){
                        return date('m/d/Y', strtotime($contact->fecha) );
                    })
                   ->filterColumn('fecha', function ($query, $keyword) {
                        $query->whereRaw("DATE_FORMAT(sf36.datsf36,'%m/%d/%y') like ?", ["%$keyword%"]);
                    })
                  ->rawColumns(['action'])
                  ->make(true);
    }
     
}
