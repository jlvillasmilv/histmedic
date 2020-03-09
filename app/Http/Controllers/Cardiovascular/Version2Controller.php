<?php

namespace App\Http\Controllers\Cardiovascular;

use App\CardiovascularV2;
use App\Patient;
use App\Http\Requests\CardiovascularV2Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Yajra\DataTables\Facades\DataTables;

use Maatwebsite\Excel\Facades\Excel;
use Redirect;

class Version2Controller extends Controller
{
    public function index()
    {
        $create  = route('version2.create');
        $table   = route('version2_table');
        $export  = route('version2_xls');
        $title   = "Evaluacion Cardiovascular 2";

        return View('cardiovascular.version2.index',compact('title','export','table','create'));
    }

    
    public function create()
    {
        
        return View('cardiovascular.version2.form');
    }

    
    public function store(CardiovascularV2Request $request)
    {

        $CardiovascularV2 = new CardiovascularV2;
        $CardiovascularV2->fill($request->all());
        $CardiovascularV2->user_id =auth()->user()->id;
        $CardiovascularV2->save();

         $notification = array(
            'message' => 'Registro almacenado con exito.', 
            'alert_type' => 'success',);
        
            \Session::flash('notification', $notification);
        return Redirect::action('Cardiovascular\Version2Controller@index');
    }

    
    public function show($id)
    {
        $data = CardiovascularV2::join('patient as p','p.patient_id','cardiovascular_v2.patient_id')
                ->select('p.first_name',
                             'p.second_name',
                             'p.last_name',
                             'p.second_last_name',
                             'p.gender',
                              DB::raw('TIMESTAMPDIFF(YEAR,p.date_birth,cardiovascular_v2.EC_FechaEvaluacion) AS edad'),
                             'p.hist_id',
                             'p.cedula',
                             'p.gender as Core_Genero',
                             'p.city_born as EC_Cuidad',
                             'p.date_birth as EC_FechaNacimiento',
                             'p.state_country as EC_EstadooPais',
                             'p.gender as EC_Sexo',
                             'p.ethnicity as EC_Raza',
                             'cardiovascular_v2.*')
                ->where('id',$id)
                ->orderBy('id','DESC')
                ->first();
       
        $pdf = \PDF::loadView('cardiovascular.version2.format_pdf', compact('data'));
        return $pdf->stream();      
    }

   
    public function edit($id)
    {
        $data = CardiovascularV2::findOrFail($id);
        return View('cardiovascular.version2.form',compact('data'));
    }

    
    public function update(CardiovascularV2Request $request, $id)
    {

        $CardiovascularV2 = CardiovascularV2::findOrFail($id);
        $CardiovascularV2->fill($request->all());
        $CardiovascularV2->user_updated =auth()->user()->id;
        $CardiovascularV2->update();
        $notification = array(
            'message' => 'Registro actualizado con exito.', 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);
        return Redirect::action('Cardiovascular\Version2Controller@index');
    }

   
    public function destroy($id)
    {
       $CardiovascularV2 = CardiovascularV2::findOrFail($id);
       $CardiovascularV2->user_deleted =auth()->user()->id;
       $CardiovascularV2->update();
       $CardiovascularV2 = CardiovascularV2::findOrFail($id)->delete();
       return;
    }

