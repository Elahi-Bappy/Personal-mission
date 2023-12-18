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
        Schema::table('experience', function (Blueprint $table) {
            $table->string('company_name')->after('id');
            $table->string('company_business');
            $table->string('designation');
            $table->string('department');
            $table->string('responsibility');
            $table->string('company_location');
            $table->string('employment_period');
            $table->string('highlights',500);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('experience', function (Blueprint $table) {
            //
        });
    }
};
