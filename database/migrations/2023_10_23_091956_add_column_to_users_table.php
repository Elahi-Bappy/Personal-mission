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
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name', 200)->after('id');
            $table->string('last_name', 200)->after('first_name');
            $table->string('country');
            $table->string('dob');
            $table->string('phone_number');
            $table->tinyInteger('user_type')->comment('admin = 1 user = 2 shop = 3',);
            $table->dropColumn('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name');
            $table->dropColumn([
                'first_name',
                'last_name',
                'phone_number',
                'country',
                'dob',
                'user_type'
            ]);
        });
    }
};
