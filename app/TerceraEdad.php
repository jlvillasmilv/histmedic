<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TerceraEdad extends Model
{
    
	use SoftDeletes;

    protected $table="tercera_edad";

    protected $fillable = [
    		    'patient_id',
                'user_id', 
                'AI_Lenguaje',
				'AI_fuente',
				'AI_Parentes',
				'AI_telef_ef',
				'AI_DiaSemana',
				'AI_Dia',
				'AI_Mes',
				'AI_Ano',
				'AI_fecha',
				'AI_Lugar_Aplicacion',
				'AI_Codigo_encuestador',
				'AI_Sector',
				'AI_Manzana',
				'AI_Dia_Q1',
				'AI_Mes_Q1',
				'AI_Ano_Q1',
				'AI_PuntajeQ1',
				'AI_2',
				'AI_PuntajeQ2',
				'AI_3',
				'AI_4',
				'AI_edad_ef',
				'AI_PuntajeQ5',
				'AI_6',
				'AI_PuntajeQ6',
				'AI_7',
				'AI_PuntajeQ7',
				'AI_8',
				'AI_PuntajeQ8',
				'AI_9',
				'AI_10',
				'AI_Fuma',
				'AI_12',
				'AI_13',
				'AI_14',
				'AI_15',
				'AI_16',
				'AI_17',
				'AI_18',
				'AI_19',
				'AI_20',
				'AI_21',
				'AI_22',
				'AI_23',
				'AI_24',
				'AI_25',
				'AI_26',
				'AI_27',
				'AI_28',
				'AI_29',
				'AI_30',
				'AI_31',
				'AI_32',
				'AI_33',
				'AI_34',
				'AI_35',
				'AI_36Habilid',
				'AI_37transp',
				'AI_38compras',
				'AI_39',
				'AI_40',
				'AI_41',
				'AI_42',
				'AI_43',
				'AI_44',
				'AI_45',
				'AI_Educa_ef',
				'AI_47',
				'AI_48',
				'AI_49',
				'AI_50',
				'AI_52',
				'AI_53',
				'AI_54',
				'AI_55',
				'AI_56',
				'AI_57',
				'AI_58',
				'AI_59',
				'AI_60',
				'AI_61',
				'AI_62',
				'AI_63',
				'AI_64' ];

	protected $dates = ['created_at','updated_at','deleted_at'];

    protected $hidden = ['id','patient_id', 'user_id','user_updated','user_deleted','created_at','updated_at','deleted_at' ];

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
    	$query->join('patient as p','p.patient_id','tercera_edad.patient_id');

      if(trim($search)) {
        
        return $query->where('p.hist_id', 'LIKE', "%$search%")
        			 ->orWhere('p.cedula', 'LIKE', "%$search%")
                     ->orWhere(\DB::RAW("CONCAT_WS(' ',p.first_name, p.second_name, p.last_name, p.second_last_name) "), 'LIKE', "%$search%");  
      }
      
    }

}
