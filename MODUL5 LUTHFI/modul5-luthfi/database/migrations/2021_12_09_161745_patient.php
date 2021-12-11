<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Patient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id')->length(20)->unsigned();
            $table->bigInteger('vaccine_id')->length(20)->unsigned();
            $table->string('name', 255);
            $table->string('nik', 255);
            $table->string('alamat', 255);
            $table->string('image_ktp', 255);
            $table->string('no_hp', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('patients');
    }
}
