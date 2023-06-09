<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductCategory::create([
            'name' => 'Ropa'
        ]);

        ProductCategory::create([
            'name' => 'Accesorios'
        ]);

        ProductCategory::create([
            'name' => 'Libros'
        ]);
    }
}
