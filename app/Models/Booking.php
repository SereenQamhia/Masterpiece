<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['time', 'day', 'description', 'tools'];

    public function professional()
    {
        return $this->belongsTo(Professional::class, 'professional_id');
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
