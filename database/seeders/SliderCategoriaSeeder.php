<?php

namespace Database\Seeders;

use App\Models\SliderCategoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           $categorias = [

            [
                'nombre' => 'Slider - Principal',
                'estado' => 1
            ],

            [
                'nombre' => 'Slider - Creditos',
                'estado' => 1
            ]

        ];

        foreach($categorias as $categoria){

            SliderCategoria::create($categoria);

        }
    }
}
