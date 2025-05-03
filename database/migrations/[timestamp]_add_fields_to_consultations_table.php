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
        Schema::table('consultations', function (Blueprint $table) {
            if (!Schema::hasColumn('consultations', 'name')) {
                $table->string('name');
            }
            if (!Schema::hasColumn('consultations', 'email')) {
                $table->string('email');
            }
            if (!Schema::hasColumn('consultations', 'phone')) {
                $table->string('phone')->nullable();
            }
            if (!Schema::hasColumn('consultations', 'preferred_date')) {
                $table->date('preferred_date')->nullable();
            }
            if (!Schema::hasColumn('consultations', 'consultation_type')) {
                $table->string('consultation_type')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('consultations', function (Blueprint $table) {
            $table->dropColumn(['name', 'email', 'phone', 'preferred_date', 'consultation_type']);
        });
    }
};