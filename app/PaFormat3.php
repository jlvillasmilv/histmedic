<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaFormat3 extends Model
{
    use SoftDeletes;
	protected $table="pa_format3";

    protected $fillable = [
                        'patient_id',
						'user_id',
						'BW',
						'BH',
						'DATH1',
						'SBP1',
						'DBP1',
						'PAM1',
						'RATE1',
						'DATH2',
						'SBP2',
						'DBP2',
						'PAM2',
						'RATE2',
						'DATH3',
						'SBP3',
						'DBP3',
						'PAM3',
						'RATE3',
						'A_SBP6',
						'A_DBP6',
						'A_PAM',
						'RATE6',
						'x1OSBP',
						'x1ODBP',
						'x1OPAM',
						'RATE8',
						'x3OSBP',
						'x3ODBP',
						'x3OPAM',
						'RATE9',
						'x5OSBP',
						'x5ODBP',
						'x5OPAM',
						'RATE10',
						'Fatiga',
						'Debilidad',
						'Mareos',
						'Vision_borrosa',
						'Vision_luminosos',
						'Palpitaciones',
						'Cefalea',
						'Dolor_cuello',
						'Otras_sintomas',
						'Sudoracion',
						'Palidez_cut_muc',
						'Otras_signos'             
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
		$query->join('patient as p','p.patient_id','pa_format3.patient_id');

      if(trim($search)) {
        return $query->where('p.hist_id', 'LIKE', "%$search%")
                     ->orWhere(\DB::RAW("CONCAT_WS(' ',p.first_name, p.second_name, p.last_name, p.second_last_name) "), 'LIKE', "%$search%");
      }
      
    }
}