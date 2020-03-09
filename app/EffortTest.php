<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EffortTest extends Model
{
    use SoftDeletes;
	protected $table="effort_test";

    protected $fillable = [
                        'patient_id',
						'user_id',
						'Fecha_TMT',
						'Medicamento1_TMT',
						'Dosis1_TMT',
						'TiempoUl1_TMT',
						'Medicamento2_TMT',
						'Dosis2_TMT',
						'TiempoUl2_TMT',
						'Medicamento3_TMT',
						'Dosis3_TMT',
						'TiempoUl3_TMT',
						'Medicamento4_TMT',
						'Dosis4_TMT',
						'TiempoUl4_TMT',
						'FC100_TMT',
						'FC85_TMT',
						'FC75_TMT',
						'Bruce_TMT',
						'Naugthon_TMT',
						'Otro_TMT',
						'RepPAS_TMT',
						'CalPAS_TMT',
						'EstaIPAS_TMT',
						'EstaIIPAS_TMT',
						'EstaIIIPAS_TMT',
						'EstaIVPAS_TMT',
						'EstaVPAS_TMT',
						'Recup1PAS_TMT',
						'Recup2PAS_TMT',
						'Recup3PAS_TMT',
						'Recup4PAS_TMT',
						'Recup8PAS_TMT',
						'Recup10PAS_TMT',
						'RepPAD_TMT',
						'CalPAD_TMT',
						'EstaIPAD_TMT',
						'EstaIIPAD_TMT',
						'EstaIIIPAD_TMT',
						'EstaIVPAD_TMT',
						'EstaVPAD_TMT',
						'Recup1PAD_TMT',
						'Recup2PAD_TMT',
						'Recup3PAD_TMT',
						'Recup4PAD_TMT',
						'Recup8PAD_TMT',
						'Recup10PAD_TMT',
						'RepFC_TMT',
						'CalFC_TMT',
						'EstaIFC_TMT',
						'EstaIIFC_TMT',
						'EstaIIIFC_TMT',
						'EstaIVFC_TMT',
						'EstaVFC_TMT',
						'Recup1FC_TMT',
						'Recup2FC_TMT',
						'Recup3FC_TMT',
						'Recup4FC_TMT',
						'Recup8FC_TMT',
						'Recup10FC_TMT',
						'RepInfSTT_TMT',
						'CalInfSTT_TMT',
						'EstaIInfSTT_TMT',
						'EstaIIInfSTT_TMT',
						'EstaIIIInfSTT_TMT',
						'EstaIVInfSTT_TMT',
						'EstaVInfSTT_TMT',
						'Recup1InfSTT_TMT',
						'Recup2InfSTT_TMT',
						'Recup3InfSTT_TMT',
						'Recup4InfSTT_TMT',
						'Recup8InfSTT_TMT',
						'Recup10InfSTT_TMT',
						'RepAngor_TMT',
						'CalAngor_TMT',
						'EstaIAngor_TMT',
						'EstaIIAngor_TMT',
						'EstaIIIAngor_TMT',
						'EstaIVAngor_TMT',
						'EstaVAngor_TMT',
						'Recup1Angor_TMT',
						'Recup2Angor_TMT',
						'Recup3Angor_TMT',
						'Recup4Angor_TMT',
						'Recup8Angor_TMT',
						'Recup10Angor_TMT',
						'RepArritVent_TMT',
						'CalArritVent_TMT',
						'EstaIArritVent_TMT',
						'EstaIIArritVent_TMT',
						'EstaIIIArritVent_TMT',
						'EstaIVArritVent_TMT',
						'EstaVArritVent_TMT',
						'Recup1ArritVent_TMT',
						'Recup2ArritVent_TMT',
						'Recup3ArritVent_TMT',
						'Recup4ArritVent_TMT',
						'Recup8ArritVent_TMT',
						'Recup10ArritVent_TMT',
						'RepArritSupV_TMT',
						'CalArritSupV_TMT',
						'EstaIArritSupV_TMT',
						'EstaIIArritSupV_TMT',
						'EstaIIIArritSupV_TMT',
						'EstaIVArritSupV_TMT',
						'EstaVArritSupV_TMT',
						'Recup1ArritSupV_TMT',
						'Recup2ArritSupV_TMT',
						'Recup3ArritSupV_TMT',
						'Recup4ArritSupV_TMT',
						'Recup8ArritSupV_TMT',
						'Recup10ArritSupV_TMT',
						'ArritVent_Mono_TMT',
						'ArritVent_Polimo_TMT',
						'ArritVent_Bige_TMT',
						'ArritVent_Pareadas_TMT',
						'ArritVent_RT_TMT',
						'ArritVent_TV_TMT',
						'RazonDet_SolPac_TMT',
						'RazonDet_Arrit_TMT',
						'RazonDet_HTA_TMT',
						'RazonDet_Isq_TMT',
						'RazonDet_85FCmax_TMT',
						'Isquemia_TMT',
						'Arritmia_TMT',
						'HTA_TMT',
						'MetsAlc_TMT',
						'TtoInd1',
						'DosisTtoind1_TMT',
						'TtoInd2',
						'DosisTtoind2_TMT',
						'TtoInd3',
						'DosisTtoind3_TMT',
						'TtoInd4',
						'DosisTtoind4_TMT',
						'Doctor_TMT',
						'Fecha_TMT2',             
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
       $query->join('patient as p','p.patient_id','effort_test.patient_id');
       
      if(trim($search)) {
        
        return $query->where('p.hist_id', 'LIKE', "%$search%")
                     ->orWhere(\DB::RAW("CONCAT_WS(' ',p.first_name, p.second_name, p.last_name, p.second_last_name) "), 'LIKE', "%$search%");
      }
      
    }
}
