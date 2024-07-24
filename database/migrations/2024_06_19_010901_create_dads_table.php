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
        Schema::create('dads', static function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user_id')->constrained('users');
            $table->foreignUuid('region_id')->nullable()->constrained('regions');
            $table->string('street_address', 100)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('zip_code', 5)->nullable();
            $table->string('employer', 100)->nullable();
            $table->text('email')->nullable();
            $table->string('cell_phone_number', 11)->nullable();
            $table->string('home_phone_number', 11)->nullable();
            $table->string('work_phone_number', 11)->nullable();
            $table->string('alt_contact_number', 11)->nullable();
            $table->enum('marital_status', ['single', 'married', 'divorced', 'widowed']);
            $table->enum('ethnicity', ['white', 'africanAmerican', 'nativeAmerican', 'asian', 'pacificIslander']);
            $table->decimal('monthly_child_support', 6, 2)->change();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dads');
    }
};
