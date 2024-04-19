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
        Schema::create('college_university', function (Blueprint $table) {
            $table->id();
            $table->foreignId('college_id')->constrained()->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('university_id')->constrained()->onUpdate('cascade')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('universities', function (Blueprint $table) {
            $table->dropForeign('university_id');
        });
        Schema::table('colleges', function (Blueprint $table) {
            $table->dropForeign('college_id');
        });
        Schema::dropIfExists('college_university');
    }
};
