<?php

use Illuminate\Database\Seeder;
use App\Vendedor;
use Illuminate\Support\Facades\DB;

class VendedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('vendedors')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
            Vendedor::create([
                'nombre'=>'Ramon',
                'apellidos'=>'Lopez Salmeron',
                'edad'=>'21',
                'ventas'=> '100'
            ]);

            Vendedor::create([
                'nombre'=>'Juanfran',
                'apellidos'=>'Garcia de Sousa capoeria palmeria de chocolateira',
                'edad'=>'22',
                'ventas'=> '78'
            ]);

            Vendedor::create([
                'nombre'=>'Manuel',
                'apellidos'=>'Ramon Sanchez',
                'edad'=>'245',
                'ventas'=> '74'
            ]);

            Vendedor::create([
                'nombre'=>'Ruben',
                'apellidos'=>'Saiz Casado',
                'edad'=>'23',
                'ventas'=> '89'
            ]);

            Vendedor::create([
                'nombre'=>'Milasi',
                'apellidos'=>'Forge Fenix',
                'edad'=>'21',
                'ventas'=> '134'
            ]);

            Vendedor::create([
                'nombre'=>'Diego',
                'apellidos'=>'PHP Javascript',
                'edad'=>'30',
                'ventas'=> '162'
            ]);

            Vendedor::create([
                'nombre'=>'Javier',
                'apellidos'=>'Garcia Gonzalez',
                'edad'=>'24',
                'ventas'=> '20'
            ]);

            Vendedor::create([
                'nombre'=>'Ruben',
                'apellidos'=>'Garcia Gonzalez',
                'edad'=>'19',
                'ventas'=> '95'
            ]);
    }
}
