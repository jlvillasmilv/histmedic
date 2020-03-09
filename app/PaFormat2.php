<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaFormat2 extends Model
{
    use SoftDeletes;
	protected $table="pa_format2";

    protected $fillable = [
                        'patient_id',
						'user_id',
						'DATH1',
						'A_SBP6',
						'A_DBP6',
						'RATE6',
						'1OSBP',
						'1ODBP',
						'RATE8',
						'5OSBP',
						'5ODBP',
						'RATE10'             
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
        $query->join('patient as p','p.patient_id','pa_format2.patient_id');
      if(trim($search)) {
        return $query->where('p.hist_id', 'LIKE', "%$search%")
                     ->orWhere(\DB::RAW("CONCAT_WS(' ',p.first_name, p.second_name, p.last_name, p.second_last_name) "), 'LIKE', "%$search%");
      }
      
    }
}
