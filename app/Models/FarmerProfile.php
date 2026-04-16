<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FarmerProfile extends Model
{
    protected $fillable = [
        'user_id',
        'village',
        'cultures',
        'certifications',
        'average_rating',
        'total_sales'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
