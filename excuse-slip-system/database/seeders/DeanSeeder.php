<?php

// database/seeders/DeanSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dean;
use App\Models\AppUser; // Import the AppUser model
use Illuminate\Support\Facades\Hash;

class DeanSeeder extends Seeder
{
    public function run()
    {
        $deanUser = AppUser::create([
            'name' => 'Dean User',
            'email' => 'dean@example.com',
            'password' => Hash::make('password'),
            'role' => 'dean',
        ]);

        Dean::create([
            'user_id' => $deanUser->user_id,
            'department_id' => 1, // Replace with an existing department ID
            'name' => 'Jane Dean',
        ]);

        // Create more deans here
    }
}
