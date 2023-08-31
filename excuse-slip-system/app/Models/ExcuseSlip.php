<?php

// app/Models/ExcuseSlip.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExcuseSlip extends Model
{
    use HasFactory;

    protected $primaryKey = 'excuse_id';

    protected $fillable = [
        'student_id', 'course_id', 'reason', 'start_date', 'end_date', 'status',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
