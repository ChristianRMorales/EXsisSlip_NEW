<?php

// database/seeders/CourseSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run()
    {
        Course::create([
            'department_id' => 1, // Replace with an existing department ID
            'name' => 'Computer Programming',
        ]);

        // Create more courses here
    }
}
