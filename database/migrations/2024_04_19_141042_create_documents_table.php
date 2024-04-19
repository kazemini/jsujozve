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
            $table->string('title');
            $table->string('description');
            $table->string('download_link', 1000);
            $table->foreignId('student_id')->constrained()->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('professor_id')->constrained()->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('college_university_lesson_id')->references('id')->on('college_university_lesson')->onUpdate('cascade')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('college_university_lesson', function (Blueprint $table) {
            $table->dropForeign('college_university_lesson_id');
        });

        Schema::table('professors', function (Blueprint $table) {
            $table->dropForeign('professor_id');
        });

        Schema::table('students', function (Blueprint $table) {
            $table->dropForeign('student_id');
        });

        Schema::dropIfExists('documents');
    }
};
