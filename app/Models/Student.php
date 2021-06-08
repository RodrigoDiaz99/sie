<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'users';


    public function score()
    {
        return $this->belongsTo(Score::class);
    }

    public function Subjects()
    {
        return $this->belongsTo(Subjects::class);
    }
}
