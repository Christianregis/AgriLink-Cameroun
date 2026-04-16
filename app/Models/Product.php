<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'quantity',
        'unit',
        'price',
        'min_order_qte',
        'price_negotiable',
        'harvest_date',
        'expire_at',
        'status',
        'views_count'
    ];
}
