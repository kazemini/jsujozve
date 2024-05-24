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
        Schema::create('follows', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('forum_id');
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('forum_id')->references('id')->on('forums')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('user_id');
        });

        Schema::table('forums', function (Blueprint $table) {
            $table->dropForeign('forum_id');
        });

        Schema::dropIfExists('follows');
    }
};
