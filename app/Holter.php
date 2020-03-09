<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Holter extends Model
{
    use SoftDeletes;
	protected $table     = "holter";
	protected $fillable  = ['patient_id',
                            'user_id',
							'Indications',
							'Medication',
							'Height',
							'Weight',
							'Physician',
							'Report_date',
							'ReportNum',
							'Test_date',
							'AnalysisM',
							'Starting_time',
							'Hours_analyzed',
							'Artifact',
							'Total_cardiac_Beats',
							'Unknown_beats',
							'Others',
							'Min_HR',
							'Time_Min_RH',
							'Max_HR',
							'Time_Max_HR',
							'Avg_HR',
							'BradyCar_Runs',
							'Numb_HR_at_LongBradyCar',
							'TotalTime_of_Long_BradyCar',
							'Min_HRs_at_LongBradyCar',
							'Time_Min_Rate',
							'Numb_pauses',
							'TotalTimeOf_long_pause',
							'Time_of_long_pause',
							'VE_TotalBeats',
							'VE_Forms',
							'VE_couplets',
							'VE_triplets',
							'VE_Big_runs',
							'VE_AIVR_IVR_runs',
							'VE_AIVR_IVR_Longest',
							'VE_AIVR_IVR_min_rate',
							'VE_V_Tach_Runs',
							'VE_V_Tach_Longest',
							'VE_V_Tach_Max_rate',
							'VE_Max_VEM',
							'VE_Max_VE_minute',
							'VE_Max_VEH',
							'VE_Max_VE_hour',
							'VE_mean_VE_hour',
							'VE_VE_1000',
							'SE_TotalBeats',
							'SE_couplets',
							'SE_SV_TachRuns',
							'SE_Longest',
							'SE_Max_rate',
							'SVE_Max_SVE',
							'SVE_Max_SVE_minute',
							'SVE_Max_SVE2',
							'SVE_Max_SVE_hour',
							'SE_mean_SVE_hour',
							'SE_SVE_1000',
							'STE_dep_CH1_Episodes',
							'STE_dep_CH1_Minutes',
							'STE_dep_CH1_Maximum',
							'STE_dep_CH1_Tim_of_Max',
							'STE_dep_CH2_Episodes',
							'STE_dep_CH2_Minutes',
							'STE_dep_CH2_Maximum',
							'STE_dep_CH2_Tim_of_Max',
							'STE_dep_CH3_Episodes',
							'STE_dep_CH3_Minutes',
							'STE_dep_CH3_Maximum',
							'STE_dep_CH3_Tim_of_Max',
							'STE_Elev_CH1_Episodes',
							'STE_Elev_CH1_Minutes',
							'STE_Elev_CH1_Maximum',
							'STE_Elev_CH1_Tim_of_Max',
							'STE_Elev_CH2_Episodes',
							'STE_Elev_CH2_Minutes',
							'STE_Elev_CH2_Maximum',
							'STE_Elev_CH2_Tim_of_Max',
							'STE_Elev_CH3_Episodes',
							'STE_Elev_CH3_Minutes',
							'STE_Elev_CH3_Maximum',
							'STE_Elev_CH3_Tim_of_Max',
							'Dx_CardiacRythmn',
							'Dx_Min_FC',
							'Dx_Max_FC',
							'Dx_Avg_FC',
							'Dx_other_1',
							'Dx_other_2',
							'Dx_other_3',
							'Dx_other_4',
							'Holter_1a',
							'Holter_1b',
							'Holter_1c',
							'Holter_2',
							'Holter_3',
							'Holter_4',
							'Holter_5',
							'Holter_6',
							'Holter_7',
							'Holter_8',
							'Holter_9',
							'Holter_10',
							'Holter_11',
							'Holter_12',
							'Holter_13',
							'Holter_14',
							'Holter_15',
							'Holter_16',
							'Holter_17',
							'Holter_18',
							'Holter_19',
							'Holter_20',
							'Holter_21',
							'Holter_22',
							'Holter_23',
							'Holter_24',
							'Holter_25',
							'Holter_26',
							'Holter_27',
							'Holter_28',
							'Holter_29',
							'Holter_30',
							'Holter_31',
							'Holter_32',
							'Holter_33',
							'Holter_34',
							'Holter_35',
							'Holter_36',
							'Holter_37',
							'Holter_38'
							];

	protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id')->withDefault([
            'name' => 'N/A',
        ]);
    }

    public function patient() {
        return $this->belongsTo(Patient::class,'patient_id','patient_id')->withDefault([
            'hist_id' => 0,
            'cedula' => 0,
            'first_name' => '',
            'last_name' => '',
       ]);
    }

   public function scopeSearch($query, $search)
   {
    	$query->join('patient as p','p.patient_id','holter.patient_id');

      if(trim($search)) {
        
        return $query->where('p.hist_id', 'LIKE', "%$search%")
                     ->orWhere(\DB::RAW("CONCAT_WS(' ',p.first_name, p.second_name, p.last_name, p.second_last_name) "), 'LIKE', "%$search%");
      }
      
    }
}
