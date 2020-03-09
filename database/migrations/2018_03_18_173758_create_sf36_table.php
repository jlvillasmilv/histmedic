<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSf36Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sf36', function (Blueprint $table) {
            $table->increments('sf36_id');
            $table->integer('patient_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->date('datsf36')->comment('Fecha de evaluacion de DATSF36');
            $table->string('sf_encuestador',100)->nullable()->comment('Numero de idendificacion del encuestador');
            $table->tinyInteger('sf1');
            $table->tinyInteger('sf2');
            $table->tinyInteger('sf3');
            $table->tinyInteger('sf4');
            $table->tinyInteger('sf5');
            $table->tinyInteger('sf6');
            $table->tinyInteger('sf7');
            $table->tinyInteger('sf8');
            $table->tinyInteger('sf9');
            $table->tinyInteger('sf10');
            $table->tinyInteger('sf11');
            $table->tinyInteger('sf12');
            $table->tinyInteger('sf13');
            $table->tinyInteger('sf14');
            $table->tinyInteger('sf15');
            $table->tinyInteger('sf16');
            $table->tinyInteger('sf17');
            $table->tinyInteger('sf18');
            $table->tinyInteger('sf19');
            $table->tinyInteger('sf20');
            $table->tinyInteger('sf21');
            $table->tinyInteger('sf22');
            $table->tinyInteger('sf23');
            $table->tinyInteger('sf24');
            $table->tinyInteger('sf25');
            $table->tinyInteger('sf26');
            $table->tinyInteger('sf27');
            $table->tinyInteger('sf28');
            $table->tinyInteger('sf29');
            $table->tinyInteger('sf30');
            $table->tinyInteger('sf31');
            $table->tinyInteger('sf32');
            $table->tinyInteger('sf33');
            $table->tinyInteger('sf34');
            $table->tinyInteger('sf35');
            $table->tinyInteger('sf36');

            $table->index('patient_id', 'patient_id_idx');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign("patient_id")->references("patient_id")->on("patient")->onDelete('cascade');
            $table->foreign("user_id")->references("id")->on("users")->onDelete('cascade');
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('sf36');
    }
}
