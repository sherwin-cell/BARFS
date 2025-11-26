<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('resolutions', function (Blueprint $table) {
            // Step 1: Add nullable user_id first
            $table->unsignedBigInteger('user_id')->nullable()->after('id');
        });

        // Step 2: Fill existing resolutions with a default user (or assign correct IDs)
        // Example: assign all existing resolutions to user ID 1
        \DB::table('resolutions')->update(['user_id' => 1]);

        Schema::table('resolutions', function (Blueprint $table) {
            // Step 3: Make user_id NOT NULL and add foreign key
            $table->unsignedBigInteger('user_id')->nullable(false)->change();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('resolutions', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
};
