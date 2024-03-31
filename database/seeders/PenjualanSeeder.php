<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1, 
                'user_id' => 3,
                'pembeli' => 'Asep', 
                'penjualan_kode' => 'J001', 
                'penjualan_tanggal' => '2024-03-31 10:00:00',         
            ],
            [
                'penjualan_id' => 2, 
                'user_id' => 3,
                'pembeli' => 'Budi', 
                'penjualan_kode' => 'J002', 
                'penjualan_tanggal' => '2024-03-31 10:30:00',         
            ],
            [
                'penjualan_id' => 3, 
                'user_id' => 3,
                'pembeli' => 'Siti', 
                'penjualan_kode' => 'J003', 
                'penjualan_tanggal' => '2024-03-31 11:00:00',         
            ],
            [
                'penjualan_id' => 4, 
                'user_id' => 3,
                'pembeli' => 'Londok', 
                'penjualan_kode' => 'J004', 
                'penjualan_tanggal' => '2024-03-31 12:00:00',         
            ],
            [
                'penjualan_id' => 5, 
                'user_id' => 3,
                'pembeli' => 'Rani', 
                'penjualan_kode' => 'J005', 
                'penjualan_tanggal' => '2024-03-31 13:00:00',         
            ],
            [
                'penjualan_id' => 6, 
                'user_id' => 3,
                'pembeli' => 'Rara', 
                'penjualan_kode' => 'J006', 
                'penjualan_tanggal' => '2024-03-31 13:30:00',         
            ],
            [
                'penjualan_id' => 7, 
                'user_id' => 3,
                'pembeli' => 'Aisyah', 
                'penjualan_kode' => 'J007', 
                'penjualan_tanggal' => '2024-03-31 13:30:00',         
            ],
            [
                'penjualan_id' => 8, 
                'user_id' => 3,
                'pembeli' => 'Angie', 
                'penjualan_kode' => 'J008', 
                'penjualan_tanggal' => '2024-03-31 14:00:00',         
            ],
            [
                'penjualan_id' => 9, 
                'user_id' => 3,
                'pembeli' => 'Anin', 
                'penjualan_kode' => 'J009', 
                'penjualan_tanggal' => '2024-03-31 15:00:00',         
            ],
            [
                'penjualan_id' => 10, 
                'user_id' => 3,
                'pembeli' => 'Nadine', 
                'penjualan_kode' => 'J0010', 
                'penjualan_tanggal' => '2024-03-31 17:00:00',         
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
