<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->longText('description');
            $table->string('name');
            $table->string('address');
            $table->string('whatsapp');
            $table->string('dob');
            $table->string('email');
            $table->string('skype');
            $table->string('hours');
            $table->string('projects');
            $table->string('years');
            $table->string('client');
            $table->string('my_img');
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
        Schema::dropIfExists('abouts');
    }
}
