<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = [
       'name'

    ];
    public function score()
    {
        return $this->belongsTo(Score::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
