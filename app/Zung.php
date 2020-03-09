<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Zung extends Model
{
    use SoftDeletes;
	protected $table     ="zung";
    protected $fillable  = ['patient_id',
                            'user_id',
							'Fecha_zung',
							'Zung_1',
							'Zung_2',
							'Zung_3',
							'Zung_4',
							'Zung_5',
							'Zung_6',
							'Zung_7',
							'Zung_8',
							'Zung_9',
							'Zung_10',
							'Zung_11',
							'Zung_12',
							'Zung_13',
							'Zung_14',
							'Zung_15',
							'Zung_16',
							'Zung_17',
							'Zung_18',
							'Zung_19',
							'Zung_20'
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

      if(trim($search)) {
        
        return $query->where('p.hist_id', 'LIKE', "%$search%")
                     ->orWhere('p.first_name', 'LIKE', "%$search%");
      }
      
    }
}
