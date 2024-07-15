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
        Schema::create('_admins', function (Blueprint $table) {
            $table->id();
            $table->date('Registration Date');
            $table->string('Name',100);
            $table->string('Username', 100);
            $table->string('Email', 100);
            $table->boolean('Active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_admins');
    }
};
