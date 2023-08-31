<?php

// database/seeders/StudentSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\AppUser; // Import the AppUser model
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $studentUser = AppUser::create([
            'name' => 'Student User',
            'email' => 'student@example.com',
            'password' => Hash::make('password'),
            'role' => 'student',
        ]);

        Student::create([
            'user_id' => $studentUser->user_id,
            'name' => 'Jane Student',
            'degree_program' => 'BSIT',
            'year_level' => 2,
        ]);

        // Create more students here
    }
}
