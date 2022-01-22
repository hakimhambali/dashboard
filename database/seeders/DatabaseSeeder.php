<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        User::factory()->create([
            'name' => 'Hakim Hambali',
            'email' => 'hakimadmin77@gmail.com',
            'type' => 'admin',
            'password' => Hash::make('12345678')
        ]);

        User::factory()->create([
            'name' => 'Team Momentum',
            'email' => 'team@momentuminternet.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
