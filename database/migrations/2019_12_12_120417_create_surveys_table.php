<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid');
            $table->boolean('availability')->default(false);
            $table->string('camunda_identifier')->nullable();
            $table->integer('max_attempts')->nullable();
            $table->string('title');
            $table->longText('description')->nullable();
            $table->timestamps();
        });

        Schema::create('patient_survey', function (Blueprint $table) {
            $table->unsignedBigInteger('patient_id')->nullable();
            $table->string('status')->default(\App\Models\Survey::STATUS_OPEN);
            $table->integer('attempts')->default(0);
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->unsignedBigInteger('survey_id')->nullable();
            $table->foreign('survey_id')->references('id')->on('surveys')->onDelete('cascade');
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
        Schema::dropIfExists('patient_survey');
        Schema::dropIfExists('surveys');
    }
}
