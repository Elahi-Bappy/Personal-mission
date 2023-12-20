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
        Schema::table('contact', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('social_link', 500)->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('emergency_contact')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contact', function (Blueprint $table) {
           $table->dropColumn([
               'email',
               'social_link',
               'mobile_number',
               'emergency_contact'
           ]);
        });
    }
};
