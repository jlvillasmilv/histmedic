<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateZungViewTable extends Migration
{
    
    public function up()
    {
         DB::statement(" CREATE VIEW zung AS 
                           select CONCAT(p.first_name,' ',p.last_name) as Nombre, p.hist_id as Hist_ID,DATE_FORMAT(z.date_evaluation ,'%m/%d/%Y')AS Fecha_zung,
                            SUM(CASE WHEN fd.var = 'Zung_1' THEN ap.`value` END) AS Zung_1,
                            SUM(CASE WHEN fd.var = 'Zung_2' THEN ap.`value` END) AS Zung_2,
                            SUM(CASE WHEN fd.var = 'Zung_3' THEN ap.`value` END) AS Zung_3,
                            SUM(CASE WHEN fd.var = 'Zung_4' THEN ap.`value` END) AS Zung_4,
                            SUM(CASE WHEN fd.var = 'Zung_5' THEN ap.`value` END) AS Zung_5,
                            SUM(CASE WHEN fd.var = 'Zung_6' THEN ap.`value` END) AS Zung_6,
                            SUM(CASE WHEN fd.var = 'Zung_7' THEN ap.`value` END) AS Zung_7,
                            SUM(CASE WHEN fd.var = 'Zung_8' THEN ap.`value` END) AS Zung_8,
                            SUM(CASE WHEN fd.var = 'Zung_9' THEN ap.`value` END) AS Zung_9,
                            SUM(CASE WHEN fd.var = 'Zung_10' THEN ap.`value`  END) AS Zung_10,
                            SUM(CASE WHEN fd.var = 'Zung_11' THEN ap.`value`  END) AS Zung_11,
                            SUM(CASE WHEN fd.var = 'Zung_12' THEN ap.`value`  END) AS Zung_12,
                            SUM(CASE WHEN fd.var = 'Zung_13' THEN ap.`value`  END) AS Zung_13,
                            SUM(CASE WHEN fd.var = 'Zung_14' THEN ap.`value`  END) AS Zung_14,
                            SUM(CASE WHEN fd.var = 'Zung_15' THEN ap.`value`  END) AS Zung_15,
                            SUM(CASE WHEN fd.var = 'Zung_16' THEN ap.`value`  END) AS Zung_16,
                            SUM(CASE WHEN fd.var = 'Zung_17' THEN ap.`value`  END) AS Zung_17,
                            SUM(CASE WHEN fd.var = 'Zung_18' THEN ap.`value`  END) AS Zung_18,
                            SUM(CASE WHEN fd.var = 'Zung_19' THEN ap.`value`  END) AS Zung_19,
                            SUM(CASE WHEN fd.var = 'Zung_20' THEN ap.`value`  END) AS Zung_20,
                            SUM(ap.`value`) as Total_zung,
                            ((SUM(ap.`value`)*100)/80) as EAD_indice
                        from answer_pacient ap
                        INNER JOIN format_det fd on ap.format_det_id = fd.format_det_id
                        INNER JOIN register_format z on z.register_id =ap.register_format_id
                        INNER JOIN patient p on p.patient_id = z.patient_id
                                                where ISNULL(z.deleted_at) and fd.var like '%Zung_%'
                        GROUP BY z.register_id ");

    }

  
    public function down()
    {
        DB::statement("DROP VIEW zung");
    }
}
