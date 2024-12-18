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
        Schema::table('flood_locations', function (Blueprint $table) {
            $table->decimal('longitude', 11, 8)->change();
            // $table->integer('flood_count')->after('longitude');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('flood_locations', function (Blueprint $table) {
            // $table->dropColumn('flood_count');
            // $table->string('longitude')->change();
            $table->decimal('longitude', 10, 8)->change();
        });
    }
};
