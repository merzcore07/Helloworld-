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
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->string('Last_Name');
            $table->string('Age', 3);
            $table->string('Gender', 10);
            $table->string('Phone_Number', 20);
            $table->string('email');
            $table->string('Address');
            $table->string('Bank_account');
            $table->string('Employee_code', 5)->unique();
            $table->string('Specialty');
            $table->string('Academic_level');
            $table->string('Identification_card')->unique();
            $table->string('Civil_status');
            $table->float('Salary');
            $table->string('Type_contract');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
