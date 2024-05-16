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
            $table->increments('id');
            $table->string('Names');
            $table->string('Last_Name');
            $table->string('Gender');
            $table->string('Age', 3);
            $table->string('Phone_Number', 16);
            $table->string('Address');
            $table->string('Identification')->unique()->nullable();
            $table->date('Born_Date');
            $table->string('Civil_status');
            $table->string('Emergency_Number');
            $table->string('Ocupation');
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
