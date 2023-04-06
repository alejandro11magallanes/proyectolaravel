<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'Papas Fritas',
            'description' => 'Las papas fritas son un delicioso y crujiente snack de origen estadounidense que consiste en papas cortadas en rodajas finas y fritas en aceite caliente hasta que queden doradas y crujientes por fuera y suaves por dentro. ',
            'user_id' => '1',
            'publish' => 0,
       
        ]);
        DB::table('posts')->insert([
            'title' => 'Gomitas',
            'description' => 'Las gomitas son un dulce suave y masticable que se asemeja a una pequeña figura o animal, a menudo en colores brillantes y variados.',
            'user_id' => '1',
            'publish' => 0,
       
        ]);
        DB::table('posts')->insert([
            'title' => 'Gomitas',
            'description' => 'El chocolate es un dulce decadente y rico hecho de pasta de cacao mezclada con azúcar y otros ingredientes.',
            'user_id' => '1',
            'publish' => 0,
       
        ]);
   
    }
}