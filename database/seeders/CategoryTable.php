<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'name' => 'Handphone',
                'enable' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Book',
                'enable' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
