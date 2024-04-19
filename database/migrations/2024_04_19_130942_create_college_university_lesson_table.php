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
        Schema::create('college_university_lesson', function (Blueprint $table) {
            $table->id();
            $table->foreignId('college_university_id')->references('id')->on('college_university')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('lesson_id')->constrained()->onUpdate('cascade')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('college_university', function (Blueprint $table) {
            $table->dropForeign('college_university_id');
        });

        Schema::table('lessons', function (Blueprint $table) {
            $table->dropForeign('lesson_id');
        });

        Schema::dropIfExists('college_university_lesson');
    }
};
