<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contact extends Migration
{
    public function up()
    {
        Schema::create('contact',function(Blueprint $table){
            $table->increments('id');
            $table->integer('account_id');
            $table->string('name');
            $table->bigInteger('contact_no');
            $table->string('relationship_to_user');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('contact');
    }
};
