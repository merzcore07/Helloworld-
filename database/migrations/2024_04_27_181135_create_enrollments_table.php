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
        Schema::create('enrollments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Academic_Year', 4);
            $table->date('Creation_Date');
            $table->string('Carrer');
            $table->string('Code_Carrer', 20);

            $table->integer('students_id')->unsigned();
            $table->integer('careers_id')->unsigned();

            $table->foreign('students_id')->references('id')->on('students')->
            onDelete('cascade')->onUpdate('cascade');
            $table->foreign('careers_id')->references('id')->on('careers')->
            onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
