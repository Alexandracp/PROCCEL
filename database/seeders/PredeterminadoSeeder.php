<?php

namespace Database\Seeders;

use App\Tipo;
use App\Rol;
use App\Genero;
use App\FormaPago;
use App\User; //usuario
use Illuminate\Database\Seeder;

class PredeterminadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

        // Seeder Rol

        $rol = new Rol();

        $rol-> nombre_rol ='Estudiante';
        $rol ->save();

        $rol1 = new Rol();

        $rol1-> nombre_rol ='Administrador';
        $rol1 ->save();

        // Seeder Tipo

        $tipo = new Tipo();

        $tipo -> abrev ='V';
        $tipo -> nacionalidad ='Venezolano';
        $tipo ->save();

        $tipo1 = new Tipo();

        $tipo1 -> abrev ='E';
        $tipo1 -> nacionalidad ='Extranjero';
        $tipo1->save();

        //Seeder Genero

        $genero = new Genero();

        $genero -> genero='Femenino';
        $genero ->save();

        $genero2 = new Genero();

        $genero2 -> genero='Masculino';
        $genero2->save();

        $genero3 = new Genero();

        $genero3 -> genero='Otro';
        $genero3->save();

        //Seeder Forma de pago

         $formapago = new FormaPago();

         $formapago -> forma_pago ='Efectivo';
         $formapago ->save();
 
         $formapago2 = new FormaPago();
 
         $formapago2 -> forma_pago ='Transferencia Nacional';
         $formapago2->save();
 
         $formapago3 = new FormaPago();
 
         $formapago3 -> forma_pago ='Transferencia Extranjera';
         $formapago3->save();
    }
}
