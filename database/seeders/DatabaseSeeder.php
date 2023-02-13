<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategoryTable::class,
            ProductTable::class,
            ImageTable::class,
            CategoryProductTable::class,
            ProductImageTable::class,
        ]);
    }
}
