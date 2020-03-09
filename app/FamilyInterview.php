<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FamilyInterview extends Model
{
   use SoftDeletes;
	protected $table="family_interview";

    protected $fillable = [
                       'patient_id',
						'user_id',
						'Educa_ef',
						'direc_ef',
						'telef_ef',
						'fuente',
						'Parentesco',
						'Parentesco_Telefono',
						'Numero_fuentes',
						'fecha_ef',
						'Evaluador',
						'memor_1',
						'memor_2',
						'memor_3',
						'memor_4',
						'memor_5',
						'memor_6',
						'memor_7',
						'memor_8',
						'memor_9',
						'memor_10',
						'memor_11',
						'memor_12',
						'memor_13',
						'memor_14',
						'memor_15',
						'expre_16',
						'expre_17',
						'expre_18',
						'expre_19',
						'perso_20',
						'perso_21',
						'perso_22',
						'perso_23',
						'perso_24',
						'perso_25',
						'perso_26',
						'perso_27',
						'perso_28',
						'perso_31',
						'perso_32',
						'perso_33',
						'perso_34',
						'perso_35',
						'otros_36',
						'otros_37',
						'otros_38',
						'otros_39',
						'otros_40',
						'otros_41',
						'otros_42',
						'otros_43',
						'otros_44',
						'otros_45',
						'otros_46',
						'otros_47',
						'alterac',
						'hermano',
						'her_vivo',
						'num_hijo',
						'hijo_viv',
						'Antece_Fami_demencia',
						'Parentesco_Fami_demencia',
						'Nombre_Fami_demencia',
						'Edad_Fami_demencia',
						'IF_muerte',
						'Muerte_causa',
						'Muerte_prefectura',
						'Muerte_Velado',
						'Habilid',
						'compras',
						'prep_ali',
						'tar_dome',
						'lavar',
						'transp',
						'resp_med',
						'finanza',
						'total_la',
						'higiene',
						'cap_alim',
						'vestirse',
						'arreglar',
						'deambul',
						'banarse',
						'tot_auto',
						'tot_glob'             
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
       $query->join('patient as p','p.patient_id','family_interview.patient_id');
       
	      if(trim($search)) {
	        
	        return $query->where('p.hist_id', 'LIKE', "%$search%")
	                     ->orWhere(\DB::RAW("CONCAT_WS(' ',p.first_name, p.second_name, p.last_name, p.second_last_name) "), 'LIKE', "%$search%");
	      }
      
    }
}
