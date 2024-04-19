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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('comment',1000);
            $table->foreignId('student_id')->constrained()->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('document_id')->constrained()->onUpdate('cascade')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropForeign('student_id');
        });

        Schema::table('documents', function (Blueprint $table) {
            $table->dropForeign('document_id');
        });

        Schema::dropIfExists('comments');
    }
};
