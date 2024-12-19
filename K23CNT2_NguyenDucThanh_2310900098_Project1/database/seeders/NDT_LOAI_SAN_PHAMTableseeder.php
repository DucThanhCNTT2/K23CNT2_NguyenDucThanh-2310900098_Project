<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NDT_LOAI_SAN_PHAMTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('NDT_LOAI_SAN_PHAM')->insert([
            'ndtMaLoai'=> "C001",
            'ndtTenLoai'=> "Cây cảnh văn phòng",
            'ndtTrangThai'=> 0
        ]);
        DB::table('NDT_LOAI_SAN_PHAM')->insert([
            'ndtMaLoai'=> "C002",
            'ndtTenLoai'=> "Cây để bàn",
            'ndtTrangThai'=> 0
        ]);
        DB::table('NDT_LOAI_SAN_PHAM')->insert([
            'ndtMaLoai'=> "C003",
            'ndtTenLoai'=> "Cây cảnh phong thủy",
            'ndtTrangThai'=> 0
        ]);
        DB::table('NDT_LOAI_SAN_PHAM')->insert([
            'ndtMaLoai'=> "C004",
            'ndtTenLoai'=> "Cây thủy canh",
            'ndtTrangThai'=> 0
        ]);

    }
}
