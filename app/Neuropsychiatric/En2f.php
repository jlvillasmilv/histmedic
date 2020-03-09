<?php

namespace App\Neuropsychiatric;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class En2f extends Model
{
    use SoftDeletes;
	protected $table="en2f";

    protected $fillable = [
                'patient_id',
				'user_id',
				'educacio',
				'fech_neu',
				'Evaluador',
				'MCP_a',
				'MCP_b',
				'MCP_c',
				'MCP_d',
				'MCP_puntaje',
				'Atenc_a',
				'Atenc_b',
				'Atenc_puntaje',
				'Orient_a',
				'Orient_b',
				'Orient_c',
				'Orient_puntaje',
				'MR5_a',
				'MR5_b',
				'MR5_c',
				'MR5_d',
				'MR5_puntaje',
				'Calculo',
				'Const_a',
				'Const_b',
				'Const_puntaje',
				'JuicoP_a',
				'JuicoP_b',
				'MR10_puntaje',
				'MR30_puntaje',
				'Leng_a',
				'Leng_b',
				'Leng_c',
				'Leng_d',
				'MnoVD_puntaje',
				'MnoVL_puntaje',
				'Lenguaje2_puntaje',
				'APA_parteI_puntaje',
				'APA_parteII_puntaje',
				'MemRem_puntaje',
				'acv',
				'fecha_acv',
				'perd_con',
				'Facial_P',
				'Perd_Vision',
				'cam_leng',
				'Para_MI',
				'Perd_Sens',
				'acv_quir',
				'tipo_acv',
				'núm_even',
				'Conciencia',
				'Habla',
				'Sensibilidad',
				'CampVisual',
				'MovOculares',
				'FondOjo',
				'Audicion',
				'Otros_parescrea',
				'Motor',
				'Movimiento',
				'Marcha',
				'Coordinacion',
				'Tono_muscular',
				'Reflejos',
				'Cuello',
				'Columna',
				'HablaLeng',
				'ExpFac',
				'TembRep',
				'Cuello2',
				'MSD',
				'MSI',
				'MID',
				'MII',
				'Postura',
				'Bradiquinesia',
				'_Marcha',
				'EP_farmaco',
				'blecot1',
				'blecot2',
				'blecot3',
				'blecot4',
				'blecot5',
				'blecot6',
				'blecot7',
				'blecot8',
				't_activi',
				'bleha9',
				'bleha10',
				'bleha11',
				't_hábito',
				't_funcio',
				'avd_paci',
				'avd_entr',
				'Inf_obt',
				'memocdr',
				'oriencdr',
				'juiciocdr',
				'actsoccdr',
				'Hogarcdr',
				'cuidadocdr',
				'cdr',
				'ano_sint',
				'edad_sin',
				'comi_cua',
				'cur_cuad',
				'hach1',
				'hach2',
				'hach3',
				'hach4',
				'hach5',
				'hach6',
				'hach7',
				'hach8',
				'esc_hach',
				'sintom_1',
				'diag_dem'];

    protected $dates  = ['fecha_acv','created_at','updated_at','deleted_at'];
    protected $hidden = ['id','patient_id', 'user_id','user_updated','user_deleted','created_at','updated_at','deleted_at' ];

    public function user()
	{
	    return $this->belongsTo(\App\User::class,'user_id')->withDefault([
	        'name' => 'N/A',
	    ]);
	}

    public function patient() {
        return $this->belongsTo(\App\Patient::class,'patient_id','patient_id')->withDefault([
        		'hist_id' => 0,
        		'cedula' => 0,
        		'first_name' => '',
        		'last_name' => '',
   		 ]);
    }

   public function scopeSearch($query, $search)
    {
		$query->join('patient as p','p.patient_id','en2f.patient_id');

      if(trim($search)) {
        
        return $query->where('p.hist_id', 'LIKE', "%$search%")
					 ->orWhere('p.cedula', 'LIKE', "%$search%")
					 ->orWhere(\DB::RAW("CONCAT_WS(' ',p.first_name, p.second_name, p.last_name, p.second_last_name) "), 'LIKE', "%$search%");
      }
      
    }
}
