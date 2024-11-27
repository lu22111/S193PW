<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class clientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            
            [
                'nombre'=>'juan',
                'apellido'=>'perex',
                'correo'=>'juan@gmail.com',
                'telefono'=>'+12345'

            ]
            ,[
                
                'nombre'=>'andrea',
                'apellido'=>'arredondo',
                'correo'=>'andrea@gmail.com',
                'telefono'=>'+123459'

            ],[
                'nombre'=>'moy',
                'apellido'=>'becerril',
                'correo'=>'moy@gmail.com',
                'telefono'=>'+1234598'

            ]]);
    }
}
