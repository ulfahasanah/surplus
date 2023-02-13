<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            [
                'name' => 'Samsung S23 Ultra',
                'description' => 'Gratis memory upgrade (senilai hingga Rp4.000.000), gratis Samsung eVoucher senilai Rp1.500.000 (hanya untuk Galaxy S23 Ultra 512GB), ekstra diskon Rp1.000.000 dengan trade-in, dan benefit lainnya (senilai hingga Rp7.599.000). Penawaran terbatas',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'The Alchemist',
                'description' => "Paulo Coelho's masterpiece tells the mystical story of Santiago, an Andalusian shepherd boy who yearns to travel in search of a worldly treasure.",
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