   public function export_xls(Request $request)
    {

       $GLOBALS['variable'] =$request->input('tx');
        
        Excel::create('cardiovascular_v2', function($excel) {
              
        $excel->sheet('cardiovascular_v2', function($sheet) {

        $data = CardiovascularV2::Search($GLOBALS['variable'])
                    ->select('p.hist_id as Hist_ID',
                             'p.first_name as EC_1erNombre',
                             'p.second_name as EC_2doNombre',
                             'p.last_name as EC_1erApellido',
                             'p.second_last_name as EC_2doApellido',
                             'p.cedula as EC_Cedula',
                             DB::raw('TIMESTAMPDIFF(YEAR,p.date_birth,cardiovascular_v2.EC_FechaEvaluacion) AS EC_Edad'),
                             'p.city_born as EC_Cuidad',
                              DB::raw('DATE_FORMAT(p.date_birth ,"%m/%d/%Y") AS EC_FechaNacimiento'),
                             'p.gender as EC_Sexo',
                             'cardiovascular_v2.EC_GradoInstruccion',
                             DB::raw('DATE_FORMAT(cardiovascular_v2.EC_FechaEvaluacion ,"%m/%d/%Y") AS EC_FechaEvaluacion'),
                            'cardiovascular_v2.EC_LugarEval',
                            'cardiovascular_v2.EC_NombreEvaluador',
                            'cardiovascular_v2.EC_EnfCardiaca',
                            'cardiovascular_v2.EC_Infarto',
                            'cardiovascular_v2.EC_ICC',
                            'cardiovascular_v2.EC_Angina',
                            'cardiovascular_v2.EC_Arritmias',
                            'cardiovascular_v2.EC_CardioCong',
                            'cardiovascular_v2.EC_SoplosCard',
                            'cardiovascular_v2.EC_Chagas',
                            'cardiovascular_v2.EC_HTA',
                            'cardiovascular_v2.EC_HTAañoDx',
                            'cardiovascular_v2.EC_HTAtrt',
                            'cardiovascular_v2.EC_Tabaquismo',
                            'cardiovascular_v2.EC_Tiempo_fumando',
                            'cardiovascular_v2.EC_Cigarrillos_dia',
                            'cardiovascular_v2.EC_Marcapaso',
                            'cardiovascular_v2.EC_Dislipidemias',
                            'cardiovascular_v2.EC_Enf_vasculares',
                            'cardiovascular_v2.EC_Traumatismo_Toracico',
                            'cardiovascular_v2.EC_Enf_pulmonar',
                            'cardiovascular_v2.EC_Enf_Tiroidea',
                            'cardiovascular_v2.EC_Enf_renal',
                            'cardiovascular_v2.EC_Revascula_Coronaria',
                            'cardiovascular_v2.EC_Cirugia_valvulas',
                            'cardiovascular_v2.EC_Colagenopatias',
                            'cardiovascular_v2.EC_Enf_SNC',
                            'cardiovascular_v2.EC_Diabetes',
                            'cardiovascular_v2.EC_Fecha_Dxde_DM',
                            'cardiovascular_v2.EC_Insulina',
                            'cardiovascular_v2.EC_DM_controlada',
                            'cardiovascular_v2.EC_EC_Hospt10a',
                            'cardiovascular_v2.EC_Ang_estable',
                            'cardiovascular_v2.EC_Ang_inestable',
                            'cardiovascular_v2.EC_Palpitaciones',
                            'cardiovascular_v2.EC_DPN',
                            'cardiovascular_v2.EC_Disnea_esfuerzo',
                            'cardiovascular_v2.EC_Ortopnea',
                            'cardiovascular_v2.EC_Claudicacion',
                            'cardiovascular_v2.EC_Mareos',
                            'cardiovascular_v2.EC_Sincope',
                            'cardiovascular_v2.EC_Edem_MI',
                            'cardiovascular_v2.EC_Betabloqueadores',
                            'cardiovascular_v2.EC_Calcioantagonistas',
                            'cardiovascular_v2.EC_IECA',
                            'cardiovascular_v2.EC_Diureticos',
                            'cardiovascular_v2.EC_Trt_HTA_SNC',
                            'cardiovascular_v2.EC_Nitratos',
                            'cardiovascular_v2.EC_Digital',
                            'cardiovascular_v2.EC_Amiodarona',
                            'cardiovascular_v2.EC_Quinidina',
                            'cardiovascular_v2.EC_Otros_antiarritmicos',
                            'cardiovascular_v2.EC_Inf_Padre',
                            'cardiovascular_v2.EC_Ang_Padre',
                            'cardiovascular_v2.EC_HTA_Padre',
                            'cardiovascular_v2.EC_ACV_Padre',
                            'cardiovascular_v2.EC_ICC_Padre',
                            'cardiovascular_v2.EC_MuertSub_Padre',
                            'cardiovascular_v2.EC_DM_Padre',
                            'cardiovascular_v2.EC_Cancer_Padre',
                            'cardiovascular_v2.EC_Inf_Madre',
                            'cardiovascular_v2.EC_Ang_Madre',
                            'cardiovascular_v2.EC_HTA_Madre',
                            'cardiovascular_v2.EC_ACV_Madre',
                            'cardiovascular_v2.EC_ICC_Madre',
                            'cardiovascular_v2.EC_Muert_Madre',
                            'cardiovascular_v2.EC_DM_Madre',
                            'cardiovascular_v2.EC_Cancer_Madre',
                            'cardiovascular_v2.EC_Inf_Hermanos',
                            'cardiovascular_v2.EC_Ang_Hermanos',
                            'cardiovascular_v2.EC_HTA_Hermanos',
                            'cardiovascular_v2.EC_ACV_Hermanos',
                            'cardiovascular_v2.EC_ICC_Hermanos',
                            'cardiovascular_v2.EC_MuertSub_Hermanos',
                            'cardiovascular_v2.EC_DM_Hermanos',
                            'cardiovascular_v2.EC_Cancer_Hermanos',
                            'cardiovascular_v2.EC_Inf_Hijos',
                            'cardiovascular_v2.EC_Ang_Hijos',
                            'cardiovascular_v2.EC_HTA_Hijos',
                            'cardiovascular_v2.EC_ACV_Hijos',
                            'cardiovascular_v2.EC_ICC_Hijos',
                            'cardiovascular_v2.EC_MuertSub_Hijos',
                            'cardiovascular_v2.EC_DM_Hijos',
                            'cardiovascular_v2.EC_Cancer_Hijos',
                            'cardiovascular_v2.EC_Infarto_cardiaco_total',
                            'cardiovascular_v2.EC_Angor_total',
                            'cardiovascular_v2.EC_HTA_TOTAL',
                            'cardiovascular_v2.EC_Acv_total',
                            'cardiovascular_v2.IEC_cc_total',
                            'cardiovascular_v2.EC_Muerte_súbita_total',
                            'cardiovascular_v2.EC_Diabetes_total',
                            'cardiovascular_v2.EC_Cancer_total',
                            'cardiovascular_v2.EC_FC',
                            'cardiovascular_v2.EC_FR',
                            'cardiovascular_v2.EC_PAS_sent',
                            'cardiovascular_v2.EC_PAD_sent',
                            'cardiovascular_v2.EC_PAS_pie',
                            'cardiovascular_v2.EC_PAD_pie',
                            'cardiovascular_v2.EC_PP_sentado',
                            'cardiovascular_v2.EC_Disnea',
                            'cardiovascular_v2.EC_ClaudInterm',
                            'cardiovascular_v2.EC_AnorLatiPunt',
                            'cardiovascular_v2.EC_RitmoCnormal',
                            'cardiovascular_v2.EC_soplo_cardiaco',
                            'cardiovascular_v2.EC_RuidoBajaTona',
                            'cardiovascular_v2.EC_SoploCarotideo',
                            'cardiovascular_v2.EC_FrotePericardico',
                            'cardiovascular_v2.EC_AuscPulnormal',
                            'cardiovascular_v2.EC_Hepatomegalia',
                            'cardiovascular_v2.EC_ReflujoHepa',
                            'cardiovascular_v2.EC_EMI',
                            'cardiovascular_v2.EC_Varicosidades',
                            'cardiovascular_v2.EC_PulsoNormal',
                            'cardiovascular_v2.EC_SoploAbdominal',
                            'cardiovascular_v2.EC_Otros',
                            'cardiovascular_v2.EC__FC',
                            'cardiovascular_v2.EC_PR',
                            'cardiovascular_v2.EC_QRS',
                            'cardiovascular_v2.EC_QT',
                            'cardiovascular_v2.EC_AQRS',
                            'cardiovascular_v2.EC_supraventiculares',
                            'cardiovascular_v2.EC_ventriculares',
                            'cardiovascular_v2.EC_1de1',
                            'cardiovascular_v2.EC_2de1',
                            'cardiovascular_v2.EC_monomorficas',
                            'cardiovascular_v2.EC_polimorficas',
                            'cardiovascular_v2.EC_bigeminadas',
                            'cardiovascular_v2.EC_trigeminada',
                            'cardiovascular_v2.EC_dupletas',
                            'cardiovascular_v2.EC_derechaincompleto',
                            'cardiovascular_v2.EC_derechacompleto',
                            'cardiovascular_v2.EC_izquierdaincompleto',
                            'cardiovascular_v2.EC_izquierdacompleto',
                            'cardiovascular_v2.EC_hemibloqueoAnt',
                            'cardiovascular_v2.EC_hemibloqueoPost',
                            'cardiovascular_v2.EC_Primer',
                            'cardiovascular_v2.EC_mobitz_I',
                            'cardiovascular_v2.EC_mobitz_II',
                            'cardiovascular_v2.EC_completo',
                            'cardiovascular_v2.EC_bradicardia',
                            'cardiovascular_v2.EC_taquicardiaSinus',
                            'cardiovascular_v2.EC_FA',
                            'cardiovascular_v2.EC_flutterAuricular',
                            'cardiovascular_v2.EC_TPSV',
                            'cardiovascular_v2.EC_WPW',
                            'cardiovascular_v2.EC_TauricularMultifocal',
                            'cardiovascular_v2.EC_AuricularIzq',
                            'cardiovascular_v2.EC_AuricularDer',
                            'cardiovascular_v2.EC_VentriculoIzq',
                            'cardiovascular_v2.EC_VentriculoDer',
                            'cardiovascular_v2.EC_IsqSubepi_Inf',
                            'cardiovascular_v2.EC_IsqSubepi_Septal',
                            'cardiovascular_v2.EC_IsqSubepi_Antsep',
                            'cardiovascular_v2.EC_IsqSubepi_Ant',
                            'cardiovascular_v2.EC_IsqSubepi_AntExt',
                            'cardiovascular_v2.EC_IsqSubend_Inf',
                            'cardiovascular_v2.EC_IsqSubend_Septal',
                            'cardiovascular_v2.EC_IsqSubend_Antsep',
                            'cardiovascular_v2.EC_IsqSubend_Ant',
                            'cardiovascular_v2.EC_IsqSubend_AntExt',
                            'cardiovascular_v2.EC_LesSubepi_Inf',
                            'cardiovascular_v2.EC_LesSubepi_Septal',
                            'cardiovascular_v2.EC_LesSubepi_Antsep',
                            'cardiovascular_v2.EC_LesSubepi_Ant',
                            'cardiovascular_v2.EC_LesSubepi_AntExt',
                            'cardiovascular_v2.EC_LesSubend_Inf',
                            'cardiovascular_v2.EC_LesSubend_Septal',
                            'cardiovascular_v2.EC_LesSubend_Antsep',
                            'cardiovascular_v2.EC_LesSubend_Ant',
                            'cardiovascular_v2.EC_LesSubend_AntExt',
                            'cardiovascular_v2.EC_NecroInf',
                            'cardiovascular_v2.EC_NecroSeptal',
                            'cardiovascular_v2.EC_NecroAntSept',
                            'cardiovascular_v2.EC_NecroAnt',
                            'cardiovascular_v2.EC_NecroExt',
                            'cardiovascular_v2.EC_NecroPost'                                                                      
                      )->orderBy('id','DESC')->get();

                $data = json_decode( json_encode($data), true);
                $sheet->fromArray($data);
            });
        })->export('xls');

       }

