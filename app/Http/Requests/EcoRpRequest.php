<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EcoRpRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
       return [
           'patient_id'     => 'required|integer',
           'Fecha_eco'      => 'required|date',
           'Peso_eco'       => 'nullable|numeric',
           'Talla_eco'      => 'nullable|numeric',
           'Neco_eco'       => 'nullable|numeric',
           'Referido_eco'   => 'nullable|max:75',
           'Aorta_eco'      => 'nullable|numeric',
           'Sept_diast_eco' => 'nullable|numeric',
           'VId_diast_eco'  => 'nullable|numeric',
           'Vid_sist_eco'   => 'nullable|numeric',
           'PPVI_diast_eco' => 'nullable|numeric',
           'Auriculaiz_eco' => 'nullable|numeric',
           'Auri_sist_eco'  => 'nullable|numeric',
           'VentDer_eco'    => 'nullable|numeric',
           'Auri_Sist2_eco' => 'nullable|numeric',
           'VI_TE_eco'      => 'nullable|numeric',
           'VI_PPE_eco'     => 'nullable|numeric',
           'VI_RR_eco'      => 'nullable|numeric',
           'VI_PPETE_eco'   => 'nullable|numeric',
           'VD_TE_eco'      => 'nullable|numeric',
           'VD_PPE_eco'     => 'nullable|numeric',
           'VD_RR_eco'      => 'nullable|numeric',
           'VD_PPETE_eco'   => 'nullable|numeric',
           'AperAo_eco'     => 'nullable|numeric',
           'Exc_mitral_eco' => 'nullable|numeric',
           'EF_eco'         => 'nullable|numeric',
           'QCM_eco'        => 'nullable|numeric',
           'Pul_eco'        => 'nullable|numeric',
           'Tricuspide_eco' => 'nullable|numeric',
           'VDF_eco'        => 'nullable|numeric',
           'VSF_eco'        => 'nullable|numeric',
           'VL_eco'         => 'nullable|numeric',
           'FE_eco'         => 'nullable|numeric',
           'FacPer_eco'     => 'nullable|numeric',
           'Masa_eco'       => 'nullable|numeric',
           'Dop_mit_e_eco'  => 'nullable|numeric',
           'Dop_mit_a_eco'  => 'nullable|numeric',
           'Dop_mit_tac_eco'   => 'nullable|numeric',
           'Dop_mit_tdec_eco'  => 'nullable|numeric',
           'Dop_mit_tto_eco'   => 'nullable|numeric',
           'Dop_mit_tva_eco'   => 'nullable|numeric',
           'Dop_tric_e_eco'    => 'nullable|numeric',
           'Dop_tric_a_eco'    => 'nullable|numeric',
           'Dop_tric_tac_eco'  => 'nullable|numeric',
           'Dop_tric_tdec_eco' => 'nullable|numeric',
           'Dop_tric_tto_eco'  => 'nullable|numeric',
           'Dop_tric_tva_eco'  => 'nullable|numeric',
           'Ao_vmax_eco'       => 'nullable|numeric',
           'Ao_ta_eco'         => 'nullable|numeric',
           'Ao_tdec_eco'       => 'nullable|numeric',
           'Ao_tvi_eco'        => 'nullable|numeric',
           'Pulm_vmax_eco'     => 'nullable|numeric',
           'Pulm_ta_eco'       => 'nullable|numeric',
           'Pulm_tdec_eco'     => 'nullable|numeric',
           'Pulm_tvi_eco'      => 'nullable|numeric',
           'Moti_eco'          => 'nullable|numeric',
           'Conc1_eco'         => 'nullable|max:75',
           'Conc2_eco'         => 'nullable|max:75',
           'Conc3_eco'         => 'nullable|max:75',
           'Conc4_eco'         => 'nullable|max:75',
           'Conc5_eco'         => 'nullable|max:75',
           'Conc6_eco'         => 'nullable|max:75',
        ];
    }
}
