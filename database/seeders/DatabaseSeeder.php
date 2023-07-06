<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Bagus K',
            'email' => 'bagus@gmail.com',
            'username' => 'baguska',
            'password' => bcrypt('123')
        ]);
        User::create([
            'name' => 'Taza ganteng',
            'email' => 'Taza@gmail.com',
            'username' => 'Taza',
            'password' => bcrypt('12345')
        ]);
    }
}
