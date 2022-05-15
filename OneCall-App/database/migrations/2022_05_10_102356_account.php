<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema; 

class Account extends Migration
{
    public function up()
    {
        Schema::create('account',function(Blueprint $table){
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('age');
            $table->bigInteger('contact_no');
            $table->string('address');
            $table->string('profile_name')->nullable();
            $table->string('profile_path')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('account');
    }
};
