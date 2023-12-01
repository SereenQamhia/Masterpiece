<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JoinUs extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','user_id','description', 'email','image','cv','location',
        'experience', 'age','gender', 'price',  'profission',
        'completed_jobs','provider_id', 'hoursofwork','daysofwork' ,'image1','image2','image3','image4','image5','image6'
        
    ];

    public function provider()
    {
    return $this->belongsTo(Provider::class, 'provider_id');
    }
}
