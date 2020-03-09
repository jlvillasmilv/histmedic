<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateLabRpView extends Migration
{
   
    public function up()
    {
         DB::statement(" CREATE VIEW lab_rp AS 
                           select p.hist_id as Hist_ID,CONCAT(p.first_name,' ',p.last_name) as LT_Patient,
             p.gender as LT_Sex, DATE_FORMAT(p.date_birth,'%m/%d/%Y') as LT_DOB,
           DATE_FORMAT(z.date_evaluation ,'%m/%d/%Y')AS Fecha_Laboratory,
                                SUM(CASE WHEN fd.var = 'LRP1' THEN ap.`value` END) AS wbc,
                SUM(CASE WHEN fd.var = 'LRP2' THEN ap.`value` END) AS lym,
                                SUM(CASE WHEN fd.var = 'LRP3' THEN ap.`value` END) AS mid,
                SUM(CASE WHEN fd.var = 'LRP4' THEN ap.`value` END) AS gran,
                SUM(CASE WHEN fd.var = 'LRP5' THEN ap.`value` END) AS rbc,
                SUM(CASE WHEN fd.var = 'LRP6' THEN ap.`value` END) AS hgb,
                SUM(CASE WHEN fd.var = 'LRP7' THEN ap.`value` END) AS hct,
                SUM(CASE WHEN fd.var = 'LRP8' THEN ap.`value` END) AS mcv,
                SUM(CASE WHEN fd.var = 'LRP9' THEN ap.`value` END) AS mch,
                SUM(CASE WHEN fd.var = 'LRP10' THEN ap.`value`  END) AS mchc,
                SUM(CASE WHEN fd.var = 'LRP11' THEN ap.`value`  END) AS rdw,
                SUM(CASE WHEN fd.var = 'LRP12' THEN ap.`value`  END) AS plt,
                SUM(CASE WHEN fd.var = 'LRP13' THEN ap.`value`  END) AS glucosa,
                SUM(CASE WHEN fd.var = 'LRP14' THEN ap.`value`  END) AS bun,
                SUM(CASE WHEN fd.var = 'LRP15' THEN ap.`value`  END) AS creatini,
                SUM(CASE WHEN fd.var = 'LRP16' THEN ap.`value`  END) AS colester,
                SUM(CASE WHEN fd.var = 'LRP17' THEN ap.`value`  END) AS ldl_cole,
                SUM(CASE WHEN fd.var = 'LRP18' THEN ap.`value`  END) AS hdl_cole,
                SUM(CASE WHEN fd.var = 'LRP19' THEN ap.`value`  END) AS triglice,
                SUM(CASE WHEN fd.var = 'LRP20' THEN ap.`value`  END) AS acido_ur,
                                SUM(CASE WHEN fd.var = 'LRP21' THEN ap.`value`  END) AS total_pr,
                                CONCAT(p.first_name,' ',p.last_name) as Hcy_Nombre,
                                p.hist_id as HistID,
                                GROUP_CONCAT(CASE WHEN fd.var = 'LRP22' THEN DATE_FORMAT(ap.`value`,'%m/%d/%Y') END) AS Hcy_Fecha,
                                SUM(CASE WHEN fd.var = 'LRP23' THEN ap.`value`  END) AS Hcy_Nlaboratorio,
                                SUM(CASE WHEN fd.var = 'LRP24' THEN ap.`value`  END) AS Hcy_Hcy,
                                SUM(CASE WHEN fd.var = 'LRP25' THEN ap.`value`  END) AS Hcy_VitB12,
                                SUM(CASE WHEN fd.var = 'LRP26' THEN ap.`value`  END) AS Hcy_Folato
                       from answer_pacient ap
                        INNER JOIN format_det fd on ap.format_det_id = fd.format_det_id
                        INNER JOIN register_format z on z.register_id =ap.register_format_id
                        INNER JOIN patient p on p.patient_id = z.patient_id
                                                where ISNULL(z.deleted_at) and fd.var like 'LRP%'  
                        GROUP BY z.register_id ");

    }

  
    public function down()
    {
        DB::statement("DROP VIEW lab_rp");
    }
}
