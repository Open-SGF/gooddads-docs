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
        Schema::create('participant_healthy_marriage_and_fatherhood_survey', function (Blueprint $table) {

            $table->uuid('id')->primary();
            $table->foreignUuid('participant_id')->constrained(indexName: 'healthy_marriage_fatherhood_survey_participant_id');


            $table->date('date_of_birth')->nullable();
            $table->string('fatherhood_program')->default('Good Dads');
            $table->boolean('reason_become_responsible_father')->default(false);
            $table->boolean('reason_referred')->default(false);
            $table->boolean('reason_court_ordered')->default(false);
            $table->boolean('reason_address_child_support_concerns')->default(false);
            $table->boolean('reason_other');
            $table->string('reason_other_description')->nullable();
            $table->boolean('referred_by_word_of_mouth')->default(false);
            $table->boolean('referred_by_past_participant')->default(false);
            $table->boolean('referred_by_family_support_division')->default(false);
            $table->boolean('referred_by_prosecuting_attorney')->default(false);
            $table->boolean('referred_by_marketing')->default(false);
            // Verify if this organization is good dads
            $table->boolean('referred_by_organization_itself')->default(false);
            $table->boolean('referred_by_other')->default(false);
            $table->string('referred_by_other_source')->nullable();
            $table->boolean('employment_opportunities_expected')->default(false);
            $table->boolean('assistance_with_alcohol_abuse_expected')->default(false);
            $table->boolean('increased_emphasis_on_parenting_skills_expected')->default(false);
            $table->boolean('access_to_mentors_resources_outside_program_expected')->default(false);
            $table->boolean('resume_building_skills_expected')->default(false);
            $table->boolean('free_legal_services_expected')->default(false);
            $table->boolean('assistance_with_criminal_history_expected')->default(false);
            $table->boolean('assistance_with_credit_repair_expected')->default(false);
            $table->boolean('assistance_with_overcoming_homelessness_expected')->default(false);
            $table->boolean('assistance_with_visitation_custody_expected')->default(false);
            $table->boolean('increased_understanding_of_child_support_issues_expected')->default(false);
            $table->boolean('maintaining_hope_for_the_future_expected')->default(false);
            $table->boolean('help_obtaining_information_about_health_wellness_expected')->default(false);
            $table->boolean('other_expected')->default(false);
            $table->string('other_expectations_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participant_healthy_marriage_introductory_survey');
    }
};
