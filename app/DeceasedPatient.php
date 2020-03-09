<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DeceasedPatient extends Model
{
    use SoftDeletes;
	  protected $table="deceased_patients";

    protected $fillable = [
                        'patient_id',
        				'nom_infor',
        				'parentesco',
        				'ed_morte',
        				'fech_morte',
        				'lug_morte',
        				'caus_morte',
        				'lug_vela',
        				'fech_entrev',
        				'Entrevistador',
        				'Obs_Hist_Fallecido',             
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
        $query->join('patient as p','p.patient_id','deceased_patients.patient_id');

      if(trim($search)) {
        
        return $query->where('p.hist_id', 'LIKE', "%$search%")
                     ->orWhere(\DB::RAW("CONCAT_WS(' ',p.first_name, p.second_name, p.last_name, p.second_last_name) "), 'LIKE', "%$search%");
      }
      
    }
}
