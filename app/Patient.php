<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use SoftDeletes;

     protected $table="patient";

     protected $primaryKey ='patient_id';
  
     protected $fillable = [
               'hist_id',
               'cedula', 
               'first_name',
               'second_name',
               'last_name',
               'second_last_name',
               'age',
               'adress',
               'date_birth',
               'state_country',
               'city_born',
               'gender',
               'ethnicity',
               'user_id',
             ];

     protected $dates  = ['date_birth','deleted_at','created_at'];

     protected $hidden = [
        'id', 'deleted_at','user_id','updated_at','user_id',
    ];

  public function user()
  {
      return $this->belongsTo(User::class)->withDefault([
          'name' => 'Guest Author',
      ]);
  }

  public function scopeSearch($query, $search)
  {

      if(trim($search) != "")
      {
        
        return $query->where('hist_id', 'LIKE', "%$search%")
                     ->orwhere('cedula', 'LIKE', "%$search%")
                     ->orWhere(\DB::RAW("CONCAT_WS(' ',first_name, second_name, last_name, second_last_name) "), 'LIKE', "%$search%")
                     ->orderBy('hist_id');
        }else{

        return $query->orderBy('hist_id');
        
         }
  }


}
