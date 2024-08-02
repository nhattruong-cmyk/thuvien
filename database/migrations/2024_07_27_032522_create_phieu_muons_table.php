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
        Schema::create('phieu_muons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userId')->nullable();
            $table->unsignedBigInteger('maSach')->nullable();
            $table->string('userName');
            $table->string('tenSach');
            $table->date('ngayMuon');
            $table->date('hanTra');
            $table->string('email');
            $table->string('phone');
            $table->foreign('userId')->references('id')->on('users')->onDelete('set null');
            $table->foreign('maSach')->references('id')->on('products')->onDelete('set null');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phieu_muons');
    }
};
