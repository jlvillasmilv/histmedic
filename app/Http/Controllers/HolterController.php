<?php

namespace App\Http\Controllers;

use App\Holter;
use Illuminate\Http\Request;
use App\Http\Requests\HolterRequest;
use Illuminate\Support\Facades\DB;

use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;
use Response;
use Redirect;

class HolterController extends Controller
{
   
    public function index(Request $request)
    {
        $create  = route('holter.create');
        $table   = route('holter_table');
        $export  = route('holter_xls');
        $title   = "Holter";

        return View('holter.index',compact('title','export','table','create'));
    }

    
    public function create()
    {
      return View('holter.form');
    }

    
    public function store(HolterRequest $request)
    {
        
        $Holter = new Holter;
        $Holter->fill($request->all());
        $Holter->user_id =auth()->user()->id;
        $Holter->save();

         $notification = array(
            'message' => 'Registro almacenado con exito.', 
            'alert_type' => 'success',);
        
            \Session::flash('notification', $notification);
        return Redirect::action('HolterController@index');
    }

    
    public function show($id)
    {
        $data = Holter::join('patient as p','p.patient_id','holter.patient_id')
                ->select( DB::raw("CONCAT(p.first_name,' ',p.last_name) as name"),'p.hist_id','p.gender',
                        DB::raw('DATE_FORMAT(p.date_birth,"%m/%d/%Y") AS DOB_holter'),
                        DB::raw('TIMESTAMPDIFF(YEAR,p.date_birth,holter.Test_date) AS age'),
                        'p.adress',
                        'holter.*')
                ->where('id',$id)
                ->orderBy('id','DESC')
                ->first();
       
        $view = \View::make('holter.format_pdf', compact('data'))->render();        
        $pdf  = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        $pdf->setPaper("letter", "portrait");
        return $pdf->stream();     
    }

   
    public function edit($id)
    {
        $data = Holter::findOrFail($id);
        return View('holter.form',compact('data'));
    }

    
    public function update(HolterRequest $request, $id)
    {
        $Holter = Holter::findOrFail($id);
        $Holter->fill($request->all());
        $Holter->user_updated =auth()->user()->id;
        $Holter->update();
        $notification = array(
            'message' => 'Registro actualizado con exito.', 
            'alert_type' => 'success',);
        
        \Session::flash('notification', $notification);
        return Redirect::action('HolterController@index');
    }

   
    public function destroy($id)
    {
       $Holter = Holter::findOrFail($id);
       $Holter->user_deleted =auth()->user()->id;
       $Holter->update();
       $Holter = Holter::findOrFail($id)->delete();
       return;
    }

