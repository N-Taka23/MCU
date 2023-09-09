<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class consideration_user extends Model
{
    use HasFactory;
    
    public function user()   
    {
        return $this->belongsTo(User::class);  
    }
    
    public function consideration()   
    {
        return $this->belongsTo(Consideration::class);  
    }
}
