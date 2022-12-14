<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Restaurant;
use App\Models\Platillo;
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
        // $usuario1 = new User();
        // $usuario1->email = 'desvan@gmail.com';
        // $usuario1->password = Hash::make('desvan');
        // $usuario1->save();
        // $restaurant1 = new Restaurant();
        // $restaurant1->razon_social = 'DESVAN';
        // $restaurant1->nombre_contacto = 'Javier Perez';
        // $restaurant1->verificado = 'APROBADO';
        // $restaurant1->clabe = '';
        // $restaurant1->direccion = '';
        // $restaurant1->telefono = '9191234562';
        // $restaurant1->email = 'desvan@gmail.com';
        // $restaurant1->facebook = '';
        // $restaurant1->twitter = '';
        // $restaurant1->instagram = '';
        // $restaurant1->logotipo = '';
        // $restaurant1->ubicacion_lat = '';
        // $restaurant1->ubicacion_long = '';
        // $restaurant1->save();
        // \App\Models\User::factory(10)->create();
        
        $platillo = new Platillo();
        $platillo->id_restaurant = 2;
        $platillo->nombre = 'Enchiladas';
        $platillo->descripcion = 'Es un tipico platillo Mexicano que se elabora con tortillas de maiz, bañada en salsa verde picante o no';
        $platillo->precio = '75.50';
        $platillo->imagen = '/imagenes/platillos/enchilada-1.png';
        $platillo->categoria = 'Desayuno';
        $platillo->status = 'DISPONIBLE';
        $platillo->save();
        
    
    }
}
