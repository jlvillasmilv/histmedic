<?php

namespace App\Http\Controllers\Cardiovascular;

use App\CardiovascularV1;
use App\Patient;
use App\Http\Requests\CardiovascularV1Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Yajra\DataTables\Facades\DataTables;

use Maatwebsite\Excel\Facades\Excel;
use Redirect;

class Version1Controller extends Controller
{
  public function index(Request $request)
    {
        $create  = route('version1.create');
        $table   = route('version1_table');
        $export  = route('version1_xls');
        $title   = "Evaluacion Cardiovascular 1";

        return View('cardiovascular.version1.index',compact('title','export','table','create'));
    }

    public function create()
    {
        $patients = Patient::select('patient_id', DB::raw("CONCAT(hist_id,'-', first_name,' ',last_name) as name"))
        ->orderBy('first_name', 'ASC')
        ->pluck('name','patient_id');
        
        return View('cardiovascular.version1.form',compact('patients'));
    }

    
    public function store(CardiovascularV1Request $request)
    {

        $CardiovascularV1 = new CardiovascularV1;
        $CardiovascularV1->fill($request->all());
        $CardiovascularV1->user_id =auth()->user()->id;
        $CardiovascularV1->save();

         $notification = array(
            'message' => 'Registro almacenado con exito.', 
            'alert_type' => 'success',);
        
            \Session::flash('notification', $notification);
        return Redirect::action('Cardiovascular\Version1Controller@index');
    }

    
    public function show($id)
    {
        $data = CardiovascularV1::join('patient as p','p.patient_id','cardiovascular_v1.patient_id')
                ->select('p.first_name',
                             'p.second_name',
                             'p.last_name',
                             'p.second_last_name',
                             'p.gender',
                              DB::raw('TIMESTAMPDIFF(YEAR,p.date_birth,cardiovascular_v1.EC_FechaEvaluacion) AS edad'),
                             'p.hist_id',
                             'p.cedula',
                             'p.gender as Core_Genero',
                             'p.city_born as EC_Cuidad',
                             'p.date_birth as EC_FechaNacimiento',
                             'p.state_country as EC_EstadooPais',
                             'p.gender as EC_Sexo',
                             'p.ethnicity as EC_Raza',
                             'cardiovascular_v1.*')
                ->where('id',$id)
                ->orderBy('id','DESC')
                ->first();
       
        $pdf = \PDF::loadView('cardiovascular.version1.format_pdf', compact('data'));
        return $pdf->stream();      
    }

   
    public function edit($id)
    {
        $data = CardiovascularV1::findOrFail($id);
        return View('cardiovascular.version1.form',compact('data'));
    }

    
    public function update(CardiovascularV1Request $request, $id)
    {

        $CardiovascularV1 = CardiovascularV1::findOrFail($id);
        $CardiovascularV1->fill($request->all());
        $CardiovascularV1->user_updated =auth()->user()->id;
        $CardiovascularV1->update();
        $notification = array(
            'message' => 'Registro actualizado con exito.', 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);
        return Redirect::action('Cardiovascular\Version1Controller@index');
    }

   
    public function destroy($id)
    {
       $CardiovascularV1 = CardiovascularV1::findOrFail($id);
       $CardiovascularV1->user_deleted =auth()->user()->id;
       $CardiovascularV1->update();
       $CardiovascularV1 = CardiovascularV1::findOrFail($id)->delete();
       return;
    }

