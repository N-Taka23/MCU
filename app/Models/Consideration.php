<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consideration extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'parent_id',
        'child_id',
        'comment',
        'consideration_evaluation',
    ];
    use HasFactory;
    
    public function user()   
    {
        return $this->belongsTo(User::class);  
    }

}

