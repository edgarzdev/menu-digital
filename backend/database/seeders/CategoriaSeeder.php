<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = [
            [
                'nombre' => 'Entradas',
                'descripcion' => 'Descripción de Entradas',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Bebidas',
                'descripcion' => 'Descripción de bebidas',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Postres',
                'descripcion' => 'Descripcion de postres',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Platos Fuertes',
                'descripcion' => 'Descripcion de platos fuertes',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        foreach ($categorias as $categoria) {
            Categoria::create($categoria);
        }
    }
}
