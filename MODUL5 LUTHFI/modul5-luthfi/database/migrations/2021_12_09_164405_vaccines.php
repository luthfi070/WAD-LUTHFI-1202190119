<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vaccines extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        schema::create('vaccines', function(Blueprint $table){
            $table->bigIncrements('id')->length(20)->unsigned();
            $table->string('name', 255);
            $table->string('price', 255);
            $table->string('description', 550);
            $table->string('image', 255);
        });
    }
// 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        schema::drop('vaccines');
    }
}
