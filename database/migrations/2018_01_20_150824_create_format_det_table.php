<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormatDetTable extends Migration
{
    
    public function up()
    {
        Schema::create('format_det', function (Blueprint $table) {
            $table->increments('format_det_id');
            $table->integer('format_id')->unsigned();
            $table->tinyInteger('num')->nullable();
            $table->string('title',150);
            $table->string('var',20);
            $table->string('value',20);
            $table->timestamps();

            $table->foreign("format_id")->references("format_id")->on("format")->onDelete('cascade');
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('format_det');
    }
}
