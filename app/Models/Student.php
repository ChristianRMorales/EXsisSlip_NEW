<?php

// app/Models/Student.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $primaryKey = 'student_id';

    protected $fillable = [
        'user_id', 'name', 'degree_program', 'year_level',
    ];

    public function user()
    {
        return $this->belongsTo(AppUser::class, 'user_id');
    }
}
