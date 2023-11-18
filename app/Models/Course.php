<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'image','time' ,'location' , 'day' , 'price','description','duration' ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
