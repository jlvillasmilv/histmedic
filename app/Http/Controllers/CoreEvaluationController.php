<?php

namespace App\Http\Controllers;

use App\CoreEvaluation;
use App\Patient;
use App\Http\Requests\CoreEvaluationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Yajra\DataTables\Facades\DataTables;

use Maatwebsite\Excel\Facades\Excel;
use Redirect;

class CoreEvaluationController extends Controller
{
   public function index(Request $request)
   {
        $create  = route('evaluacion_core.create');
        $table   = route('core_table');
        $export  = route('core_xls');
        $title   = "Evaluacion Neuropsicológica Core";

        return View('core_evaluation.index',compact('title','export','table','create'));
    }

    
    public function create()
    {

        return View('core_evaluation.form');
    }

    
    public function store(CoreEvaluationRequest $request)
    {

        $CoreEvaluation = new CoreEvaluation;
        $CoreEvaluation->fill($request->all());
        $CoreEvaluation->user_id =auth()->user()->id;
        $CoreEvaluation->save();

         $notification = array(
            'message' => 'Registro almacenado con exito.', 
            'alert_type' => 'success',);
        
            \Session::flash('notification', $notification);
        return Redirect::action('CoreEvaluationController@index');
    }

    
    public function show($id)
    {
        $data = CoreEvaluation::join('patient as p','p.patient_id','core_evaluation.patient_id')
                ->select('p.first_name',
                             'p.second_name',
                             'p.last_name',
                             'p.second_last_name',
                             'p.gender',
                              DB::raw('TIMESTAMPDIFF(YEAR,p.date_birth,core_evaluation.DatCore) AS edad'),
                             'p.hist_id',
                             'p.cedula',
                             'core_evaluation.*')
                ->where('id',$id)
                ->orderBy('id','DESC')
                ->first();
       
        $view = \View::make('core_evaluation.format_pdf', compact('data'))->render();        
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        $pdf->setPaper("letter", "portrait");
        return $pdf->stream();     
    }

   
    public function edit($id)
    {
        $data = CoreEvaluation::findOrFail($id);
        return View('core_evaluation.form',compact('data'));
    }

    
    public function update(CoreEvaluationRequest $request, $id)
    {
        $CoreEvaluation = CoreEvaluation::findOrFail($id);
        $CoreEvaluation->fill($request->all());
        $CoreEvaluation->user_updated =auth()->user()->id;
        $CoreEvaluation->update();
        $notification = array(
            'message' => 'Registro actualizado con exito.', 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);
        return Redirect::action('CoreEvaluationController@index');
    }

   
    public function destroy($id)
    {
       $CoreEvaluation = CoreEvaluation::findOrFail($id);
       $CoreEvaluation->user_deleted =auth()->user()->id;
       $CoreEvaluation->update();
       $CoreEvaluation = CoreEvaluation::findOrFail($id)->delete();
       return;
    }

