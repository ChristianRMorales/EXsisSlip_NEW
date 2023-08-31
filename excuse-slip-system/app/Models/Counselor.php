<?php

// app/Models/Counselor.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counselor extends Model
{
    use HasFactory;

    protected $primaryKey = 'counselor_id';

    protected $fillable = [
        'user_id', 'department_id', 'name',
    ];

    public function user()
    {
        return $this->belongsTo(AppUser::class, 'user_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