    public function table(Request $request)
    {
         $query = CardiovascularV2::with('patient','user')
                 ->select('cardiovascular_v2.id','cardiovascular_v2.user_id','cardiovascular_v2.patient_id','cardiovascular_v2.EC_FechaEvaluacion as fecha','cardiovascular_v2.created_at');
      
         return Datatables::of($query)->addColumn('action', function ($dat) {

               return ' <a href="' .route("version2.show", $dat->id) . '" class="btn btn-sm btn-info" role="button" target="_blank" data-toggle="tooltip" data-placement="right"><i class="fa fa-file-text" title="Ver registro"></i></a>

                  <a href="' .route("version2.edit", $dat->id) . '" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" data-toggle="tooltip" data-placement="right" title="Editar registro"></i></a> 
                  <button class="btn btn-sm btn-danger btn-delete" data-toggle="tooltip" data-placement="right" title="Eliminar" data-remote="'.route("version2.destroy", $dat->id) . '"><i class="fa fa-trash-o"></i></button> ';
                  })
                  ->editColumn('created_at', function ($contact){
                        return date('m/d/Y', strtotime($contact->created_at) );
                    })
                  ->filterColumn('created_at', function ($query, $keyword) {
                        $query->whereRaw("DATE_FORMAT(cardiovascular_v2.created_at,'%m/%d/%y') like ?", ["%$keyword%"]);
                    })
                   ->editColumn('fecha', function ($contact){
                        return date('m/d/Y', strtotime($contact->fecha) );
                    })
                   ->filterColumn('fecha', function ($query, $keyword) {
                        $query->whereRaw("DATE_FORMAT(cardiovascular_v2.EC_FechaEvaluacion,'%m/%d/%y') like ?", ["%$keyword%"]);
                    })
                  ->rawColumns(['action'])
                  ->make(true);
    }

   
}