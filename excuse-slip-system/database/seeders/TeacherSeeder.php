<?php

// database/seeders/TeacherSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teacher;
use App\Models\AppUser; // Import the AppUser model
use Illuminate\Support\Facades\Hash;

class TeacherSeeder extends Seeder
{
    public function run()
    {
        $teacherUser = AppUser::create([
            'name' => 'Teacher User',
            'email' => 'teacher@example.com',
            'password' => Hash::make('password'),
            'role' => 'teacher',
        ]);

        Teacher::create([
            'user_id' => $teacherUser->user_id,
            'department_id' => 1, // Replace with an existing department ID
            'name' => 'John Teacher',
        ]);

        // Create more teachers here
    }
}

