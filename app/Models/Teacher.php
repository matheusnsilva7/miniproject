<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Teacher extends Model
{
    use  HasFactory, Notifiable;

    protected $fillable = ['name', 'surname', 'course_id'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
