<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Status extends Migration
{
    public function up()
    {
        Schema::create('status',function(Blueprint $table){
            $table->increments('id');
            $table->integer('emergency_id');
            $table->integer('response_id');
            $table->string('status');
            $table->timestamps();

        });
    }  
    public function down()
    {
        Schema::dropIfExists('status');
    }
};
