<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaFormat1 extends Model
{
    use SoftDeletes;
	protected $table="pa_format1";

    protected $fillable = [
                        'patient_id',
						'user_id',
						'BH',
						'DATH1',
						'BW',
						'SBP1',
						'DBP1',
						'PAM1',
						'RATE1',
						'x1OSBP',
						'x1ODBP',
						'x1OPAM',
						'RATE8',
						'DATH2',
						'BW2',
						'SBP2',
						'DBP2',
						'PAM2',
						'RATE2',
						'x2OSBP',
						'x2ODBP',
						'x2OPAM',
						'RATE_pie2',
						'DATH3',
						'BW3',
						'SBP3',
						'DBP3',
						'PAM3',
						'RATE3',
						'x3OSBP',
						'x3ODBP',
						'x3OPAM',
						'RATE_pie3',
						'DATH4',
						'BW4',
						'SBP4',
						'DBP4',
						'PAM4',
						'RATE4',
						'x4OSBP',
						'x4ODBP',
						'x4OPAM',
						'RATE_pie4',
						'DATH5',
						'BW5',
						'SBP5',
						'DBP5',
						'PAM5',
						'RATE5',
						'x5OSBP',
						'x5ODBP',
						'x5OPAM',
						'RATE_pie5',
						'DATH6',
						'BW6',
						'SBP6',
						'DBP6',
						'PAM6',
						'RATE6',
						'x6OSBP',
						'x6ODBP',
						'x6OPAM',
						'RATE_pie6',             
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
		$query->join('patient as p','p.patient_id','pa_format1.patient_id');
      if(trim($search)) {

        return $query->where('p.hist_id', 'LIKE', "%$search%")
                     ->orWhere(\DB::RAW("CONCAT_WS(' ',p.first_name, p.second_name, p.last_name, p.second_last_name) "), 'LIKE', "%$search%");
      }
      
    }
}