   public function export_xls(Request $request)
    {

       $GLOBALS['variable'] =$request->input('tx');
        
        Excel::create('CORE', function($excel) {
              
        $excel->sheet('CORE', function($sheet) {

        $data = CoreEvaluation::Search($GLOBALS['variable'])
                    ->select(
                             'p.first_name as Core_1erNombres',
                             'p.second_name as Core_2ndNombres',
                             'p.last_name as Core_1erApellidos',
                             'p.second_last_name as Core_2ndApellidos',
                             'p.cedula as Core_Cedula',
                             'p.hist_id as Hist_ID',
                             'core_evaluation.Core_Edo_Civil',
                             'core_evaluation.Core_NdeHijos',
                             'p.gender as Core_Genero',
                              DB::raw('TIMESTAMPDIFF(YEAR,p.date_birth,core_evaluation.DatCore) AS AgeCore'),
                             'core_evaluation.edu_core',
                             'core_evaluation.lentes',
                        'core_evaluation.disponib',
                        'core_evaluation.Core_Vision',
                        'core_evaluation.sordo',
                        'core_evaluation.ayuda',
                        'core_evaluation.laterali',
                        'core_evaluation.Core_Hemiparesia',
                         DB::raw('DATE_FORMAT(core_evaluation.DatCore ,"%m/%d/%Y") AS DatCore'), 
                        'core_evaluation.Core_NdeEvaluacion',
                        'core_evaluation.Core_Examinador',
                        'core_evaluation.ori_tiemp2',
                        'core_evaluation.ori_tiemp4',
                        'core_evaluation.ori_tiemp5',
                        'core_evaluation.ori_tiemp1',
                        'core_evaluation.ori_tiemp3',
                        'core_evaluation.ori_tiemptot',
                        'core_evaluation.ori_esp1',
                        'core_evaluation.ori_esp7',
                        'core_evaluation.ori_esp4',
                        'core_evaluation.ori_esp3',
                        'core_evaluation.ori_esp5',
                        'core_evaluation.ori_esp2',
                        'core_evaluation.ori_esptot',
                        'core_evaluation.orientac',
                        'core_evaluation.Bpr1',
                        'core_evaluation.Bpr2',
                        'core_evaluation.Bpr3',
                        'core_evaluation.Bpr4',
                        'core_evaluation.Bpr5',
                        'core_evaluation.Bpr6',
                        'core_evaluation.Bpr7',
                        'core_evaluation.Bpr8',
                        'core_evaluation.Bpr9',
                        'core_evaluation.Bpr10',
                        'core_evaluation.Bpp1',
                        'core_evaluation.Bpp2',
                        'core_evaluation.Bpp3',
                        'core_evaluation.Bpp4',
                        'core_evaluation.Bpp5',
                        'core_evaluation.Bpp6',
                        'core_evaluation.Bpp7',
                        'core_evaluation.Bpp8',
                        'core_evaluation.Bpp9',
                        'core_evaluation.Bpp10',
                        'core_evaluation.Bentonpar',
                        'core_evaluation.Bdr1',
                        'core_evaluation.Bdr2',
                        'core_evaluation.Bdr3',
                        'core_evaluation.Bdr4',
                        'core_evaluation.Bdr5',
                        'core_evaluation.Bdr6',
                        'core_evaluation.Bdr7',
                        'core_evaluation.Bdr8',
                        'core_evaluation.Bdr9',
                        'core_evaluation.Bdr10',
                        'core_evaluation.Bdp1',
                        'core_evaluation.Bdp2',
                        'core_evaluation.Bdp3',
                        'core_evaluation.Bdp4',
                        'core_evaluation.Bdp5',
                        'core_evaluation.Bdp6',
                        'core_evaluation.Bdp7',
                        'core_evaluation.Bdp8',
                        'core_evaluation.Bdp9',
                        'core_evaluation.Bdp10',
                        'core_evaluation.Bentondif',
                        'core_evaluation.Core_MATTIS_Igual1',
                        'core_evaluation.Core_MATTIS_Igual2',
                        'core_evaluation.Core_MATTIS_Igual3',
                        'core_evaluation.Core_MATTIS_Igual4',
                        'core_evaluation.Core_MATTIS_Igual5',
                        'core_evaluation.Core_MATTIS_Igual6',
                        'core_evaluation.Core_MATTIS_Igual7',
                        'core_evaluation.Core_MATTIS_Igual8',
                        'core_evaluation.Core_MATTIS_Igual_Total',
                        'core_evaluation.Core_MATTIS_DesIgual1',
                        'core_evaluation.Core_MATTIS_DesIgual2',
                        'core_evaluation.Core_MATTIS_DesIgual3',
                        'core_evaluation.Core_MATTIS_DesIgual4',
                        'core_evaluation.Core_MATTIS_DesIgual5',
                        'core_evaluation.Core_MATTIS_DesIgual6',
                        'core_evaluation.Core_MATTIS_DesIgual7',
                        'core_evaluation.Core_MATTIS_DesIgual8',
                        'core_evaluation.Core_MATTIS_DesIgual_Total',
                        'core_evaluation.Core_MATTIS_Totalscore',
                        'core_evaluation.Core_PRS1_Memoria',
                        'core_evaluation.Core_PRS2_Memoria',
                        'core_evaluation.Core_PRS3_Memoria',
                        'core_evaluation.Core_PRS4_Memoria',
                        'core_evaluation.Core_PRS5_Memoria',
                        'core_evaluation.Core_PRS6_Memoria',
                        'core_evaluation.Core_PRS7_Memoria',
                        'core_evaluation.Core_PRS8_Memoria',
                        'core_evaluation.Core_PRS9_Memoria',
                        'core_evaluation.Core_PRS10_Memoria',
                        'core_evaluation.Core_PRS11_Memoria',
                        'core_evaluation.Core_PRS12_Memoria',
                        'core_evaluation.Core_MemoriaScore',
                        'core_evaluation.Core_PRS1_Reco',
                        'core_evaluation.Core_PRS2_Reco',
                        'core_evaluation.Core_PRS3_Reco',
                        'core_evaluation.Core_PRS4_Reco',
                        'core_evaluation.Core_PRS5_Reco',
                        'core_evaluation.Core_PRS6_Reco',
                        'core_evaluation.Core_PRS7_Reco',
                        'core_evaluation.Core_PRS8_Reco',
                        'core_evaluation.Core_PRS9_Reco',
                        'core_evaluation.Core_PRS10_Reco',
                        'core_evaluation.Core_PRS11_Reco',
                        'core_evaluation.Core_PRS12_Reco',
                        'core_evaluation.Core_Reco',
                        'core_evaluation.Core_TotalPRS',
                        'core_evaluation.Core_Semenjanzas_Preg1',
                        'core_evaluation.Core_Semenjanzas_Preg2',
                        'core_evaluation.Core_Semenjanzas_Preg3',
                        'core_evaluation.Core_Semenjanzas_Preg4',
                        'core_evaluation.Core_Semenjanzas_Preg5',
                        'core_evaluation.Core_Semenjanzas_Preg6',
                        'core_evaluation.Core_Semenjanzas_Preg7',
                        'core_evaluation.Core_Semenjanzas_Preg8',
                        'core_evaluation.Core_Semenjanzas_Preg9',
                        'core_evaluation.Core_Semenjanzas_Preg10',
                        'core_evaluation.Core_Semenjanzas_Preg11',
                        'core_evaluation.Core_Semenjanzas_Preg12',
                        'core_evaluation.Core_Semenjanzas_Preg13',
                        'core_evaluation.Core_Semenjanzas_Preg14',
                        'core_evaluation.Core_Semenjanzas_Totalscore',
                        'core_evaluation.boston_af1a',
                        'core_evaluation.boston_af2a',
                        'core_evaluation.boston_af3a',
                        'core_evaluation.boston_af4a',
                        'core_evaluation.boston_af1b',
                        'core_evaluation.boston_af2b',
                        'core_evaluation.boston_af3b',
                        'core_evaluation.boston_af4b',
                        'core_evaluation.boston_af5a',
                        'core_evaluation.boston_af5b',
                        'core_evaluation.boston_af6a',
                        'core_evaluation.boston_af6b',
                        'core_evaluation.boston_af',
                        'core_evaluation.Core_Repeticion_Frases_Sabes',
                        'core_evaluation.Core_Repeticion_Frases_Tierra',
                        'core_evaluation.Core_Repeticion_Frases_Trabajo',
                        'core_evaluation.Core_Repeticion_Frases_decirte',
                        'core_evaluation.Core_Repeticion_Frases_hazlo',
                        'core_evaluation.Core_Repeticion_Frases_comedor',
                        'core_evaluation.Core_Repeticion_Frases_Radio',
                        'core_evaluation.Core_Repeticion_Frases_Timbre',
                        'core_evaluation.Core_Repeticion_Frases_Total',
                        'core_evaluation.rtiempo',
                        'core_evaluation.racierto',
                        'core_evaluation.rerror',
                        'core_evaluation.romis',
                        'core_evaluation.tmxtpo',
                        'core_evaluation.tmxacier',
                        'core_evaluation.tmxerror',
                        'core_evaluation.tmxomis',
                        'core_evaluation.Core_PrCanc_Rombo_ULorSI',
                        'core_evaluation.Core_PrCanc_Rombo_URorSD',
                        'core_evaluation.Core_PrCanc_Rombo_LLorII',
                        'core_evaluation.Core_PrCanc_Rombo_LRorID',
                        'core_evaluation.Core_PrCanc_TMX_ULorSI',
                        'core_evaluation.Core_PrCanc_TMX_URorSD',
                        'core_evaluation.Core_PrCanc_TMX_LLorII',
                        'core_evaluation.Core_PrCanc_TMX_LRorID',
                        'core_evaluation.rosen1',
                        'core_evaluation.rosen2',
                        'core_evaluation.rosen3',
                        'core_evaluation.rosen4',
                        'core_evaluation.rosen5',
                        'core_evaluation.rosenptj',
                        'core_evaluation.bostonsa',
                        'core_evaluation.bostonec',
                        'core_evaluation.bostonef',
                        'core_evaluation.acptotal',
                        'core_evaluation.Core_Leng_asoconpal_PC',
                        'core_evaluation.Core_Leng_asoconpal_P',
                        'core_evaluation.Core_Leng_asoconpal_Puntaje',
                        'core_evaluation.Core_Leng_asoconpal_PuntajeLimit',
                        'core_evaluation.Core_Leng_Cagoria_Puntaje',
                        'core_evaluation.Core_Leng_Cagoria_Limit',
                        'core_evaluation.Core_Leng_Animales_Puntaje',
                        'core_evaluation.Core_Leng_Repeticion_Puntaje',
                        'core_evaluation.Core_Leng_Repeticion_Limit',
                        'core_evaluation.Core_Leng_Compresion_Puntaje',
                        'core_evaluation.Core_Leng_Compresion_Limit',
                        'core_evaluation.Core_Const_Rosen_Repasados',
                        'core_evaluation.Core_Const_Rosen_Puntaje',
                        'core_evaluation.Core_Const_Rosen_Puntaje_Limit',
                        'core_evaluation.Core_Const_Benton_Puntaje',
                        'core_evaluation.Core_Const_Benton_Puntaje_Limit',
                        'core_evaluation.rtiempo2',
                        'core_evaluation.racierto2',
                        'core_evaluation.Core_Atenc_Cancel_Rombo_Errores',
                        'core_evaluation.Core_Atenc_Cancel_Rombo_Omisiones',
                        'core_evaluation.tmxtpo2',
                        'core_evaluation.tmxacier2',
                        'core_evaluation.Core_Atenc_Cancel_TMX_Errores',
                        'core_evaluation.Core_Atenc_Cancel_TMX_Omisiones',
                        'core_evaluation.Core_Atenc_Cancel_Rombo_ULorSI',
                        'core_evaluation.Core_Atenc_Cancel_Rombo_URorSD',
                        'core_evaluation.Core_Atenc_Cancel_Rombo_LLorII',
                        'core_evaluation.Core_Atenc_Cancel_Rombo_LRorID',
                        'core_evaluation.Core_Atenc_Cancel_TMX_ULorSI',
                        'core_evaluation.Core_Atenc_Cancel_TMX_URorSD',
                        'core_evaluation.Core_Atenc_Cancel_TMX_LLorII',
                        'core_evaluation.Core_Atenc_Cancel_TMX_LRorID',
                        'core_evaluation.memtot',
                        'core_evaluation.memtot_limit',
                        'core_evaluation.mlp',
                        'core_evaluation.mlp_limit',
                        'core_evaluation.mediata',
                        'core_evaluation.mediate_limit',
                        'core_evaluation.reconoc',
                        'core_evaluation.reconoc_limit',
                        'core_evaluation.alptot_PB',
                        'core_evaluation.alptot_PC',
                        'core_evaluation.alp',
                        'core_evaluation.crlp_PB',
                        'core_evaluation.crlp_PC',
                        'core_evaluation.crlp',
                        'core_evaluation.Core_Total_Intrusiones',
                        'core_evaluation.Core_Intrusiones_Diferentes',
                        'core_evaluation.Core_Palab_recorda_6intentos',
                        'core_evaluation.bentonm_Puntaje',
                        'core_evaluation.bentonm_Limit',
                        'core_evaluation.orientac_Puntaje',
                        'core_evaluation.orientac_Limit',
                        'core_evaluation.Core_Razo_abs_sem_PB',
                        'core_evaluation.Core_Razo_abs_sem_PC',
                        'core_evaluation.Core_Razo_abs_sem_Edad',
                        'core_evaluation.Core_Razo_abs_sem_puntaje',
                        'core_evaluation.Core_Razo_abs_sem_Limit',
                        'core_evaluation.igual',
                        'core_evaluation.desigual',
                        'core_evaluation.igualtot',
                        'core_evaluation.igualtot_Limit'                                                           
                      )->orderBy('id','DESC')->get();

                $data = json_decode( json_encode($data), true);
                $sheet->fromArray($data);
            });
        })->export('xls');

       }

