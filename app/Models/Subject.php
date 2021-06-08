<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    public function Score()
    {
        return $this->belongsToMany(Score::class,'subjects_scores', 'subject_id','score_id');
    }
}
