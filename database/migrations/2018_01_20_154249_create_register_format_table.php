<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterFormatTable extends Migration
{
    
    public function up()
    {
        Schema::create('register_format', function (Blueprint $table) {
            $table->increments('register_id');
            $table->integer('format_id')->unsigned();
            $table->integer('patient_id')->unsigned()->nullable();
            $table->date('date_evaluation')->comment('Fecha de evaluacion');
            $table->integer('user_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->index('register_id', 'register_id_idx');
            $table->index('format_id', 'format_id_idx');
            $table->index('patient_id', 'patient_id_idx');

            $table->foreign("patient_id")->references("patient_id")->on("patient")->onDelete('cascade');
            $table->foreign("user_id")->references("id")->on("users")->onDelete('cascade');

        });
    }

  
    public function down()
    {
        Schema::dropIfExists('register_format');
    }
}
