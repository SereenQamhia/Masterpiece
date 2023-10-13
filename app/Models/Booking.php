<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [  'professional_id',
    'user_id',
    'time',
    'day',
    'tools',
    'description',
    'name',
    'address',
    'building',
    'phone',
    'email',
    'notes',
    'payment',
'id',];

    public function professional()
    {
        return $this->belongsTo(Professional::class, 'professional_id');
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
