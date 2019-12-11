<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('patient_id')->nullable();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');

            $table->string('demography_status')->default(\App\Models\Application::DEMOGRAPHY_STATUS_OPEN);
            $table->string('demography_education');
            $table->string('demography_employment');
            $table->string('demography_digital_apps');
            $table->string('demography_social_media');
            $table->string('demography_patient_communities');
            $table->string('demography_nutrition');
            $table->string('demography_mobility');


            $table->string('diabetes_quality_of_life_status');

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
        Schema::dropIfExists('applications');
    }
}
