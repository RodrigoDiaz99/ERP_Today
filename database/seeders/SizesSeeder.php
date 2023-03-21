<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Seeder;

class SizesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Size::create([
            'name' => 'XXXL'
        ]);

        Size::create([
            'name' => 'XXL'
        ]);

        Size::create([
            'name' => 'XL'
        ]);

        Size::create([
            'name' => 'S'
        ]);

        Size::create([
            'name' => 'M'
        ]);

        Size::create([
            'name' => 'L'
        ]);

        Size::create([
            'name' => 'XS'
        ]);

        Size::create([
            'name' => 'XXS'
        ]);

        Size::create([
            'name' => 'XXXS'
        ]);
    }
}
