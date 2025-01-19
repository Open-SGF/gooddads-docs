<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('participant_individualized_service_plan', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('participant_id')->constrained(indexName: 'participant_id');

            $table->string('participant_name');
            $table->string('client_number');
            $table->date('review_date');
            $table->boolean('parenting_skill_development_is_service_area')->default(true);
            $table->boolean('effective_co_parenting_is_service_area')->default(true);
            $table->boolean('employment_and_education_is_service_area')->default(true);
            $table->boolean('child_support_is_service_area')->default(true);
            $table->boolean('domestic_violence_is_service_area')->default(true);
            $table->string('service_identified_by_participant')->nullable();
            $table->text('goal');
            $table->text('custody_visitation_strategy');
            $table->string('custody_visitation_person_responsible');
            $table->string('custody_visitation_timeline');
            $table->text('custody_visitation_measure_of_success');
            $table->text('education_employment_strategy');
            $table->string('education_employment_person_responsible');
            $table->string('education_employment_timeline');
            $table->text('education_employment_measure_of_success');
            $table->text('housing_transportation_strategy');
            $table->string('housing_transportation_person_responsible');
            $table->string('housing_transportation_timeline');
            $table->text('housing_transportation_measure_of_success');
            // Potentially need "Child Support Action Goal" fields, confirming with client
            $table->string('participant_signature');
            $table->date('participant_signature_date');
            $table->string('case_manager_signature');
            $table->date('case_manager_signature_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participant_individualized_service_plan');
    }
};
