<?php

namespace App\Http\Controllers;

use App\FamilyInterview;
use App\Patient;
use App\Http\Requests\FamilyInterviewRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

use Maatwebsite\Excel\Facades\Excel;
use Response;
use Redirect;

class FamilyInterviewController extends Controller
{
    public function index(Request $request)
    {
        $create  = route('entrevista_familiar.create');
        $table   = route('entrevista_familiar_table');
        $export  = route('entrevista_familiar_xls');
        $title   = "Entrevista_familiar";

        return View('family_interview.index',compact('title','export','table','create'));
    }

    
    public function create()
    {
        $patients = Patient::select('patient_id', DB::raw("CONCAT(hist_id,'-', first_name,' ',last_name) as name"))
        ->orderBy('first_name', 'ASC')
        ->pluck('name','patient_id');
        return View('family_interview.form',compact('patients'));
    }

    
    public function store(FamilyInterviewRequest $request)
    {
        $FamilyInterview = new FamilyInterview;
        $FamilyInterview->fill($request->all());
        $FamilyInterview->user_id =auth()->user()->id;
        $FamilyInterview->save();

         $notification = array(
            'message' => 'Registro almacenado con exito.', 
            'alert_type' => 'success',);
        
            \Session::flash('notification', $notification);
        return Redirect::action('FamilyInterviewController@index');
    }

    
    public function show($id)
    {
        $data = FamilyInterview::join('patient as p','p.patient_id','family_interview.patient_id')
                ->select( DB::raw("CONCAT(p.first_name,' ',p.last_name) as name"),'p.hist_id','family_interview.*',
             DB::raw('TIMESTAMPDIFF(YEAR,p.date_birth,family_interview.fecha_ef) AS edad'))
                ->where('id',$id)
                ->orderBy('id','DESC')
                ->first();
       
        $view = \View::make('family_interview.format_pdf', compact('data'))->render();        
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        $pdf->setPaper("letter", "portrait");
        return $pdf->stream();     
    }

   
    public function edit($id)
    {
        $patients = Patient::select('patient_id', DB::raw("CONCAT(hist_id,'-', first_name,' ',last_name) as name"))
                    ->orderBy('first_name', 'ASC')->pluck('name','patient_id');
        $data = FamilyInterview::findOrFail($id);
        return View('family_interview.form',compact('patients','data'));
    }

    
    public function update(FamilyInterviewRequest $request, $id)
    {
        $FamilyInterview = FamilyInterview::findOrFail($id);
        $FamilyInterview->fill($request->all());
        $FamilyInterview->user_updated =auth()->user()->id;
        $FamilyInterview->update();
        $notification = array(
            'message' => 'Registro actualizado con exito.', 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);
        return Redirect::action('FamilyInterviewController@index');
    }

   
    public function destroy($id)
    {
       $FamilyInterview = FamilyInterview::findOrFail($id);
       $FamilyInterview->user_deleted =auth()->user()->id;
       $FamilyInterview->update();
       $FamilyInterview = FamilyInterview::findOrFail($id)->delete();
       return;
    }

