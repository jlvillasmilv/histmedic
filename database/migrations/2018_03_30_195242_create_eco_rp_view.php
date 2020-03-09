<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateEcoRpView extends Migration
{
    
    public function up()
    {
       DB::statement(" CREATE VIEW eco_rp AS 
                           select DATE_FORMAT(z.date_evaluation ,'%m/%d/%Y')AS Fecha_eco,
                                CONCAT(p.first_name,' ',p.last_name) as Nombre_eco,
                                p.cedula as Cedula_eco, p.hist_id as Hist_ID,
                                ph.bw as Peso_eco, ph.bh as Talla_eco,
                                TIMESTAMPDIFF(YEAR,p.date_birth,z.date_evaluation) AS Edad_eco,
                                SUM(CASE WHEN fd.var = 'ERP1' THEN ap.`value` END) AS Neco_eco,
                SUM(CASE WHEN fd.var = 'ERP2' THEN ap.`value` END) AS HC,
                                GROUP_CONCAT(CASE WHEN fd.var = 'ERP3' THEN ap.`value` END) AS Referido_eco,
                SUM(CASE WHEN fd.var = 'ERP4' THEN ap.`value` END) AS Aorta_eco,
                SUM(CASE WHEN fd.var = 'ERP5' THEN ap.`value` END) AS Sept_diast_eco,
                SUM(CASE WHEN fd.var = 'ERP6' THEN ap.`value` END) AS VId_diast_eco,
                SUM(CASE WHEN fd.var = 'ERP7' THEN ap.`value` END) AS Vid_sist_eco,
                SUM(CASE WHEN fd.var = 'ERP8' THEN ap.`value` END) AS PPVI_diast_eco,
                SUM(CASE WHEN fd.var = 'ERP9' THEN ap.`value` END) AS Auriculaiz_eco,
                SUM(CASE WHEN fd.var = 'ERP10' THEN ap.`value`  END) AS Auri_sist_eco,
                SUM(CASE WHEN fd.var = 'ERP11' THEN ap.`value`  END) AS VentDer_eco,
                SUM(CASE WHEN fd.var = 'ERP12' THEN ap.`value`  END) AS Auri_Sist2_eco,
                SUM(CASE WHEN fd.var = 'ERP13' THEN ap.`value`  END) AS VI_TE_eco,
                SUM(CASE WHEN fd.var = 'ERP14' THEN ap.`value`  END) AS VI_PPE_eco,
                SUM(CASE WHEN fd.var = 'ERP15' THEN ap.`value`  END) AS VI_RR_eco,
                SUM(CASE WHEN fd.var = 'ERP16' THEN ap.`value`  END) AS VI_PPETE_eco,
                SUM(CASE WHEN fd.var = 'ERP17' THEN ap.`value`  END) AS VD_TE_eco,
                SUM(CASE WHEN fd.var = 'ERP18' THEN ap.`value`  END) AS VD_PPE_eco,
                SUM(CASE WHEN fd.var = 'ERP19' THEN ap.`value`  END) AS VD_RR_eco,
                SUM(CASE WHEN fd.var = 'ERP20' THEN ap.`value`  END) AS VD_PPETE_eco,
                                SUM(CASE WHEN fd.var = 'ERP21' THEN ap.`value`  END) AS AperAo_eco,
                                SUM(CASE WHEN fd.var = 'ERP22' THEN ap.`value`  END) AS Exc_mitral_eco,
                                SUM(CASE WHEN fd.var = 'ERP23' THEN ap.`value`  END) AS EF_eco,
                                SUM(CASE WHEN fd.var = 'ERP24' THEN ap.`value`  END) AS QCM_eco,
                                SUM(CASE WHEN fd.var = 'ERP25' THEN ap.`value`  END) AS Pul_eco,
                                SUM(CASE WHEN fd.var = 'ERP26' THEN ap.`value`  END) AS Tricuspide_eco,
                                SUM(CASE WHEN fd.var = 'ERP27' THEN ap.`value`  END) AS VDF_eco,
                                SUM(CASE WHEN fd.var = 'ERP28' THEN ap.`value`  END) AS VSF_eco,
                                SUM(CASE WHEN fd.var = 'ERP29' THEN ap.`value`  END) AS VL_eco,
                                SUM(CASE WHEN fd.var = 'ERP30' THEN ap.`value`  END) AS FE_eco,
                                SUM(CASE WHEN fd.var = 'ERP31' THEN ap.`value`  END) AS FacPer_eco,
                                SUM(CASE WHEN fd.var = 'ERP32' THEN ap.`value`  END) AS Masa_eco,
                                SUM(CASE WHEN fd.var = 'ERP33' THEN ap.`value`  END) AS Dop_mit_e_eco,
                                SUM(CASE WHEN fd.var = 'ERP34' THEN ap.`value`  END) AS Dop_mit_a_eco,
                                SUM(CASE WHEN fd.var = 'ERP35' THEN ap.`value`  END) AS Dop_mit_tac_eco,
                                SUM(CASE WHEN fd.var = 'ERP36' THEN ap.`value`  END) AS Dop_mit_tdec_eco,
                                SUM(CASE WHEN fd.var = 'ERP37' THEN ap.`value`  END) AS Dop_mit_tto_eco,
                                SUM(CASE WHEN fd.var = 'ERP38' THEN ap.`value`  END) AS Dop_mit_tva_eco,
                                SUM(CASE WHEN fd.var = 'ERP39' THEN ap.`value`  END) AS Dop_tric_e_eco,
                                SUM(CASE WHEN fd.var = 'ERP40' THEN ap.`value`  END) AS Dop_tric_a_eco,
                                SUM(CASE WHEN fd.var = 'ERP41' THEN ap.`value`  END) AS Dop_tric_tac_eco,
                                SUM(CASE WHEN fd.var = 'ERP42' THEN ap.`value`  END) AS Dop_tric_tdec_eco,
                                SUM(CASE WHEN fd.var = 'ERP43' THEN ap.`value`  END) AS Dop_tric_tto_eco,
                                SUM(CASE WHEN fd.var = 'ERP44' THEN ap.`value`  END) AS Dop_tric_tva_eco,
                                SUM(CASE WHEN fd.var = 'ERP45' THEN ap.`value`  END) AS Ao_vmax_eco,
                                SUM(CASE WHEN fd.var = 'ERP46' THEN ap.`value`  END) AS Ao_ta_eco,
                                SUM(CASE WHEN fd.var = 'ERP47' THEN ap.`value`  END) AS Ao_tdec_eco,
                                SUM(CASE WHEN fd.var = 'ERP48' THEN ap.`value`  END) AS Ao_tvi_eco,
                                SUM(CASE WHEN fd.var = 'ERP49' THEN ap.`value`  END) AS Pulm_vmax_eco,
                                SUM(CASE WHEN fd.var = 'ERP50' THEN ap.`value`  END) AS Pulm_ta_eco,
                                SUM(CASE WHEN fd.var = 'ERP51' THEN ap.`value`  END) AS Pulm_tdec_eco,
                                SUM(CASE WHEN fd.var = 'ERP52' THEN ap.`value`  END) AS Pulm_tvi_eco,
                                SUM(CASE WHEN fd.var = 'ERP53' THEN ap.`value`  END) AS Moti_eco,
                                GROUP_CONCAT(CASE WHEN fd.var = 'ERP54' THEN ap.`value`  END) AS Conc1_eco,
                                GROUP_CONCAT(CASE WHEN fd.var = 'ERP55' THEN ap.`value`  END) AS Conc2_eco,
                                GROUP_CONCAT(CASE WHEN fd.var = 'ERP56' THEN ap.`value`  END) AS Conc3_eco,
                                GROUP_CONCAT(CASE WHEN fd.var = 'ERP57' THEN ap.`value`  END) AS Conc4_eco,
                                GROUP_CONCAT(CASE WHEN fd.var = 'ERP58' THEN ap.`value`  END) AS Conc5_eco,
                                GROUP_CONCAT(CASE WHEN fd.var = 'ERP59' THEN ap.`value`  END) AS Conc6_eco
                       from answer_pacient ap
                        INNER JOIN format_det fd on ap.format_det_id = fd.format_det_id
                        INNER JOIN register_format z on z.register_id =ap.register_format_id
                        INNER JOIN patient p on p.patient_id = z.patient_id
                                                LEFT JOIN patient_hist ph on ph.register_id = z.register_id
                                                where ISNULL(z.deleted_at) and fd.var like 'ERP%' 
                        GROUP BY z.register_id ");
    }

    
    public function down()
    {
        DB::statement("DROP VIEW zung");
    }
}