    public function table(Request $request)
    {
         $query = CoreEvaluation::with('patient','user')
                 ->select('core_evaluation.id','core_evaluation.user_id','core_evaluation.patient_id','core_evaluation.DatCore as fecha','core_evaluation.created_at');
      
         return Datatables::of($query)->addColumn('action', function ($dat) {

               return ' <a href="' .route("evaluacion_core.show", $dat->id) . '" class="btn btn-sm btn-info" role="button" target="_blank" data-toggle="tooltip" data-placement="right"><i class="fa fa-file-text" title="Ver registro"></i></a>

                  <a href="' .route("evaluacion_core.edit", $dat->id) . '" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" data-toggle="tooltip" data-placement="right" title="Editar registro"></i></a> 
                  <button class="btn btn-sm btn-danger btn-delete" data-toggle="tooltip" data-placement="right" title="Eliminar" data-remote="'.route("evaluacion_core.destroy", $dat->id) . '"><i class="fa fa-trash-o"></i></button> ';
                  })
                  ->editColumn('created_at', function ($contact){
                        return date('m/d/Y', strtotime($contact->created_at) );
                    })
                  ->filterColumn('created_at', function ($query, $keyword) {
                        $query->whereRaw("DATE_FORMAT(core_evaluation.created_at,'%m/%d/%y') like ?", ["%$keyword%"]);
                    })
                   ->editColumn('fecha', function ($contact){
                        return date('m/d/Y', strtotime($contact->fecha) );
                    })
                   ->filterColumn('fecha', function ($query, $keyword) {
                        $query->whereRaw("DATE_FORMAT(core_evaluation.DatCore,'%m/%d/%y') like ?", ["%$keyword%"]);
                    })
                  ->rawColumns(['action'])
                  ->make(true);
    }

   
}
