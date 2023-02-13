<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Image;

class ImageTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::insert([
            [
                'name' => 'S23 Ultra',
                'file' => 'https://images.samsung.com/id/smartphones/galaxy-s23-ultra/buy/kv_online_exclusive_PC.jpg',
                'enable' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'The Alchemist',
                'file' => 'https://www.booksbeyond.co.id/image/cache/catalog/1632111032-550x550w.png.webp',
                'enable' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
