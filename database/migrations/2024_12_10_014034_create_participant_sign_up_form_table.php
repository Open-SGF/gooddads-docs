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
        Schema::create('participant_sign_up_form', function (Blueprint $table) {
            $table->uuid('id')->primary();
            // Currently Nullable, not sure if this is available at the time of sign up
            $table->foreignUuid('participant_id')->nullable()->constrained();

            $table->string('client_name');
            $table->date('date');
            $table->string('address');
            $table->string('employer')->nullable();
            $table->string('t_shirt_size')->nullable();
            $table->string('home_cell_phone');
            $table->string('work_phone')->nullable();
            $table->string('other_number')->nullable();
            $table->string('email_address')->nullable();
            $table->string('probation_parole_case_worker_name')->nullable();
            $table->string('probation_parole_case_worker_phone')->nullable();

            // Children information
            $table->jsonb('children_info')->nullable(); // This will store an array of children details

            // Contact with children
            $table->boolean('contact_with_children')->nullable();
            $table->boolean('custody')->nullable();
            $table->boolean('visitation')->nullable();
            $table->boolean('phone_contact')->nullable();
            $table->string('participant_photo')->nullable();
            $table->decimal('monthly_child_support_payment', 10, 2)->nullable();

            // Marital status
            $table->enum('marital_status', ['Married', 'Engaged', 'Single', 'Divorced', 'Widowed'])->nullable();

            // Ethnicity
            $table->enum('ethnicity', ['American Indian or Alaska Native', 'Asian', 'Black or African American', 'Hispanic or Latino', 'Native Hawaiian or Islander', 'White'])->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participant_sign_up_form');
    }
};
