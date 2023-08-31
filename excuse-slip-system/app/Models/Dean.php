<?php

// app/Models/Dean.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dean extends Model
{
    use HasFactory;

    protected $primaryKey = 'dean_id';

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
