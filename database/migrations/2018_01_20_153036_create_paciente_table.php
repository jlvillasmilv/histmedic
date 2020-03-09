<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacienteTable extends Migration
{
  
    public function up()
    {
        Schema::create('patient', function (Blueprint $table) {
            $table->increments('patient_id');
            $table->integer('hist_id')->unsigned()->unique();
            $table->enum("nac", ['V','E'])->default('V')->comment('V=Venezolano, E= Extranjero');
            $table->integer('cedula')->unsigned()->unique();
            $table->string('first_name',50);
            $table->string('second_name',50)->nullable()->comment('Segundo nombre del participante');
            $table->string('last_name',50);
            $table->string('second_last_name',50)->nullable()->comment('Segundo apellido del participante');
            $table->string('adress',150)->comment('Direccion');
            $table->date('date_birth')->comment('Fecha de Nacimiento');
            $table->string('state_country',100)->nullable()->comment('Estado de pais');
            $table->string('city_born',100)->nullable()->comment('Estado de pais');
            $table->enum('gender', ['F','M'])->default('M')->comment('Sexo F = Women. M = Men');
            $table->enum('ethnicity', ['0','1','2','3','4'])->comment('Raza 0= Mezclado, 1= Blanco, 2= Negro, 3= Indigena, 4= Asiatico.');
            $table->integer('user_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

             $table->foreign("user_id")->references("id")->on("users")->onDelete('cascade');
             $table->index('hist_id', 'hist_id_idx');
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('patient');
    }
}
