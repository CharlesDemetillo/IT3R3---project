<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cmessage extends Migration
{
    public function up()
    {
        Schema::create('cmessage',function(Blueprint $table){
            $table->increments('id');
            $table->integer('account_id');
            $table->integer('contact_id');
            $table->timestamps();
        });
    }  
    public function down()
    {
        Schema::dropIfExists('cmessage');
    }
};
