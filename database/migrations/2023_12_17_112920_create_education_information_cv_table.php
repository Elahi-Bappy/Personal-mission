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
        Schema::table('education', function (Blueprint $table) {
            $table->id();
            $table->string('level_of_education');
            $table->string('major_group');
            $table->string('result_division_class');
            $table->string('marks');
            $table->string('years_of_passing');
            $table->string('institute_name',200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('education', function (Blueprint $table) {
            $table->dropColumn([
                'level_of_education',
                'major_group',
                'result_division_class',
                'marks',
                'years_of_passing',
                'institute_name'
            ]);
        });
    }
};
