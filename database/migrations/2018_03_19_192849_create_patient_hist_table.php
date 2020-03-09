<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientHistTable extends Migration
{
    
    public function up()
    {
        Schema::create('patient_hist', function (Blueprint $table) {
            $table->increments('patient_hist_id');
            $table->integer('patient_id')->unsigned();
            $table->integer('register_id')->unsigned()->nullable();
            $table->date('date_evaluation')->nullable()->comment('Fecha de evaluacion');
            $table->string('bw',6)->default('0,00')->comment('Peso');
            $table->string('bh',5)->default('0,00')->comment('talla');
            $table->enum('education_grade', ['A','B','C','D','E'])->default('B')->comment('Grado de instruccion a = analfabeta; b = leer y escribir; c = Primaria; d = secundaria; e = estudios Universitarios');

            $table->index('patient_id', 'patient_id_idx');

            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->softDeletes();

             $table->foreign("patient_id")->references("patient_id")->on("patient")->onDelete('cascade');
             $table->foreign("register_id")->references("register_id")->on("register_format");
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('patient_hist');
    }
}
