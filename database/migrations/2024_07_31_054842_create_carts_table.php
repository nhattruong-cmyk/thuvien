<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        // Kiểm tra và xóa bảng nếu đã tồn tại
        Schema::dropIfExists('carts');

        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('maSach'); // Ensure this is the same type as the 'id' in the products table
            $table->string('tenSach');
            $table->integer('soLuong');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('maSach')->references('id')->on('products')->onDelete('cascade'); // Add foreign key constraint
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
