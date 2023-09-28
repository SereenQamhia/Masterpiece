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
        'name', 'email', 'password', 'full_name', 'phone_number', 'address', 'user_type','image'
        // Add other user-related fields here
    ];

    // public function services()
    // {
    //     return $this->hasMany(Service::class, 'provider_id');
    // }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    // public function paymentTransactions()
    // {
    //     return $this->hasMany(PaymentTransaction::class);
    // }

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
}
