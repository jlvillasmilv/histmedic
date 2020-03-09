<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {

    	DB::statement('SET FOREIGN_KEY_CHECKS = 0');

    	$this->call(UsersSeeder::class);
    	$this->call(FormatSeeders::class);
    	$this->call(FormatDetSeeders::class);
    	DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    
    }
}
