<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;

class ColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::create([
            'name' => 'Blanco'
        ]);

        Color::create([
            'name' => 'Negro'
        ]);

        Color::create([
            'name' => 'Azul'
        ]);

        Color::create([
            'name' => 'Rojo'
        ]);

        Color::create([
            'name' => 'Cafe'
        ]);

        Color::create([
            'name' => 'Morado'
        ]);
    }
}
