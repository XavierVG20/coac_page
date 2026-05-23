<?php

namespace Database\Seeders;

use App\Models\Agencias;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AgenciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $agencias = [

            [
                'nombre' => 'Matriz Pujilí',

                'slug' => Str::slug('Matriz Pujilí'),

                'ciudad' => 'Pujilí',

                'direccion' => 'Centro de Pujilí, Cotopaxi',

                'telefono' => '032000000',

                'correo' => 'matriz@coacpujili.fin.ec',

                'horario' => 'Lunes a Viernes 08:00 - 17:00',

                'socios' => 5000,

                'creditos' => 2500000,

                'imagen' => 'matriz.jpg',

                'mapa_google' => 'https://maps.google.com',

                'meta_title' =>
                'Matriz Principal | Cooperativa Pujilí',

                'meta_description' =>
                'Conoce la matriz principal de la Cooperativa de Ahorro y Crédito Pujilí Ltda.',

                'meta_keywords' =>
                'matriz pujilí, cooperativa pujilí, ahorro y crédito',

                'estado' => 1
            ],

            [
                'nombre' => 'Agencia Latacunga',

                'slug' => Str::slug('Agencia Latacunga'),

                'ciudad' => 'Latacunga',

                'direccion' => 'Centro de Latacunga',

                'telefono' => '032000001',

                'correo' => 'latacunga@coacpujili.fin.ec',

                'horario' => 'Lunes a Viernes 08:00 - 17:00',

                'socios' => 3000,

                'creditos' => 1500000,

                'imagen' => 'latacunga.jpg',

                'mapa_google' => 'https://maps.google.com',

                'meta_title' =>
                'Agencia Latacunga | Cooperativa Pujilí',

                'meta_description' =>
                'Servicios financieros y créditos en Latacunga.',

                'meta_keywords' =>
                'latacunga, créditos, cooperativa pujilí',

                'estado' => 1
            ],

            [
                'nombre' => 'Agencia Salcedo',

                'slug' => Str::slug('Agencia Salcedo'),

                'ciudad' => 'Salcedo',

                'direccion' => 'Centro de Salcedo',

                'telefono' => '032000002',

                'correo' => 'salcedo@coacpujili.fin.ec',

                'horario' => 'Lunes a Viernes 08:00 - 17:00',

                'socios' => 2500,

                'creditos' => 1200000,

                'imagen' => 'salcedo.jpg',

                'mapa_google' => 'https://maps.google.com',

                'meta_title' =>
                'Agencia Salcedo | Cooperativa Pujilí',

                'meta_description' =>
                'Servicios financieros y créditos en Salcedo.',

                'meta_keywords' =>
                'salcedo, créditos, cooperativa pujilí',

                'estado' => 1
            ],

            [
                'nombre' => 'Agencia La Maná',

                'slug' => Str::slug('Agencia La Maná'),

                'ciudad' => 'La Maná',

                'direccion' => 'Centro de La Maná',

                'telefono' => '032000003',

                'correo' => 'lamana@coacpujili.fin.ec',

                'horario' => 'Lunes a Viernes 08:00 - 17:00',

                'socios' => 1800,

                'creditos' => 9000,

                'imagen' => 'lamana.jpg',

                'mapa_google' => 'https://maps.google.com',

                'meta_title' =>
                'Agencia La Maná | Cooperativa Pujilí',

                'meta_description' =>
                'Servicios financieros y créditos en La Maná.',

                'meta_keywords' =>
                'la maná, créditos, cooperativa pujilí',

                'estado' => 1
            ],

            [
                'nombre' => 'Agencia Quito',

                'slug' => Str::slug('Agencia Quito'),

                'ciudad' => 'Quito',

                'direccion' => 'Sur de Quito',

                'telefono' => '022000004',

                'correo' => 'quito@coacpujili.fin.ec',

                'horario' => 'Lunes a Viernes 08:00 - 17:00',

                'socios' => 4000,

                'creditos' => 3000,

                'imagen' => 'quito.jpg',

                'mapa_google' => 'https://maps.google.com',

                'meta_title' =>
                'Agencia Quito | Cooperativa Pujilí',

                'meta_description' =>
                'Servicios financieros y créditos en Quito.',

                'meta_keywords' =>
                'quito, créditos, cooperativa pujilí',

                'estado' => 1
            ],

            [
                'nombre' => 'Agencia Píllaro',

                'slug' => Str::slug('Agencia Píllaro'),

                'ciudad' => 'Píllaro',

                'direccion' => 'Centro de Píllaro',

                'telefono' => '032000005',

                'correo' => 'pillaro@coacpujili.fin.ec',

                'horario' => 'Lunes a Viernes 08:00 - 17:00',

                'socios' => 1700,

                'creditos' => 8500,

                'imagen' => 'pillaro.jpg',

                'mapa_google' => 'https://maps.google.com',

                'meta_title' =>
                'Agencia Píllaro | Cooperativa Pujilí',

                'meta_description' =>
                'Servicios financieros y créditos en Píllaro.',

                'meta_keywords' =>
                'píllaro, créditos, cooperativa pujilí',

                'estado' => 1
            ]

        ];

        foreach($agencias as $agencia){

            Agencias::create($agencia);

        }
    }
}