   public function export_xls(Request $request)
    {

       $GLOBALS['variable'] =$request->input('tx');
        
        Excel::create('Entrevista_Familiar', function($excel) {
              
        $excel->sheet('Entrevista_Familiar', function($sheet) {

        $data = FamilyInterview::Search($GLOBALS['variable'])
                    ->select(DB::raw("CONCAT(p.first_name,' ',p.last_name) as Nombre_Parti"),
                            'p.hist_id as Hist_ID',
                            DB::raw('TIMESTAMPDIFF(YEAR,p.date_birth,family_interview.fecha_ef) AS edad_ef'),
                            'family_interview.Educa_ef',
                            'family_interview.direc_ef',
                            'family_interview.telef_ef',
                            'family_interview.fuente',
                            'family_interview.Parentesco',
                            'family_interview.Parentesco_Telefono',
                            'family_interview.Numero_fuentes',
                            'family_interview.fecha_ef',
                            'family_interview.Evaluador',
                            'family_interview.memor_1',
                            'family_interview.memor_2',
                            'family_interview.memor_3',
                            'family_interview.memor_4',
                            'family_interview.memor_5',
                            'family_interview.memor_6',
                            'family_interview.memor_7',
                            'family_interview.memor_8',
                            'family_interview.memor_9',
                            'family_interview.memor_10',
                            'family_interview.memor_11',
                            'family_interview.memor_12',
                            'family_interview.memor_13',
                            'family_interview.memor_14',
                            'family_interview.memor_15',
                            'family_interview.expre_16',
                            'family_interview.expre_17',
                            'family_interview.expre_18',
                            'family_interview.expre_19',
                            'family_interview.perso_20',
                            'family_interview.perso_21',
                            'family_interview.perso_22',
                            'family_interview.perso_23',
                            'family_interview.perso_24',
                            'family_interview.perso_25',
                            'family_interview.perso_26',
                            'family_interview.perso_27',
                            'family_interview.perso_28',
                            'family_interview.perso_31',
                            'family_interview.perso_32',
                            'family_interview.perso_33',
                            'family_interview.perso_34',
                            'family_interview.perso_35',
                            'family_interview.otros_36',
                            'family_interview.otros_37',
                            'family_interview.otros_38',
                            'family_interview.otros_39',
                            'family_interview.otros_40',
                            'family_interview.otros_41',
                            'family_interview.otros_42',
                            'family_interview.otros_43',
                            'family_interview.otros_44',
                            'family_interview.otros_45',
                            'family_interview.otros_46',
                            'family_interview.otros_47',
                            'family_interview.alterac',
                            'family_interview.hermano',
                            'family_interview.her_vivo',
                            'family_interview.num_hijo',
                            'family_interview.hijo_viv',
                            'family_interview.Antece_Fami_demencia',
                            'family_interview.Parentesco_Fami_demencia',
                            'family_interview.Nombre_Fami_demencia',
                            'family_interview.Edad_Fami_demencia',
                            'family_interview.IF_muerte',
                            'family_interview.Muerte_causa',
                            'family_interview.Muerte_prefectura',
                            'family_interview.Muerte_Velado',
                            'family_interview.Habilid',
                            'family_interview.compras',
                            'family_interview.prep_ali',
                            'family_interview.tar_dome',
                            'family_interview.lavar',
                            'family_interview.transp',
                            'family_interview.resp_med',
                            'family_interview.finanza',
                            'family_interview.total_la',
                            'family_interview.higiene',
                            'family_interview.cap_alim',
                            'family_interview.vestirse',
                            'family_interview.arreglar',
                            'family_interview.deambul',
                            'family_interview.banarse',
                            'family_interview.tot_auto',
                            'family_interview.tot_glob'                        
                      )->orderBy('id','DESC')->get();

                $data = json_decode( json_encode($data), true);
                $sheet->fromArray($data);
            });
        })->export('xls');

       }

    public function table(Request $request)
    {
         $query = FamilyInterview::with('patient','user')
                 ->select('family_interview.id','family_interview.user_id','family_interview.patient_id','family_interview.fecha_ef as fecha','family_interview.created_at');
      
         return Datatables::of($query)->addColumn('action', function ($dat) {

               return ' <a href="' .route("entrevista_familiar.show", $dat->id) . '" class="btn btn-sm btn-info" role="button" target="_blank" data-toggle="tooltip" data-placement="right"><i class="fa fa-file-text" title="Ver registro"></i></a>

                  <a href="' .route("entrevista_familiar.edit", $dat->id) . '" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" data-toggle="tooltip" data-placement="right" title="Editar registro"></i></a> 
                  <button class="btn btn-sm btn-danger btn-delete" data-toggle="tooltip" data-placement="right" title="Eliminar" data-remote="'.route("entrevista_familiar.destroy", $dat->id) . '"><i class="fa fa-trash-o"></i></button> ';
                  })
                  ->editColumn('created_at', function ($contact){
                        return date('m/d/Y', strtotime($contact->created_at) );
                    })
                  ->filterColumn('created_at', function ($query, $keyword) {
                        $query->whereRaw("DATE_FORMAT(family_interview.created_at,'%m/%d/%y') like ?", ["%$keyword%"]);
                    })
                   ->editColumn('fecha', function ($contact){
                        return date('m/d/Y', strtotime($contact->fecha) );
                    })
                   ->filterColumn('fecha', function ($query, $keyword) {
                        $query->whereRaw("DATE_FORMAT(family_interview.Fecha_family_interview,'%m/%d/%y') like ?", ["%$keyword%"]);
                    })
                  ->rawColumns(['action'])
                  ->make(true);
    }

   
}
