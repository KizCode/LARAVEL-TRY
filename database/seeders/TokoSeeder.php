<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class TokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $toko = [

            [
                'nama_barang' => 'Sendal', 'harga' => 20000, 'stok' => 5, 'nama_supplier' => 'Nike',
            ],
            [
                'nama_barang' => 'Sepatu', 'harga' => 50000, 'stok' => 5, 'nama_supplier' => 'Adidas',
            ],
            [
                'nama_barang' => 'Selob', 'harga' => 15000, 'stok' => 5, 'nama_supplier' => 'Adidas',
            ],
            [
                'nama_barang' => 'Selob', 'harga' => 15000, 'stok' => 5, 'nama_supplier' => 'Adidas',
            ],


        ];

        DB::table('tokos')->insert($toko);

    }
}
