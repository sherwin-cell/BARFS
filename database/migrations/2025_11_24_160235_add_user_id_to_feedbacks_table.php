<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('feedbacks', function (Blueprint $table) {
            $table->unsignedBigInteger('resolution_id')->after('user_id');

            // Foreign key
            $table->foreign('resolution_id')->references('id')->on('resolutions')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('feedbacks', function (Blueprint $table) {
            $table->dropForeign(['resolution_id']);
            $table->dropColumn('resolution_id');
        });
    }
};
