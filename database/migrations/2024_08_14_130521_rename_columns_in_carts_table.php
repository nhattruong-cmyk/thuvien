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
        Schema::table('carts', function (Blueprint $table) {
            $table->renameColumn('maSach', 'bookId_cart');
            $table->renameColumn('tenSach', 'bookName_cart');
            $table->renameColumn('soLuong', 'quantity_cart');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->renameColumn('bookId_cart', 'maSach');
            $table->renameColumn('bookName_cart', 'tenSach');
            $table->renameColumn('quantity_cart', 'soLuong');
        });
    }
};
