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
        DB::table('barangs')->insert([
            [
                'kode_barang' => 'M0001',
                'nama_barang' => 'Aqua',
                'harga_barang'=> 3000,
                'deskripsi_barang' => 'Air Mineral',
                'satuan_barang_id' => 1
            ],
        ]);
    }
}
