<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormatDocTable extends Migration
{
    
    public function up()
    {
        Schema::create('format_doc', function (Blueprint $table) {
            $table->increments('format_doc_id');
            $table->string('name',150)->unique();
            $table->string('cod_doc',25)->unique();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->softDeletes();

        });
    }

   
    public function down()
    {
        Schema::dropIfExists('format_doc');
    }
}