   public function export_xls(Request $request)
    {

       $GLOBALS['variable'] =$request->input('tx');
        
        Excel::create('cardiovascular_version1', function($excel) {
              
        $excel->sheet('cardiovascular_version1', function($sheet) {

        $data = CardiovascularV1::Search($GLOBALS['variable'])
                    ->select('p.hist_id as Hist_ID',
                             'p.first_name as EC_1erNombre',
                             'p.second_name as EC_2doNombre',
                             'p.last_name as EC_1erApellido',
                             'p.second_last_name as EC_2doApellido',
                             'p.cedula as EC_Cedula',
                             DB::raw('TIMESTAMPDIFF(YEAR,p.date_birth,cardiovascular_v1.EC_FechaEvaluacion) AS EC_Edad'),
                             'p.city_born as EC_Cuidad',
                             DB::raw('DATE_FORMAT(p.date_birth ,"%m/%d/%Y") AS EC_FechaNacimiento'),
                             'p.state_country as EC_EstadooPais',
                             'p.gender as EC_Sexo',
                             'p.ethnicity as EC_Raza',
                             DB::raw('DATE_FORMAT(cardiovascular_v1.EC_FechaEvaluacion ,"%m/%d/%Y") AS EC_FechaEvaluacion'),
                             'cardiovascular_v1.EC_GradoInstruccion',
                                'cardiovascular_v1.EC_Direccion',
                                'cardiovascular_v1.EC_Telefono',
                                'cardiovascular_v1.EC_LugarEval',
                                'cardiovascular_v1.EC_NombreEvaluador',
                                'cardiovascular_v1.EC_EnfCardiaca',
                                'cardiovascular_v1.EC_Infarto',
                                'cardiovascular_v1.EC_ICC',
                                'cardiovascular_v1.EC_Angina',
                                'cardiovascular_v1.EC_Arritmias',
                                'cardiovascular_v1.EC_CardioCong',
                                'cardiovascular_v1.EC_SoplosCard',
                                'cardiovascular_v1.EC_Chagas',
                                'cardiovascular_v1.EC_Marcapaso',
                                'cardiovascular_v1.EC_Revascula_Coronaria',
                                'cardiovascular_v1.EC_OtrasEnfCard',
                                'cardiovascular_v1.EC_HTA',
                                'cardiovascular_v1.EC_HTAtrt',
                                'cardiovascular_v1.EC_Diabetes',
                                'cardiovascular_v1.EC_Epilpsia',
                                'cardiovascular_v1.EC_Enf_Tiroidea',
                                'cardiovascular_v1.EC_Cancer',
                                'cardiovascular_v1.EC_TCE',
                                'cardiovascular_v1.EC_Enf_renal',
                                'cardiovascular_v1.EC_EnfHepatica',
                                'cardiovascular_v1.EC_SifilisSIDA',
                                'cardiovascular_v1.EC_Enf_SNC',
                                'cardiovascular_v1.EC_Dislipidemias',
                                'cardiovascular_v1.EC_Enf_vasculares',
                                'cardiovascular_v1.EC_Traumatismo_Toracico',
                                'cardiovascular_v1.EC_Tumor',
                                'cardiovascular_v1.EC_Enf_pulmonar',
                                'cardiovascular_v1.EC_PerdidaVisAud',
                                'cardiovascular_v1.EC_Tabaquismo',
                                'cardiovascular_v1.EC_Tiempo_fumando',
                                'cardiovascular_v1.EC_Cajas',
                                'cardiovascular_v1.EC_Colagenopatias',
                                'cardiovascular_v1.EC_OtrasEnfoQx',
                                'cardiovascular_v1.EC_EC_Hospt10a',
                                'cardiovascular_v1.EC_RetrasoMental',
                                'cardiovascular_v1.EC_Alcohol',
                                'cardiovascular_v1.EC_Inf_Padre',
                                'cardiovascular_v1.EC_Ang_Padre',
                                'cardiovascular_v1.EC_HTA_Padre',
                                'cardiovascular_v1.EC_ACV_Padre',
                                'cardiovascular_v1.EC_ICC_Padre',
                                'cardiovascular_v1.EC_MuertSub_Padre',
                                'cardiovascular_v1.EC_DM_Padre',
                                'cardiovascular_v1.EC_Cancer_Padre',
                                'cardiovascular_v1.EC_Inf_Madre',
                                'cardiovascular_v1.EC_Ang_Madre',
                                'cardiovascular_v1.EC_HTA_Madre',
                                'cardiovascular_v1.EC_ACV_Madre',
                                'cardiovascular_v1.EC_ICC_Madre',
                                'cardiovascular_v1.EC_Muert_Madre',
                                'cardiovascular_v1.EC_DM_Madre',
                                'cardiovascular_v1.EC_Cancer_Madre',
                                'cardiovascular_v1.EC_Inf_Hermanos',
                                'cardiovascular_v1.EC_Ang_Hermanos',
                                'cardiovascular_v1.EC_HTA_Hermanos',
                                'cardiovascular_v1.EC_ACV_Hermanos',
                                'cardiovascular_v1.EC_ICC_Hermanos',
                                'cardiovascular_v1.EC_MuertSub_Hermanos',
                                'cardiovascular_v1.EC_DM_Hermanos',
                                'cardiovascular_v1.EC_Cancer_Hermanos',
                                'cardiovascular_v1.EC_Inf_Hijos',
                                'cardiovascular_v1.EC_Ang_Hijos',
                                'cardiovascular_v1.EC_HTA_Hijos',
                                'cardiovascular_v1.EC_ACV_Hijos',
                                'cardiovascular_v1.EC_ICC_Hijos',
                                'cardiovascular_v1.EC_MuertSub_Hijos',
                                'cardiovascular_v1.EC_DM_Hijos',
                                'cardiovascular_v1.EC_Cancer_Hijos',
                                'cardiovascular_v1.EC_Inf_AbuePater',
                                'cardiovascular_v1.EC_Ang_AbuePater',
                                'cardiovascular_v1.EC_HTA_AbuePater',
                                'cardiovascular_v1.EC_ACV_AbuePater',
                                'cardiovascular_v1.EC_ICC_AbuePater',
                                'cardiovascular_v1.EC_MuertSub_AbuePater',
                                'cardiovascular_v1.EC_DM_AbuePater',
                                'cardiovascular_v1.EC_Cancer_AbuePater',
                                'cardiovascular_v1.EC_Inf_AbueMater',
                                'cardiovascular_v1.EC_Ang_AbueMater',
                                'cardiovascular_v1.EC_HTA_AbueMater',
                                'cardiovascular_v1.EC_ACV_AbueMater',
                                'cardiovascular_v1.EC_ICC_AbueMater',
                                'cardiovascular_v1.EC_MuertSub_AbueMater',
                                'cardiovascular_v1.EC_DM_AbueMater',
                                'cardiovascular_v1.EC_Cancer_AbueMater',
                                'cardiovascular_v1.EC_Inf_Tio',
                                'cardiovascular_v1.EC_Ang_Tio',
                                'cardiovascular_v1.EC_HTA_Tio',
                                'cardiovascular_v1.EC_ACV_Tio',
                                'cardiovascular_v1.EC_ICC_Tio',
                                'cardiovascular_v1.EC_MuertSub_Tio',
                                'cardiovascular_v1.EC_DM_Tio',
                                'cardiovascular_v1.EC_Cancer_Tio',
                                'cardiovascular_v1.EC_Ang_Est_pas',
                                'cardiovascular_v1.EC_Ang_Est_prese',
                                'cardiovascular_v1.EC_Ang_estable',
                                'cardiovascular_v1.EC_Ang_Ines_pas',
                                'cardiovascular_v1.EC_Ang_Ines_prese',
                                'cardiovascular_v1.EC_Ang_inestable',
                                'cardiovascular_v1.EC_Palpi_pasado',
                                'cardiovascular_v1.EC_Palpi_presente',
                                'cardiovascular_v1.EC_Palpitaciones',
                                'cardiovascular_v1.EC_DPN_pasado',
                                'cardiovascular_v1.EC_DPN_presente',
                                'cardiovascular_v1.EC_DPN',
                                'cardiovascular_v1.EC_DisEsf_pasado',
                                'cardiovascular_v1.EC_DisEsf_presente',
                                'cardiovascular_v1.EC_Disnea_esfuerzo',
                                'cardiovascular_v1.EC_Ortopn_pas',
                                'cardiovascular_v1.EC_Ortopn_prese',
                                'cardiovascular_v1.EC_Ortopnea',
                                'cardiovascular_v1.EC_Mareos_pasado',
                                'cardiovascular_v1.EC_Mareos_presente',
                                'cardiovascular_v1.EC_Mareos',
                                'cardiovascular_v1.EC_Sincope_pasado',
                                'cardiovascular_v1.EC_Sincope_presente',
                                'cardiovascular_v1.EC_Sincope',
                                'cardiovascular_v1.EC_EMI_pasado',
                                'cardiovascular_v1.EC_EMI_presente',
                                'cardiovascular_v1.EC_Edem_MI',
                                'cardiovascular_v1.EC_AptoCardio',
                                'cardiovascular_v1.EC_SNCyPsi',
                                'cardiovascular_v1.EC_Quimio',
                                'cardiovascular_v1.EC_AptoGastro',
                                'cardiovascular_v1.EC_AccionLocal',
                                'cardiovascular_v1.EC_OtrosMed',
                                'cardiovascular_v1.EC_Peso',
                                'cardiovascular_v1.EC_Talla',
                                'cardiovascular_v1.EC_Ccintura',
                                'cardiovascular_v1.EC_Ccadera',
                                'cardiovascular_v1.EC_PligueCut',
                                'cardiovascular_v1.EC_SC',
                                'cardiovascular_v1.EC_FC',
                                'cardiovascular_v1.EC_FR',
                                'cardiovascular_v1.EC_PAS_sent',
                                'cardiovascular_v1.EC_PAD_sent',
                                'cardiovascular_v1.EC_PAS_pie',
                                'cardiovascular_v1.EC_PAD_pie',
                                'cardiovascular_v1.EC_PP_sentado',
                                'cardiovascular_v1.EC_Disnea',
                                'cardiovascular_v1.EC_ClaudInterm',
                                'cardiovascular_v1.EC_AnorLatiPunt',
                                'cardiovascular_v1.EC_RitmoCnormal',
                                'cardiovascular_v1.EC_soplo_cardiaco',
                                'cardiovascular_v1.EC_RuidoBajaTona',
                                'cardiovascular_v1.EC_SoploCarotideo',
                                'cardiovascular_v1.EC_FrotePericardico',
                                'cardiovascular_v1.EC_AuscPulnormal',
                                'cardiovascular_v1.EC_Hepatomegalia',
                                'cardiovascular_v1.EC_ReflujoHepa',
                                'cardiovascular_v1.EC_EMI',
                                'cardiovascular_v1.EC_Varicosidades',
                                'cardiovascular_v1.EC_PulsoNormal',
                                'cardiovascular_v1.EC_SoploAbdominal',
                                'cardiovascular_v1.EC_Otros',
                                'cardiovascular_v1.EC_Sinusal',
                                'cardiovascular_v1.EC_NoSinusal',
                                'cardiovascular_v1.EC_FA',
                                'cardiovascular_v1.EC_FC2 as EC__FC',
                                'cardiovascular_v1.EC_PR',
                                'cardiovascular_v1.EC_QRS',
                                'cardiovascular_v1.EC_QT',
                                'cardiovascular_v1.EC_AQRS',
                                'cardiovascular_v1.EC_supraventiculares',
                                'cardiovascular_v1.EC_ventriculares',
                                'cardiovascular_v1.EC_1de1 as EC_>de1',
                                'cardiovascular_v1.EC_2de1 as EC_<de1',
                                'cardiovascular_v1.EC_monomorficas',
                                'cardiovascular_v1.EC_polimorficas',
                                'cardiovascular_v1.EC_bigeminadas',
                                'cardiovascular_v1.EC_trigeminada',
                                'cardiovascular_v1.EC_dupletas',
                                'cardiovascular_v1.EC_derechaincompleto',
                                'cardiovascular_v1.EC_derechacompleto',
                                'cardiovascular_v1.EC_izquierdaincompleto',
                                'cardiovascular_v1.EC_izquierdacompleto',
                                'cardiovascular_v1.EC_hemibloqueoAnt',
                                'cardiovascular_v1.EC_hemibloqueoPost',
                                'cardiovascular_v1.EC_Primer',
                                'cardiovascular_v1.EC_mobitz_I',
                                'cardiovascular_v1.EC_mobitz_II',
                                'cardiovascular_v1.EC_completo',
                                'cardiovascular_v1.EC_bradicardia',
                                'cardiovascular_v1.EC_flutterAuricular',
                                'cardiovascular_v1.EC_taquicardiaSinus',
                                'cardiovascular_v1.EC_TPSV as EC_T.P.S.V',
                                'cardiovascular_v1.EC_WPW as EC_W.P.W.',
                                'cardiovascular_v1.EC_TauricularMultifocal',
                                'cardiovascular_v1.EC_AuricularIzq',
                                'cardiovascular_v1.EC_AuricularDer',
                                'cardiovascular_v1.EC_VentriculoIzq',
                                'cardiovascular_v1.EC_VentriculoDer',
                                'cardiovascular_v1.EC_IsqSubepi_Inf',
                                'cardiovascular_v1.EC_IsqSubepi_Septal',
                                'cardiovascular_v1.EC_IsqSubepi_Antsep',
                                'cardiovascular_v1.EC_IsqSubepi_Ant',
                                'cardiovascular_v1.EC_IsqSubepi_AntExt',
                                'cardiovascular_v1.EC_IsqSubend_Inf',
                                'cardiovascular_v1.EC_IsqSubend_Septal',
                                'cardiovascular_v1.EC_IsqSubend_Antsep',
                                'cardiovascular_v1.EC_IsqSubend_Ant',
                                'cardiovascular_v1.EC_IsqSubend_AntExt',
                                'cardiovascular_v1.EC_LesSubepi_Inf',
                                'cardiovascular_v1.EC_LesSubepi_Septal',
                                'cardiovascular_v1.EC_LesSubepi_Antsep',
                                'cardiovascular_v1.EC_LesSubepi_Ant',
                                'cardiovascular_v1.EC_LesSubepi_AntExt',
                                'cardiovascular_v1.EC_LesSubend_Inf',
                                'cardiovascular_v1.EC_LesSubend_Septal',
                                'cardiovascular_v1.EC_LesSubend_Antsep',
                                'cardiovascular_v1.EC_LesSubend_Ant',
                                'cardiovascular_v1.EC_LesSubend_AntExt',
                                'cardiovascular_v1.EC_NecroInf',
                                'cardiovascular_v1.EC_NecroSeptal',
                                'cardiovascular_v1.EC_NecroAntSept',
                                'cardiovascular_v1.EC_NecroAnt',
                                'cardiovascular_v1.EC_NecroExt',
                                'cardiovascular_v1.EC_NecroPost'                                                                      
                      )->orderBy('id','DESC')->get();

                $data = json_decode( json_encode($data), true);
                $sheet->fromArray($data);
            });
        })->export('xls');

       }

