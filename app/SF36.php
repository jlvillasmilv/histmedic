<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;


class SF36 extends Model
{
    

use SoftDeletes;

     protected $table="sf36";

     protected $primaryKey ='sf36_id';
  
     protected $fillable = [
               'patient_id',
               'user_id', 
               'datsf36',
               'sf_encuestador',
               'sf1','sf2', 'sf3', 'sf4', 'sf5', 'sf6','sf7',
               'sf8','sf9','sf10', 'sf11','sf12','sf13','sf14',
               'sf15','sf16','sf17','sf18', 'sf19','sf20','sf21',
               'sf22','sf23','sf24', 'sf25','sf26','sf27','sf28',
               'sf29','sf30','sf31', 'sf32','sf33','sf34','sf35',
               'sf36'  ];

    protected $hidden = [
        'user_id', 'user_updated', 'user_deleted',
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

    public function scopeSearch2($query,$search)
    {

      $query->join('patient as p','p.patient_id','sf36.patient_id');

      if(trim($search) != "")
      {
         $query->where('p.hist_id', 'LIKE', "%$search%")
               ->orWhere(\DB::RAW("CONCAT_WS(' ',p.first_name, p.second_name, p.last_name, p.second_last_name) "), 'LIKE', "%$search%");
      }

       $SF36= $query->select(DB::raw("CONCAT(p.first_name,' ',p.last_name) as SF_NombreApellido"),  
                'p.hist_id as Hist_ID','p.gender as SF_Sexo',
                DB::raw('TIMESTAMPDIFF(YEAR,p.date_birth,sf36.datsf36) AS SF_Edad'),
                DB::raw('DATE_FORMAT(sf36.datsf36,"%m/%d/%Y") AS DATSF36'),'sf36.sf_encuestador as SF_Encuestador',
                'sf36.sf1 as SF1', 'sf36.sf2 as SF2',
                'sf36.sf3 as SF3','sf36.sf4 as SF4',
                'sf36.sf5 as SF5','sf36.sf6 as SF6',
                'sf36.sf7 as SF7','sf36.sf8 as SF8',
                'sf36.sf9 as SF9','sf36.sf10 as SF10',
                'sf36.sf11 as SF11',
                'sf36.sf12 as SF12',
                'sf36.sf13 as SF13',
                'sf36.sf14 as SF14',
                'sf36.sf15 as SF15',
                'sf36.sf16 as SF16',
                'sf36.sf17 as SF17',
                'sf36.sf18 as SF18',
                'sf36.sf19 as SF19',
                'sf36.sf20 as SF20',
                'sf36.sf21 as SF21',
                'sf36.sf22 as SF22',
                'sf36.sf23 as SF23',
                'sf36.sf24 as SF24',
                'sf36.sf25 as SF25',
                'sf36.sf26 as SF26',
                'sf36.sf27 as SF27',
                'sf36.sf28 as SF28',
                'sf36.sf29 as SF29',
                'sf36.sf30 as SF30',
                'sf36.sf31 as SF31',
                'sf36.sf32 as SF32',
                'sf36.sf33 as SF33',
                'sf36.sf34 as SF34',
                'sf36.sf35 as SF35',
                'sf36.sf36 as SF36')
                ->orderBy('sf36.datsf36');

      return $SF36;
    }
}
