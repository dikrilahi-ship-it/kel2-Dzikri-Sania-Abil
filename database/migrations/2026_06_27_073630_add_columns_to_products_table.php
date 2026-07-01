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
        // Kolom-kolom ini sudah ditambahkan di migration create_products_table
        // sehingga migration ini sengaja dikosongkan (no-op) untuk menghindari duplikasi.
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};