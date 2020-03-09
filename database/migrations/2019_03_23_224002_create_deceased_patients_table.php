<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeceasedPatientsTable extends Migration
{
    
    public function up()
    {
        Schema::create('deceased_patients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('nom_infor',150)->comment('Nombre del informante');
            $table->string('parentesco',150)->nullable()->comment('Parentesco  del informante');
            $table->integer('ed_morte',3)->comment('Edad de muerte');
            $table->date('fech_morte')->comment('Fecha de muerte');
            $table->string('lug_morte',150)->comment('Lugar de muerte');
            $table->string('caus_morte',150)->comment('Causa de muerte');
            $table->string('lug_vela',150)->nullable()->comment('Lugar del velatorio');
            $table->date('fech_entrev')->comment('Fecha de aplicación de la entrevista');
            $table->string('entrevistador',150)->nullable()->comment('entrevistador');
            $table->string('Obs_Hist_Fallecido',150)->nullable()->comment('Observaciones');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->ondelete('cascade')->onUpdate('cascade');
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('deceased_patients');
    }
}
