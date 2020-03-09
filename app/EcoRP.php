<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EcoRP extends Model
{
   use SoftDeletes;
	protected $table     ="eco_rp";
    protected $fillable  = ['patient_id',
							'Fecha_eco',
							'Peso_eco',
							'Talla_eco',
							'Neco_eco',
							'Referido_eco',
							'Aorta_eco',
							'Sept_diast_eco',
							'VId_diast_eco',
							'Vid_sist_eco',
							'PPVI_diast_eco',
							'Auriculaiz_eco',
							'Auri_sist_eco',
							'VentDer_eco',
							'Auri_Sist2_eco',
							'VI_TE_eco',
							'VI_PPE_eco',
							'VI_RR_eco',
							'VI_PPETE_eco',
							'VD_TE_eco',
							'VD_PPE_eco',
							'VD_RR_eco',
							'VD_PPETE_eco',
							'AperAo_eco',
							'Exc_mitral_eco',
							'EF_eco',
							'QCM_eco',
							'Pul_eco',
							'Tricuspide_eco',
							'VDF_eco',
							'VSF_eco',
							'VL_eco',
							'FE_eco',
							'FacPer_eco',
							'Masa_eco',
							'Dop_mit_e_eco',
							'Dop_mit_a_eco',
							'Dop_mit_tac_eco',
							'Dop_mit_tdec_eco',
							'Dop_mit_tto_eco',
							'Dop_mit_tva_eco',
							'Dop_tric_e_eco',
							'Dop_tric_a_eco',
							'Dop_tric_tac_eco',
							'Dop_tric_tdec_eco',
							'Dop_tric_tto_eco',
							'Dop_tric_tva_eco',
							'Ao_vmax_eco',
							'Ao_ta_eco',
							'Ao_tdec_eco',
							'Ao_tvi_eco',
							'Pulm_vmax_eco',
							'Pulm_ta_eco',
							'Pulm_tdec_eco',
							'Pulm_tvi_eco',
							'Moti_eco',
							'Conc1_eco',
							'Conc2_eco',
							'Conc3_eco',
							'Conc4_eco',
							'Conc5_eco',
							'Conc6_eco'
							];

	protected $dates = ['deleted_at','created_at','updated_at'];

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
      $query->join('patient as p','p.patient_id','eco_rp.patient_id');

      if(trim($search)) {
        
        return $query->where('p.hist_id', 'LIKE', "%$search%")
                     ->orWhere(\DB::RAW("CONCAT_WS(' ',p.first_name, p.second_name, p.last_name, p.second_last_name) "), 'LIKE', "%$search%");
      }
      
    }

}
