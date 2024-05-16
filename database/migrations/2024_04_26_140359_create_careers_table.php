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
        Schema::create('careers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->string('Career_code', 20)->unique();
            $table->string('Sector')->unique();
            $table->string('Specialty_career');
            $table->integer('Quantity_students');
            $table->string('Duration_career', 20);
            $table->string('Requirements');
            $table->text('Description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
