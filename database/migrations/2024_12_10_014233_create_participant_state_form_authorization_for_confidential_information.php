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
        Schema::create('participant_state_confidential_release', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('participant_id')->constrained();

            $table->string('consumer_name');
            $table->boolean('dss_authorized');
            $table->boolean('fys_authorized');
            $table->boolean('mhd_authorized');
            $table->boolean('dfas_authorized');
            $table->boolean('mmac_authorized');
            $table->boolean('fsd_authorized');
            $table->boolean('cd_authorized');
            $table->boolean('dls_authorized');
            $table->string('other_authorized_entity')->nullable();
            $table->string('disclosure_entity_name');
            $table->string('disclosure_entity_phone');
            $table->date('disclosure_entity_dob');
            $table->string('disclosure_entity_ssn')->nullable();
            $table->string('disclosure_entity_address');
            $table->string('disclosure_entity_email')->nullable();
            $table->boolean('disclosed_to_attorney');
            $table->string('disclosed_to_attorney_name')->nullable();
            $table->boolean('disclosed_to_employer');
            $table->string('disclosed_to_employer_name')->nullable();
            $table->boolean('disclosed_to_legislator');
            $table->string('disclosed_to_legislator_name')->nullable();
            $table->boolean('disclosed_to_governors_staff_recipient');
            $table->string('other_recipient_details')->nullable();
            $table->boolean('eligibility_determination_is_purpose');
            $table->boolean('legal_consultation_is_purpose');
            $table->boolean('legal_proceedings_is_purpose');
            $table->boolean('employment_is_purpose');
            $table->boolean('complaint_investigation_is_purpose');
            $table->boolean('treatment_planning_is_purpose');
            $table->boolean('continuity_of_services_is_purpose');
            $table->boolean('background_investigation_is_purpose');
            $table->boolean('at_consumers_request_is_purpose');
            $table->boolean('share_and_refer_is_purpose');
            $table->boolean('other_is_purpose');
            $table->boolean('other_purpose_name');
            $table->boolean('entire_file_to_be_disclosed');
            $table->boolean('licensure_information_to_be_disclosed');
            $table->boolean('medical_psychiatric_records_to_be_disclosed');
            $table->boolean('hotline_investigations_to_be_disclosed');
            $table->boolean('home_studies_to_be_disclosed');
            $table->boolean('eligibility_determinations_to_be_disclosed');
            $table->boolean('substance_abuse_treatment_to_be_disclosed');
            $table->boolean('client_employment_records_to_be_disclosed');
            $table->boolean('benefits_received_to_be_disclosed');
            $table->boolean('other_information_to_be_disclosed');
            $table->string('other_information_disclosure_details')->nullable();
            $table->boolean('accept_text_messages')->nullable();
            $table->string('signature_of_consumer');
            $table->date('date_of_signature');
            $table->string('witness_signature')->nullable();
            $table->date('witness_signature_date')->nullable();
            $table->string('parent_guardian_representative_signature')->nullable();
            $table->date('parent_guardian_representative_signature_date')->nullable();
            $table->boolean('survey_delivery_by_email');
            $table->boolean('survey_delivery_by_address');
            $table->boolean('survey_delivery_by_online');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participant_state_form_authorization_for_confidential_information');
    }
};
