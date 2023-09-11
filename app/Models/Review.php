<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'movie_id',
        'parent_id',
        'child_id',
        'comment',
        'movie_evaluation',
        'review_evaluation',
        'spoiler',
    ];
    public function user()   
    {
        return $this->belongsTo(User::class);  
    }
    public function movie()   
    {
        return $this->belongsTo(Movie::class);  
    }
}
