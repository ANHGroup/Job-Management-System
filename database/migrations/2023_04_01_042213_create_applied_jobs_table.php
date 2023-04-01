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
        Schema::create('applied_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('salary')->nullable();
            $table->unsignedBigInteger('applicant_id')->nullable();
            $table->foreign('applicant_id')
                ->references('id')
                ->on('applicant_profiles')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('job_id')->nullable();
            $table->foreign('job_id')
                ->references('id')
                ->on('jobs')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
        Schema::dropIfExists('applied_jobs');
    }
};
