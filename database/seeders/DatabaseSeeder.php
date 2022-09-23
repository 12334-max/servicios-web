<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $usuario1 = new User();
        $usuario1->email = 'rustica@gmail.com';
        $usuario1->password = Hash::make('rustica');
        $usuario1->save();
        $restaurant1 = new Restaurant();
        $restaurant1->razon_social = 'La Rústica';
        $restaurant1->nombre_contacto = 'Alma López';
        $restaurant1->verificado = 'APROBADO';
        $restaurant1->clabe = '';
        $restaurant1->direccion = '';
        $restaurant1->telefono = '9191234567';
        $restaurant1->email = 'rustica@gmail.com';
        $restaurant1->facebook = '';
        $restaurant1->twitter = '';
        $restaurant1->instagram = '';
        $restaurant1->logotipo = '';
        $restaurant1->ubicacion_lat = '';
        $restaurant1->ubicacion_long = '';
        $restaurant1->save();
        // \App\Models\User::factory(10)->create();
    }
}
