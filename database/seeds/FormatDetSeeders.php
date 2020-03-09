<?php

use Illuminate\Database\Seeder;

class FormatDetSeeders extends Seeder
{
    
    public function run()
    {
        
        $filename = dirname(__FILE__) . '/static information/format_det.json';

        $file = file_get_contents($filename);
        $items = json_decode($file, true);

        foreach ($items as $value)
        {	
		    $item = [
		    	"format_det_id" 	=> $value["format_det_id"],
			    "format_id" 		=> $value["format_id"],
			    "num" 		=> $value["num"],
			    "title" 		=> $value["title"],
			    "var" 		=> $value["var"],
			    "value" 		=> $value["value"],

		    ];

        	\DB::table('format_det')->insert($item);

        }
    }
}