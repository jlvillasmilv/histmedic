<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
   
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100)->unique();
            $table->string('user_name',50);
            $table->string('email',150)->unique();
            $table->string('password');
            $table->char("type", 1)->default('C');  
            $table->char("status", 1)->default('1');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

            $table->index('user_name', 'user_name_idx');

        });
    }

    
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
