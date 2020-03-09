<?php

use Illuminate\Database\Seeder;

class FormatSeeders extends Seeder
{
    
    public function run()
    {
        $filename = dirname(__FILE__) . '/static information/format.json';

        $file = file_get_contents($filename);
        $items = json_decode($file, true);

        foreach ($items as $value)
        {	
		    $item = [
		    	"format_id" 	=> $value["format_id"],
			    "name" 		=> $value["name"],
			    "description" 		=> $value["description"],
			    "version" 		=> $value["version"],
			    "date_format" 		=> $value["date_format"],
			    "status" 		=> $value["status"],
			    "user_id" 		=> $value["user_id"]

		    ];

        	\DB::table('format')->insert($item);
       }
   }
}
