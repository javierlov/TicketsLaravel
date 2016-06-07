<?php

use Illuminate\Database\Seeder;
use App\Estado; //importamos el namespace  

class EstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estado::create(['detalle' => 'Inicial']);
        Estado::create(['detalle' => 'Procesando']);
        Estado::create(['detalle' => 'Rechazado']);
        Estado::create(['detalle' => 'Aprobado']);
    }
}
