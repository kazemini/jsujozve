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
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->string('title',100);
            $table->string('description',1000);
            $table->string('university',100);
            $table->string('department',100);
            $table->string('professor',100);
            $table->string('lesson',100);
            $table->foreignId('document_id');
            $table->foreignId('editor_id')->nullable();
            $table->foreign('document_id')->references('id')->on('documents')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('editor_id')->references('id')->on('users')->cascadeOnUpdate()->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('editor_id');
        });

        Schema::table('documents', function (Blueprint $table) {
            $table->dropForeign('document_id');
        });

        Schema::dropIfExists('logs');
    }
};
