<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('download_link');
            $table->string('sample_link')->nullable();
            $table->foreignId('author_id')->nullable();
            $table->foreign('author_id')->references('id')->on('users')->onUpdate('cascade')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users',function (Blueprint $table) {
            $table->dropForeign('author_id');
        });
        Schema::dropIfExists('documents');
    }
};
