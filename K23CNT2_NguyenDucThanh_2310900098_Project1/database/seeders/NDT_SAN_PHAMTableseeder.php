<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NDT_SAN_PHAMTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('NDT_SAN_PHAM')->insert([
            'ndtMaSanPham'  =>"VP001",
            'ndtTenSanPham' =>"Bonsai văn phòng",
            'ndtHinhAnh'    =>"K23CNT2_NguyenDucThanh_2310900098_Project1/images/caycanhvanphong.jpg",
            'ndtSoLuong'    =>100,
            'ndtDonGia'     =>699900,
            'ndtMaLoai'     =>1,
            'ndtTrangThai'  =>0
        ]);
        DB::table('NDT_SAN_PHAM')->insert([
            'ndtMaSanPham'  =>"DB002",
            'ndtTenSanPham' =>"Bonsai để bàn",
            'ndtHinhAnh'    =>"K23CNT2_NguyenDucThanh_2310900098_Project1/images/caydeban.jpg",
            'ndtSoLuong'    =>150,
            'ndtDonGia'     =>399900,
            'ndtMaLoai'     =>2,
            'ndtTrangThai'  =>0
        ]);
        DB::table('NDT_SAN_PHAM')->insert([
            'ndtMaSanPham'  =>"PT003",
            'ndtTenSanPham' =>"Cây phong thủy",
            'ndtHinhAnh'    =>"K23CNT2_NguyenDucThanh_2310900098_Project1/images/caycanhphongthuuy.jpg",
            'ndtSoLuong'    =>200,
            'ndtDonGia'     =>199900,
            'ndtMaLoai'     =>3,
            'ndtTrangThai'  =>0
        ]);
        DB::table('NDT_SAN_PHAM')->insert([
            'ndtMaSanPham'  =>"TC004",
            'ndtTenSanPham' =>"Cây thủy canh",
            'ndtHinhAnh'    =>"K23CNT2_NguyenDucThanh_2310900098_Project1/images/caythuycanh.jpg",
            'ndtSoLuong'    =>300,
            'ndtDonGia'     =>499900,
            'ndtMaLoai'     =>4,
            'ndtTrangThai'  =>0
        ]);
        
    }
}
