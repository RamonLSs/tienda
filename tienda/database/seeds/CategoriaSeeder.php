<?php

use Illuminate\Database\Seeder;
use App\Categoria;


class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Categoria::create([
            'nombre'=>'Electronica'
        ]);

        Categoria::create([
            'nombre'=>'Hogar'
        ]);

        Categoria::create([
            'nombre'=>'Alimentacion'
        ]);

        Categoria::create([
            'nombre'=>'Moda'
        ]);

        Categoria::create([
            'nombre'=>'Limpieza'
        ]);

        Categoria::create([
            'nombre'=>'Cocina'
        ]);

    }
}
