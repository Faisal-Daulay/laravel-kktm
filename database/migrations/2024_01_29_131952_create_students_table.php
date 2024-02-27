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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('matric_number');
            $table->string('ic');
            $table->string('email');
            $table->string('address');
            $table->string('semester');
            $table->string('program_of_study');
            $table->string('phone_number');
            $table->string('religion');
            $table->string('races');
            $table->string('date_of_birth');
            $table->string('birthplace');
            $table->string('gender');
            $table->string('age');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
