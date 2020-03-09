<?php

namespace App\Http\Controllers;

use App\FollowInterview;
use App\Patient;
use App\Http\Requests\FollowInterviewRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Yajra\DataTables\Facades\DataTables;

use Maatwebsite\Excel\Facades\Excel;
use Response;
use Redirect;

class FollowInterviewController extends Controller
{
   public function index(Request $request)
   {
        $create  = route('entrevista_segumiento.create');
        $table   = route('entrevista_segumiento_table');
        $export  = route('entrevista_segumiento_xls');
        $title   = "Entrevista segumiento";

        return View('follow_interview.index',compact('title','export','table','create'));

    }

    
    public function create()
    {
        $patients = Patient::select('patient_id', DB::raw("CONCAT(hist_id,'-', first_name,' ',last_name) as name"))
        ->orderBy('first_name', 'ASC')
        ->pluck('name','patient_id');
        
        return View('follow_interview.form',compact('patients'));
    }

    
    public function store(FollowInterviewRequest $request)
    {
        $FollowInterview = new FollowInterview;
        $FollowInterview->fill($request->all());
        $FollowInterview->user_id =auth()->user()->id;
        $FollowInterview->save();

         $notification = array(
            'message' => 'Registro almacenado con exito.', 
            'alert_type' => 'success',);
        
            \Session::flash('notification', $notification);
        return Redirect::action('FollowInterviewController@index');
    }

    
    public function show($id)
    {
        $data = FollowInterview::join('patient as p','p.patient_id','follow_interviews.patient_id')
                ->select( DB::raw("CONCAT(p.first_name,' ',p.last_name) as name"),'p.hist_id','p.cedula','p.date_birth','follow_interviews.*',
             DB::raw('TIMESTAMPDIFF(YEAR,p.date_birth,follow_interviews.Fech_entrevSeg) AS edad'))
                ->where('id',$id)
                ->orderBy('id','DESC')
                ->first();
       
        $view = \View::make('follow_interview.format_pdf', compact('data'))->render();        
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        $pdf->setPaper("letter", "portrait");
        return $pdf->stream();     
    }

   
    public function edit($id)
    {
        $patients = Patient::select('patient_id', DB::raw("CONCAT(hist_id,'-', first_name,' ',last_name) as name"))
                    ->orderBy('first_name', 'ASC')->pluck('name','patient_id');
        $data = FollowInterview::findOrFail($id);
        return View('follow_interview.form',compact('patients','data'));
    }

    
    public function update(FollowInterviewRequest $request, $id)
    {
        $FollowInterview = FollowInterview::findOrFail($id);
        $FollowInterview->fill($request->all());
        $FollowInterview->user_updated =auth()->user()->id;
        $FollowInterview->update();
        $notification = array(
            'message' => 'Registro actualizado con exito.', 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);
        return Redirect::action('FollowInterviewController@index');
    }

   
    public function destroy($id)
    {
       $FollowInterview = FollowInterview::findOrFail($id);
       $FollowInterview->user_deleted =auth()->user()->id;
       $FollowInterview->update();
       $FollowInterview = FollowInterview::findOrFail($id)->delete();
       return;
    }

