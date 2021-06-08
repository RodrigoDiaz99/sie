<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;
    protected $fillable = [
        'parcial1',
        'parcial2',
        'parcial3',
        'parcial4'
    ];

    public function Subject()
    {
        return $this->belongsToMany(Subject::class);
    }

    public function Score()
    {
        return $this->belongsToMany(Score::class);
    }
}


