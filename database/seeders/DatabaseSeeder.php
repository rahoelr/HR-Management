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
            'name' => 'Rahul',
            'email' => 'rahul@gmail.com',
            'username' => 'rahul',
            'password' => bcrypt('12345')
        ]);
    }
}
