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
        Schema::create('NDT_HOA_DON', function (Blueprint $table) {
            $table->id();
            $table->string('ndtMaHoaDon',255)->unique();
            $table->bigInteger('ndtMaKhachHang')->references('id')->on('nvk_khach_hang');
            $table->dateTime('ndtNgayHoaDon');
            $table->dateTime('ndtNgayNhan');
            $table->string('ndtHoTenKhachHang',255);
            $table->string('ndtEmail',255);
            $table->string('ndtDienThoai',255);
            $table->string('ndtDiaChi',255);
            $table->float('ndtTongTriGia');
            $table->tinyInteger('ndtTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NDT_HOA_DON');
    }
};
