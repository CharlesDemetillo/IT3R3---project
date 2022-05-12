<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Emergency extends Migration
{
    public function up()
    {
        Schema::create('emergency',function(Blueprint $table){
            $table->increments('id');
            $table->integer('account_id');
            $table->integer('response_id');
            $table->string('emergency_type');
            $table->string('location')->nullable();
            $table->integer('can_call');
            $table->integer('is_finish');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('emergency');
    }
};
