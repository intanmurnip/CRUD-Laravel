<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product; //Memanggil model product

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Isian tabel product
        $products = [
            // baris 1
            [
                'product_name' => 'Nabati',
                'product_price' => 5000,
                'product_type' => 'makanan',
                'expired_at' => '2022-10-01'
            ],
            // baris 2
            [
                'product_name' => 'Pocari Sweat',
                'product_price' => 10000,
                'product_type' => 'minuman',
                'expired_at' => '2022-10-01'
            ]
        ];

        // di looping insert
        foreach ($products as $product) {
            // insert ke tabel product
            Product::create([
                'product_name' => $product['product_name'],
                'product_price' => $product['product_price'],
                'product_type' => $product['product_type'],
                'expired_at' => $product['expired_at']
            ]);
        }
    }
}
