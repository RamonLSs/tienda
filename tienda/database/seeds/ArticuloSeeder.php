<?php

use Illuminate\Database\Seeder;
use App\Articulo;
use Illuminate\Support\Facades\DB;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('articulos')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Articulo::create([
            'nombre'=>'Frigorifico',
            'precio'=>'25.2',
            'stock'=>'100',
            'categoria_id'=>6
        ]);

        Articulo::create([
            'nombre'=>'Ordenador Portatil',
            'precio'=>'75.3',
            'stock'=>'500',
            'categoria_id'=>1
        ]);

        Articulo::create([
            'nombre'=>'Microondas',
            'precio'=>'42.7',
            'stock'=>'30',
            'categoria_id'=>6
        ]);

        Articulo::create([
            'nombre'=>'Cucharas',
            'precio'=>'2.1',
            'stock'=>'1000',
            'categoria_id'=>6
        ]);

        Articulo::create([
            'nombre'=>'Impresora',
            'precio'=>'23.7',
            'stock'=>'67',
            'categoria_id'=>1
        ]);

        Articulo::create([
            'nombre'=>'Teclado',
            'precio'=>'73.8',
            'stock'=>'278',
            'categoria_id'=>1
        ]);

        Articulo::create([
            'nombre'=>'Tendedero',
            'precio'=>'59.99',
            'stock'=>'250',
            'categoria_id'=>2
        ]);

        Articulo::create([
            'nombre'=>'Frigorifico',
            'precio'=>'67.99',
            'stock'=>'100',
            'categoria_id'=>6
        ]);

        Articulo::create([
            'nombre'=>'Mini Agenda',
            'precio'=>'1.99',
            'stock'=>'2500',
            'categoria_id'=>2
        ]);

        Articulo::create([
            'nombre'=>'Papelera',
            'precio'=>'3.99',
            'stock'=>'267',
            'categoria_id'=>2
        ]);



    }
}
