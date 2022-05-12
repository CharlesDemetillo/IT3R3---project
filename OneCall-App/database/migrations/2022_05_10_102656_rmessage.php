<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Rmessage extends Migration
{
    public function up()
    {
        Schema::create('rmessage',function(Blueprint $table){
            $table->increments('id');
            $table->integer('emergency_id');
            $table->integer('response_id');
            $table->timestamps();
        });
    }  
    public function down()
    {
        Schema::dropIfExists('rmessage');
    }
};
