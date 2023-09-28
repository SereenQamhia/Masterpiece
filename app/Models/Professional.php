<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','description', 'email', 'password', 'years of experience', 'phone_number', 'address','gender','cv','location', 'price','image'
        // Add other user-related fields here
    ];
}
