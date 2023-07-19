<?php

namespace Database\Seeders;

use App\Models\Project;
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

        // User::create([
        //     'name' => 'Rahul',
        //     'email' => 'rahul@gmail.com',
        //     'username' => 'rahul',
        //     'password' => bcrypt('12345')
        // ]);

        Project::create([
            'project_name' => 'Kur JOGJA',
            'project_company' => 'FLOO ID',
            'is_active' => true,
        ]);

        Project::create([
            'project_name' => 'OOPs Fun',
            'project_company' => 'FLOO ID',
            'is_active' => true,
        ]);

        Project::create([
            'project_name' => 'BUMDETA',
            'project_company' => 'FLOO ID',
            'is_active' => true,
        ]);
    }
}
