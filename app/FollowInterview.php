<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FollowInterview extends Model
{
    use SoftDeletes;
	protected $table="follow_interviews";

	protected $fillable = [
                        'patient_id',
						             'user_id',
                         'Fech_entrevSeg',
                          'Fecha_map',
                          'EntrevistadorES',
                          'telf',
                          'Nom_inf',
                          'parentescoe',
                          'Emg_cardio',
                          'Cen_sal',
                          'Mot_emg',
                          'Fec_emer',
                          'amerito_hosp',
                          'Lugar_hosp',
                          'mot_hosp',
                          'fecha_hosp',
                          'infarto',
                          'sint_1_inf',
                          'sint_2_inf',
                          'sint_3_inf',
                          'sint_4_inf',
                          'sint_5_inf',
                          'sint_6_inf',
                          'Fecha_inf',
                          'Lugar_hosp_inf',
                          'Angina',
                          'Tipo_Ang',
                          'sint_1_ang',
                          'sint_2_ang',
                          'sint_3_ang',
                          'sint_4_ang',
                          'sint_5_ang',
                          'Fecha_ang',
                          'Lugar_hosp_ang',
                          'ACV',
                          'Tipo_ACV',
                          'sint_1_ACV',
                          'sint_2_ACV',
                          'sint_3_ACV',
                          'sint_4_ACV',
                          'sint_5_ACV',
                          'sint_6_ACV',
                          'sint_7_ACV',
                          'sint_8_ACV',
                          'Fecha_ACV',
                          'Lugar_hosp_ACV',
                          'Revasc_Coron',
                          'Tipo_RC',
                          'Insuf_Card',
                          'Sint_1_card',
                          'Sint_2_card',
                          'Sint_3_card',
                          'Sint_4_card',
                          'Sint_5_card',
                          'Lugar_Hosp_card',
                          'Fecha_RC',
                          'Fue_Hops_por',
                          'fecha_diag',
                          'Digoxina',
                          'Lanicor',
                          'Lanitop',
                          'Isordil',
                          'Isomack',
                          'Nitroderm',
                          'Nitroglicerina',
                          'Otros_med',
                          'Enf_Vasc_Perf',
                          'Sint_1_vasc',
                          'Sint_2_vasc',
                          'Fecha_vasc',
                          'Ins_Renal',
                          'Fecha_dial',
                          'dial',
                          'Frec_dial',
                          'hosp_dial',
                          'Abla_Rinon',
                          'Hosp_Abla',
                          'Fecha_Abla',
                          'Reti_hipert',
                          'Fecha_Diag_reti',
                          'Sint_1_reti',
                          'Sint_2_reti',
                          'Obs_entre_seg'						             
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

      if(trim($search)) {
        
        return $query->where('p.hist_id', 'LIKE', "%$search%")
                     ->orWhere('p.first_name', 'LIKE', "%$search%");
      }
      
    }
}
