<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Responses extends Migration
{
    public function up()
    {
        Schema::create('response',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->bigInteger('contact_no');
            $table->string('email');
            $table->string('password');
            $table->string('logo_name')->nullable();
            $table->string('logo_path')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('response');
    }
};
