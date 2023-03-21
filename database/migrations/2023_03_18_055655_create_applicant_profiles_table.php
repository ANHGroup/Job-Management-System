<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('phone');
            $table->string('present_address');
            $table->string('parmanent_address');
            $table->string('dob');
            $table->string('expected_salary');
            $table->string('present_salary');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('education_id');
            $table->foreign('education_id')
                ->references('id')
                ->on('education')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('experience_id');
            $table->foreign('experience_id')
                ->references('id')
                ->on('experiences')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('gender');
            $table->string('skill');
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
        Schema::dropIfExists('applicant_profiles');
    }
};