    public function table(Request $request)
    {
         $query = CardiovascularV1::with('patient','user')
                 ->select('cardiovascular_v1.id','cardiovascular_v1.user_id','cardiovascular_v1.patient_id','cardiovascular_v1.EC_FechaEvaluacion as fecha','cardiovascular_v1.created_at');
      
         return Datatables::of($query)->addColumn('action', function ($dat) {

               return ' <a href="' .route("version1.show", $dat->id) . '" class="btn btn-sm btn-info" role="button" target="_blank" data-toggle="tooltip" data-placement="right"><i class="fa fa-file-text" title="Ver registro"></i></a>

                  <a href="' .route("version1.edit", $dat->id) . '" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" data-toggle="tooltip" data-placement="right" title="Editar registro"></i></a> 
                  <button class="btn btn-sm btn-danger btn-delete" data-toggle="tooltip" data-placement="right" title="Eliminar" data-remote="'.route("version1.destroy", $dat->id) . '"><i class="fa fa-trash-o"></i></button> ';
                  })
                  ->editColumn('created_at', function ($contact){
                        return date('m/d/Y', strtotime($contact->created_at) );
                    })
                  ->filterColumn('created_at', function ($query, $keyword) {
                        $query->whereRaw("DATE_FORMAT(cardiovascular_v1.created_at,'%m/%d/%y') like ?", ["%$keyword%"]);
                    })
                   ->editColumn('fecha', function ($contact){
                        return date('m/d/Y', strtotime($contact->fecha) );
                    })
                   ->filterColumn('fecha', function ($query, $keyword) {
                        $query->whereRaw("DATE_FORMAT(cardiovascular_v1.EC_FechaEvaluacion,'%m/%d/%y') like ?", ["%$keyword%"]);
                    })
                  ->rawColumns(['action'])
                  ->make(true);
    }

   
}