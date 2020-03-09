<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormat extends Migration
{
    
    public function up()
    {
        Schema::create('format', function (Blueprint $table) {
            $table->increments('format_id');
            $table->integer('cod_doc')->unsigned();
            $table->string('name',150);
            $table->longText('description');
            $table->string('version',40);
            $table->date('date_format');
            $table->char("status", 1)->default('1');   
            $table->integer('user_id')->unsigned();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->softDeletes();

            $table->foreign("user_id")->references("id")->on("users")->onDelete('cascade');

        });
    }

   
    public function down()
    {
        Schema::dropIfExists('format');
    }
}
