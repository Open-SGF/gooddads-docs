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
        Schema::create('participant_media_release_form', function (Blueprint $table) {

            $table->uuid('id')->primary();
            $table->foreignUuid('participant_id')->constrained();

            $table->string('printed_name');
            $table->string('signature');
            $table->date('signature_date');
            $table->string('phone_number');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participant_media_release_form');
    }
};
