<?php

// app/Models/Feedback.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $primaryKey = 'feedback_id';

    protected $fillable = [
        'excuse_id', 'sender_id', 'feedback',
    ];

    public function excuseSlip()
    {
        return $this->belongsTo(ExcuseSlip::class, 'excuse_id');
    }

    public function sender()
    {
        return $this->belongsTo(AppUser::class, 'sender_id');
    }
}
