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
        Schema::create('personal_information', function (Blueprint $table){
            $table->id();
            $table->string('full_name');
            $table->string('date_of_birth')->nullable();
            $table->string('about_me', 400);
            $table->string('street_address');
            $table->string('city');
            $table->string('region');
            $table->string('zip_code');
            $table->string('country');
            $table->string('email');
            $table->string('social_link', 500)->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('emergency_contact')->nullable();
            $table->string('level_of_education');
            $table->string('major_group');
            $table->string('result_division_class');
            $table->string('marks');
            $table->string('years_of_passing');
            $table->string('institute_name',200);
            $table->string('company_name');
            $table->string('company_business');
            $table->string('designation');
            $table->string('department');
            $table->string('responsibility', 500);
            $table->string('company_location', 200);
            $table->string('employment_period');
            $table->string('highlights',500);
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_information');
    }
};