   public function export_xls(Request $request)
    {

       $GLOBALS['variable'] =$request->input('tx');
        
        Excel::create('Entrevista_Seguimiento', function($excel) {
              
        $excel->sheet('Entrevista_Seguimiento', function($sheet) {

        $data = FollowInterview::Search($GLOBALS['variable'])
                    ->join('patient as p','p.patient_id','follow_interviews.patient_id')
                    ->select('p.hist_id as Hist_ID',
                              'follow_interviews.Fech_entrevSeg',
                              'follow_interviews.Fecha_map',
                              'follow_interviews.EntrevistadorES',
                              'p.cedula',
                             DB::raw("CONCAT(p.first_name,' ',p.last_name) as Nom_pac",
                             DB::raw('TIMESTAMPDIFF(YEAR,p.date_birth,follow_interviews.Fech_entrevSeg) AS edad_ef')),
                            'follow_interviews.telf',
                            'p.date_birth as Fecha_nac',
                            'follow_interviews.Nom_inf',
                            'follow_interviews.parentescoe',
                            'follow_interviews.Emg_cardio',
                            'follow_interviews.Cen_sal',
                            'follow_interviews.Mot_emg',
                            'follow_interviews.Fec_emer',
                            'follow_interviews.amerito_hosp',
                            'follow_interviews.Lugar_hosp',
                            'follow_interviews.mot_hosp',
                            'follow_interviews.fecha_hosp',
                            'follow_interviews.infarto',
                            'follow_interviews.sint_1_inf',
                            'follow_interviews.sint_2_inf',
                            'follow_interviews.sint_3_inf',
                            'follow_interviews.sint_4_inf',
                            'follow_interviews.sint_5_inf',
                            'follow_interviews.sint_6_inf',
                            'follow_interviews.Fecha_inf',
                            'follow_interviews.Lugar_hosp_inf',
                            'follow_interviews.Angina',
                            'follow_interviews.Tipo_Ang',
                            'follow_interviews.sint_1_ang',
                            'follow_interviews.sint_2_ang',
                            'follow_interviews.sint_3_ang',
                            'follow_interviews.sint_4_ang',
                            'follow_interviews.sint_5_ang',
                            'follow_interviews.Fecha_ang',
                            'follow_interviews.Lugar_hosp_ang',
                            'follow_interviews.ACV',
                            'follow_interviews.Tipo_ACV',
                            'follow_interviews.sint_1_ACV',
                            'follow_interviews.sint_2_ACV',
                            'follow_interviews.sint_3_ACV',
                            'follow_interviews.sint_4_ACV',
                            'follow_interviews.sint_5_ACV',
                            'follow_interviews.sint_6_ACV',
                            'follow_interviews.sint_7_ACV',
                            'follow_interviews.sint_8_ACV',
                            'follow_interviews.Fecha_ACV',
                            'follow_interviews.Lugar_hosp_ACV',
                            'follow_interviews.Revasc_Coron',
                            'follow_interviews.Tipo_RC',
                            'follow_interviews.Insuf_Card',
                            'follow_interviews.Sint_1_card',
                            'follow_interviews.Sint_2_card',
                            'follow_interviews.Sint_3_card',
                            'follow_interviews.Sint_4_card',
                            'follow_interviews.Sint_5_card',
                            'follow_interviews.Lugar_Hosp_card',
                            'follow_interviews.Fecha_RC',
                            'follow_interviews.Fue_Hops_por',
                            'follow_interviews.fecha_diag',
                            'follow_interviews.Digoxina',
                            'follow_interviews.Lanicor',
                            'follow_interviews.Lanitop',
                            'follow_interviews.Isordil',
                            'follow_interviews.Isomack',
                            'follow_interviews.Nitroderm',
                            'follow_interviews.Nitroglicerina',
                            'follow_interviews.Otros_med',
                            'follow_interviews.Enf_Vasc_Perf',
                            'follow_interviews.Sint_1_vasc',
                            'follow_interviews.Sint_2_vasc',
                            'follow_interviews.Fecha_vasc',
                            'follow_interviews.Ins_Renal',
                            'follow_interviews.Fecha_dial',
                            'follow_interviews.dial',
                            'follow_interviews.Frec_dial',
                            'follow_interviews.hosp_dial',
                            'follow_interviews.Abla_Rinon',
                            'follow_interviews.Hosp_Abla',
                            'follow_interviews.Fecha_Abla',
                            'follow_interviews.Reti_hipert',
                            'follow_interviews.Fecha_Diag_reti',
                            'follow_interviews.Sint_1_reti',
                            'follow_interviews.Sint_2_reti',
                            'follow_interviews.Obs_entre_seg'                     
                      )->orderBy('id','DESC')->get();

                $data = json_decode( json_encode($data), true);
                $sheet->fromArray($data);
            });
        })->export('xls');

       }

    public function table(Request $request)
    {
         $query = FollowInterview::with('patient','user')
                 ->select('follow_interviews.id','follow_interviews.user_id','follow_interviews.patient_id','follow_interviews.Fech_entrevSeg as fecha','follow_interviews.created_at');
      
         return Datatables::of($query)->addColumn('action', function ($dat) {

               return ' <a href="' .route("entrevista_segumiento.show", $dat->id) . '" class="btn btn-sm btn-info" role="button" target="_blank" data-toggle="tooltip" data-placement="right"><i class="fa fa-file-text" title="Ver registro"></i></a>

                  <a href="' .route("entrevista_segumiento.edit", $dat->id) . '" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" data-toggle="tooltip" data-placement="right" title="Editar registro"></i></a> 
                  <button class="btn btn-sm btn-danger btn-delete" data-toggle="tooltip" data-placement="right" title="Eliminar" data-remote="'.route("entrevista_segumiento.destroy", $dat->id) . '"><i class="fa fa-trash-o"></i></button> ';
                  })
                  ->editColumn('created_at', function ($contact){
                        return date('m/d/Y', strtotime($contact->created_at) );
                    })
                  ->filterColumn('created_at', function ($query, $keyword) {
                        $query->whereRaw("DATE_FORMAT(follow_interviews.created_at,'%m/%d/%y') like ?", ["%$keyword%"]);
                    })
                   ->editColumn('fecha', function ($contact){
                        return date('m/d/Y', strtotime($contact->fecha) );
                    })
                   ->filterColumn('fecha', function ($query, $keyword) {
                        $query->whereRaw("DATE_FORMAT(follow_interviews.Fech_entrevSeg,'%m/%d/%y') like ?", ["%$keyword%"]);
                    })
                  ->rawColumns(['action'])
                  ->make(true);
    }

   
}