   public function export_xls(Request $request)
    {

       $GLOBALS['variable'] =$request->input('tx');
        
        Excel::create('holter', function($excel) {
              
        $excel->sheet('holter', function($sheet) {

        $data = Holter::Search($GLOBALS['variable'])
                    ->select( 
                             DB::raw("CONCAT(p.first_name,' ',p.last_name) as Subject_Name"),
                             DB::raw('DATE_FORMAT(p.date_birth,"%m/%d/%Y") AS DOB_holter'),  
                             'p.adress',
                             'holter.Indications',
                             'holter.Medication',    
                             'p.hist_id as Hist_ID',               
                             DB::raw('TIMESTAMPDIFF(YEAR,p.date_birth,holter.Test_date) AS age'),
                             'p.gender as Sex',
                            'holter.Height',
                            'holter.Weight',
                            'holter.Physician',
                             DB::raw('DATE_FORMAT(holter.Report_date,"%m/%d/%Y") AS Report_date'),
                            'holter.ReportNum',
                             DB::raw('DATE_FORMAT(holter.Test_date,"%m/%d/%Y") AS Test_date'), 
                            'holter.AnalysisM',
                            'holter.Starting_time',
                            'holter.Hours_analyzed',
                            'holter.Artifact',
                            'holter.Total_cardiac_Beats',
                            'holter.Unknown_beats',
                            'holter.Others',
                            'holter.Min_HR',
                            'holter.Time_Min_RH',
                            'holter.Max_HR',
                            'holter.Time_Max_HR',
                            'holter.Avg_HR',
                            'holter.BradyCar_Runs',
                            'holter.Numb_HR_at_LongBradyCar',
                            'holter.TotalTime_of_Long_BradyCar',
                            'holter.Min_HRs_at_LongBradyCar',
                            'holter.Time_Min_Rate',
                            'holter.Numb_pauses',
                            'holter.TotalTimeOf_long_pause',
                            'holter.Time_of_long_pause',
                            'holter.VE_TotalBeats',
                            'holter.VE_Forms',
                            'holter.VE_couplets',
                            'holter.VE_triplets',
                            'holter.VE_Big_runs',
                            'holter.VE_AIVR_IVR_runs',
                            'holter.VE_AIVR_IVR_Longest as VE_AIVR.IVR_Longest',
                            'holter.VE_AIVR_IVR_min_rate as VE_AIVR.IVR_min_rate',
                            'holter.VE_V_Tach_Runs as VE_V.Tach_Runs',
                            'holter.VE_V_Tach_Longest as VE_V.Tach_Longest',
                            'holter.VE_V_Tach_Max_rate as VE_V.Tach_Max_rate',
                            'holter.VE_Max_VEM',
                            'holter.VE_Max_VE_minute as VE_Max_VE.minute',
                            'holter.VE_Max_VEH',
                            'holter.VE_Max_VE_hour as VE_Max_VE.hour',
                            'holter.VE_mean_VE_hour as VE_mean_VE.hour',
                            'holter.VE_VE_1000 as VE_VE/1000',
                            'holter.SE_TotalBeats',
                            'holter.SE_couplets',
                            'holter.SE_SV_TachRuns as SE_SV.TachRuns',
                            'holter.SE_Longest',
                            'holter.SE_Max_rate',
                            'holter.SVE_Max_SVE',
                            'holter.SVE_Max_SVE_minute as SVE_Max_SVE.minute',
                            'holter.SVE_Max_SVE2',
                            'holter.SVE_Max_SVE_hour as SVE_Max_SVE.hour',
                            'holter.SE_mean_SVE_hour as SE_mean_SVE.hour',
                            'holter.SE_SVE_1000 as SE_SVE/1000',
                            'holter.STE_dep_CH1_Episodes',
                            'holter.STE_dep_CH1_Minutes',
                            'holter.STE_dep_CH1_Maximum',
                            'holter.STE_dep_CH1_Tim_of_Max',
                            'holter.STE_dep_CH2_Episodes',
                            'holter.STE_dep_CH2_Minutes',
                            'holter.STE_dep_CH2_Maximum',
                            'holter.STE_dep_CH2_Tim_of_Max',
                            'holter.STE_dep_CH3_Episodes',
                            'holter.STE_dep_CH3_Minutes',
                            'holter.STE_dep_CH3_Maximum',
                            'holter.STE_dep_CH3_Tim_of_Max',
                            'holter.STE_Elev_CH1_Episodes',
                            'holter.STE_Elev_CH1_Minutes',
                            'holter.STE_Elev_CH1_Maximum',
                            'holter.STE_Elev_CH1_Tim_of_Max',
                            'holter.STE_Elev_CH2_Episodes',
                            'holter.STE_Elev_CH2_Minutes',
                            'holter.STE_Elev_CH2_Maximum',
                            'holter.STE_Elev_CH2_Tim_of_Max',
                            'holter.STE_Elev_CH3_Episodes',
                            'holter.STE_Elev_CH3_Minutes',
                            'holter.STE_Elev_CH3_Maximum',
                            'holter.STE_Elev_CH3_Tim_of_Max',
                            'holter.Dx_CardiacRythmn',
                            'holter.Dx_Min_FC',
                            'holter.Dx_Max_FC',
                            'holter.Dx_Avg_FC',
                            'holter.Dx_other_1',
                            'holter.Dx_other_2',
                            'holter.Dx_other_3',
                            'holter.Dx_other_4',
                            'holter.Holter_1a',
                            'holter.Holter_1b',
                            'holter.Holter_1c',
                            'holter.Holter_2',
                            'holter.Holter_3',
                            'holter.Holter_4',
                            'holter.Holter_5',
                            'holter.Holter_6',
                            'holter.Holter_7',
                            'holter.Holter_8',
                            'holter.Holter_9',
                            'holter.Holter_10',
                            'holter.Holter_11',
                            'holter.Holter_12',
                            'holter.Holter_13',
                            'holter.Holter_14',
                            'holter.Holter_15',
                            'holter.Holter_16',
                            'holter.Holter_17',
                            'holter.Holter_18',
                            'holter.Holter_19',
                            'holter.Holter_20',
                            'holter.Holter_21',
                            'holter.Holter_22',
                            'holter.Holter_23',
                            'holter.Holter_24',
                            'holter.Holter_25',
                            'holter.Holter_26',
                            'holter.Holter_27',
                            'holter.Holter_28',
                            'holter.Holter_29',
                            'holter.Holter_30',
                            'holter.Holter_31',
                            'holter.Holter_32',
                            'holter.Holter_33',
                            'holter.Holter_34',
                            'holter.Holter_35',
                            'holter.Holter_36',
                            'holter.Holter_37',
                            'holter.Holter_38'                
                      )->orderBy('id','DESC')->get();

                $data = json_decode( json_encode($data), true);
                $sheet->fromArray($data);
            });
        })->export('xlsx');

       }

    public function table(Request $request)
    {
         $query = Holter::with('patient','user')
                 ->select('holter.id','holter.user_id','holter.patient_id','holter.Test_date as fecha','holter.created_at');
      
         return Datatables::of($query)->addColumn('action', function ($dat) {

               return ' <a href="' .route("holter.show", $dat->id) . '" class="btn btn-sm btn-info" role="button" target="_blank" data-toggle="tooltip" data-placement="right"><i class="fa fa-file-text" title="Ver registro"></i></a>

                  <a href="' .route("holter.edit", $dat->id) . '" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" data-toggle="tooltip" data-placement="right" title="Editar registro"></i></a> 
                  <button class="btn btn-sm btn-danger btn-delete" data-toggle="tooltip" data-placement="right" title="Eliminar" data-remote="'.route("holter.destroy", $dat->id) . '"><i class="fa fa-trash-o"></i></button> ';
                  })
                  ->editColumn('created_at', function ($contact){
                        return date('m/d/Y', strtotime($contact->created_at) );
                    })
                  ->filterColumn('created_at', function ($query, $keyword) {
                        $query->whereRaw("DATE_FORMAT(holter.created_at,'%m/%d/%y') like ?", ["%$keyword%"]);
                    })
                   ->editColumn('fecha', function ($contact){
                        return date('m/d/Y', strtotime($contact->fecha) );
                    })
                   ->filterColumn('fecha', function ($query, $keyword) {
                        $query->whereRaw("DATE_FORMAT(holter.Test_date,'%m/%d/%y') like ?", ["%$keyword%"]);
                    })
                  ->rawColumns(['action'])
                  ->make(true);
    }

   
}
