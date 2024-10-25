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
        Schema::table('booking_hotel', function (Blueprint $table) {
            $table->decimal('jumlah_harga', 10, 2)->after('jumlah_kamar')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('booking_hotel', function (Blueprint $table) {
            $table->dropColumn('jumlah_harga');
        });
    }
};
