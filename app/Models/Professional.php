<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','user_id','description', 'email','image','cv','location',
        'experience', 'age','gender', 'price',  'profission','rating',
        'completed_jobs','provider_id', 'hoursofwork','daysofwork' ,'image1','image2','image3','image4','image5','image6'
        
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class, 'professional_id');
    }
}
