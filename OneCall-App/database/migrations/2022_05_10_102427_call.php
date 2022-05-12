<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Call extends Migration
{
    public function up()
    {
        Schema::create('call',function(Blueprint $table){
            $table->increments('id');
            $table->integer('account_id');
            $table->integer('emergency_id');
            $table->timestamps();

        });
    }
    public function down()
    {
        Schema::dropIfExists('call');
    }
};
