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
        Schema::table('properties', function (Blueprint $table) {
            
            $table->foreignId('users_id')->constrained();
            $table->foreignId('address_id')->nullable()->constrained('address');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->dropForeign(['users_id']);
            $table->dropForeign(['address_id']);
            $table->dropColumn(['users_id', 'address_id']);
        });
    }
};
