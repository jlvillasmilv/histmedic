<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswerPacientTable extends Migration
{
   
    public function up()
    {
        Schema::create('answer_pacient', function (Blueprint $table) {
            $table->increments('answer_id');
            $table->integer('register_format_id')->unsigned();
            $table->integer('format_det_id')->unsigned();
            $table->tinyInteger('value');
            $table->timestamps();
            $table->softDeletes();

            $table->index('answer_id', 'answer_id_idx');
            $table->index('register_format_id', 'register_format_id_idx');
            $table->index('format_det_id', 'format_det_id_idx');

            $table->foreign("register_format_id")->references("register_id")->on("register_format");
            $table->foreign("format_det_id")->references("format_det_id")->on("format_det")->onDelete('cascade');




        });
    }

  
    public function down()
    {
        Schema::dropIfExists('answer_pacient');
    }
}
