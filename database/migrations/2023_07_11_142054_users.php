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
        Schema::table('users', function (Blueprint $table) {
            $table->string('address')->nullable();
            $table->string('color')->nullable();
            $table->string('nbOfProperty')->nullable();
            $table->decimal('revenue1')->nullable();
            $table->decimal('revenue2')->nullable();
            $table->decimal('revenue3')->nullable();
            $table->date('date_creation')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
