<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use App\Zung;

class ZungComposer {

	public function compose(View $view)
	{
		
         $type = DB::select( DB::raw("SHOW COLUMNS FROM zung WHERE Field = 'Zung_1'") )[0]->Type;
		  preg_match('/^enum\((.*)\)$/', $type, $matches);
		  $option = array();
		  foreach( explode(',', $matches[1]) as $value )
		  {
		    $v = trim( $value, "'" );
		    $option = array_add($option, $v, $v);
		  }


		$view->with('option',  $option);
 

	}
}
