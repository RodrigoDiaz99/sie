<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'users';

    public function Subjects()
    {
        return $this->belongsToMany(Subjects::class,'students_subjects', 'user_id', 'subject_id');
    }
}
