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
        Schema::create('document_forum', function (Blueprint $table) {
            $table->id();
            $table->foreignId('document_id');
            $table->foreignId('forum_id');
            $table->foreign('document_id')->references('id')->on('documents')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('forum_id')->references('id')->on('forums')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('documents', function (Blueprint $table) {
            $table->dropForeign('document_id');
        });

        Schema::table('forums', function (Blueprint $table) {
            $table->dropForeign('forum_id');
        });

        Schema::dropIfExists('document_forum');
    }
};
