<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * The create_equipment_table migration was edited from decimal(8, 2) to (12, 2) after it
     * had already run, so existing databases still cap prices at ₦999,999.99.
     */
    public function up(): void
    {
        Schema::table('equipment', function (Blueprint $table) {
            $table->decimal('price_per_day', 12, 2)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('equipment', function (Blueprint $table) {
            $table->decimal('price_per_day', 8, 2)->change();
        });
    }
};
