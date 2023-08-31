<?php

// database/seeders/AppUserSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AppUser;
use Illuminate\Support\Facades\Hash;

class AppUserSeeder extends Seeder
{
    public function run()
    {
        AppUser::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => Hash::make('password'),
            'role' => 'student',
        ]);

        // Create more sample users here
    }
}
