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
        Schema::create('regencies', function (Blueprint $table) {
            $table->char('id', 4)->primary()->collation('utf8_unicode_ci');
            $table->char('province_id', 2)->collation('utf8_unicode_ci');
            $table->string('name', 255);

            // Foreign key constraint
            $table->foreign('province_id')
                  ->references('id')
                  ->on('provinces')
                  ->onDelete('cascade');

            $table->timestamps();
        });

        // Adjust table character set and collation
        Schema::table('regencies', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regencies');
    }
};
