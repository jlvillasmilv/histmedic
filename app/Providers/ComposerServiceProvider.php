<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class ComposerServiceProvider extends ServiceProvider
{

    public function boot()
    {
        View::composer('zung.form',   'App\Http\ViewComposers\ZungComposer');
        View::composer('patient.patient', 'App\Http\ViewComposers\PatientComposer');
    }

    public function register()
    {
        //
    }

}
