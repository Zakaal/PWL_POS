<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1, 
                'kategori_id' => 1,
                'barang_kode' => 'PCR', 
                'barang_nama' => 'Pocari Sweat', 
                'harga_beli' => 7100,         
                'harga_jual' => 8000,         
            ],
            [
                'barang_id' => 2, 
                'kategori_id' => 1,
                'barang_kode' => 'FRT', 
                'barang_nama' => 'Fruit Tea', 
                'harga_beli' => 7000,         
                'harga_jual' => 7500,         
            ],
            [
                'barang_id' => 3, 
                'kategori_id' => 2,
                'barang_kode' => 'SNS', 
                'barang_nama' => 'Sosis So Nice', 
                'harga_beli' => 1000,         
                'harga_jual' => 1500,         
            ],
            [
                'barang_id' => 4, 
                'kategori_id' => 2,
                'barang_kode' => 'ORC', 
                'barang_nama' => 'Oreo Chocolate ', 
                'harga_beli' => 6000,         
                'harga_jual' => 6500,         
            ],
            [
                'barang_id' => 5, 
                'kategori_id' => 3,
                'barang_kode' => 'STD', 
                'barang_nama' => 'Pencil Staedtler', 
                'harga_beli' => 3700,         
                'harga_jual' => 4500,         
            ],
            [
                'barang_id' => 6, 
                'kategori_id' => 3,
                'barang_kode' => 'LYR', 
                'barang_nama' => 'Penghapus Lyra', 
                'harga_beli' => 2400,         
                'harga_jual' => 3000,         
            ],
            [
                'barang_id' => 7, 
                'kategori_id' => 4,
                'barang_kode' => 'KOI', 
                'barang_nama' => 'Beras Koi Biru', 
                'harga_beli' => 90000,         
                'harga_jual' => 91500,         
            ],
            [
                'barang_id' => 8, 
                'kategori_id' => 4,
                'barang_kode' => 'BML', 
                'barang_nama' => 'Minyak Bimoli', 
                'harga_beli' => 39000,         
                'harga_jual' => 40000,         
            ],
            [
                'barang_id' => 9, 
                'kategori_id' => 5,
                'barang_kode' => 'SKL', 
                'barang_nama' => 'So Klin Lantai', 
                'harga_beli' => 10100,         
                'harga_jual' => 12000,         
            ],
            [
                'barang_id' => 10, 
                'kategori_id' => 5,
                'barang_kode' => 'LFBY', 
                'barang_nama' => 'Sabun LifeBuoy', 
                'harga_beli' => 3900,         
                'harga_jual' => 4500,         
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
