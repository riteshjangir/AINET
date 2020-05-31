<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('name_of_institution');
            $table->string('classes');
            $table->string('qualification');
            $table->string('teaching_experience');
            $table->string('email');
            $table->string('mobile_no');
            $table->string('whatsapp_no');
            $table->string('twitter_handle');
            $table->text('que_one');
            $table->string('que_two');
            $table->string('que_three');
            $table->string('que_four');
            $table->string('que_five');
            $table->string('que_six');
            $table->text('que_seven');
            $table->string('que_eight');
            $table->string('que_nine_a');
            $table->string('que_nine_b');
            $table->string('que_nine_c');
            $table->string('que_nine_d');
            $table->string('que_nine_e');
            $table->string('que_nine_f');
            $table->text('que_ten');
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
        Schema::dropIfExists('interests');
    }
}

