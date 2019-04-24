<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Projects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects',function(Blueprint $table){
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('naziv_projekta');
            $table->string('opis_projekta');
            $table->string('cijena_projekta');
            $table->string('obavljeni_poslovi');
            $table->string('datum_početka');
            $table->string('datum_završetka');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('projects');
    }
}
