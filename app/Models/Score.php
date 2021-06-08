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

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function score()
    {
        return $this->hasMany(User::class);
    }
}


