<?php

// database/seeders/CounselorSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Counselor;
use App\Models\AppUser; // Import the AppUser model
use Illuminate\Support\Facades\Hash;

class CounselorSeeder extends Seeder
{
    public function run()
    {
        $counselorUser = AppUser::create([
            'name' => 'Counselor User',
            'email' => 'counselor@example.com',
            'password' => Hash::make('password'),
            'role' => 'counselor',
        ]);

        Counselor::create([
            'user_id' => $counselorUser->user_id,
            'department_id' => 1, // Replace with an existing department ID
            'name' => 'John Counselor',
        ]);

        // Create more counselors here
    }
}
