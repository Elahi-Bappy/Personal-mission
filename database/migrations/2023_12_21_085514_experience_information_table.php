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
        Schema::create('experience_information',function (Blueprint $table){
            $table->id();
            $table->string('company_name');
            $table->string('company_business');
            $table->string('designation');
            $table->string('department');
            $table->string('responsibility', 500);
            $table->string('company_location', 200);
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
        Schema::dropIfExists('experience_information');
    }
};
