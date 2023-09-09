<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function cosiderations()
    {
        return $this->hasMany(Consideration::class); 
    }
    
    public function reviews()
    {
        return $this->hasMany(Review::class); 
    }
    
    public function review_user()
    {
        return $this->hasMany(review_user::class); 
    }
    
     public function consideration_user()
    {
        return $this->hasMany(consideration_user::class); 
    }
    
    public function movie()   
    {
        return $this->belongsTo(Movie::class);  
    }
}
