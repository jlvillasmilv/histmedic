<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LaboratoryRP extends Model
{
    use SoftDeletes;
	protected $table     ="laboratory_rp";
    protected $fillable  = ['patient_id',
                            'user_id',
							'Fecha_Laboratory',
							'wbc',
							'lym',
							'mid',
							'gran',
							'rbc',
							'hgb',
							'hct',
							'mcv',
							'mch',
							'mchc',
							'rdw',
							'plt',
							'glucosa',
							'bun',
							'creatini',
							'colester',
							'ldl_cole',
							'hdl_cole',
							'triglice',
							'acido_ur',
							'total_pr',
							'Hcy_Fecha',
							'Hcy_Nlaboratorio',
							'Hcy_Hcy',
							'Hcy_VitB12',
							'Hcy_Folato'
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
    	$query->join('patient as p','p.patient_id','laboratory_rp.patient_id');
    	
      if(trim($search)) {
        
        return $query->where('p.hist_id', 'LIKE', "%$search%")
                     ->orWhere(\DB::RAW("CONCAT_WS(' ',p.first_name, p.second_name, p.last_name, p.second_last_name) "), 'LIKE', "%$search%");
      }
      
    }
}
