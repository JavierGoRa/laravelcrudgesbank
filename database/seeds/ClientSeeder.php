<?php

use Illuminate\Database\Seeder;
use App\Client;

use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'nombre' => 'Javier',
            'apellidos' => 'Gonzalez Ramirez',
            'telefono' => '610867829',
            'ciudad' => 'Puerto Serrano',
            'dni' => '21425881F',
            'email' => 'jaer@gmail.com',
        ]);

        DB::table('clients')->insert([
            'nombre' => 'Warren',
            'apellidos' => 'Marc Edwars',
            'telefono' => '547854125',
            'ciudad' => 'algodonales',
            'dni' => '65847584G',
            'email' => 'warren@gmail.com',
        ]);
        
        factory(Client::class)->times(20)->create();

    }
}
