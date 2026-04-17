<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    protected $fillable = [
        'farmer_id',
        'buyer_id',
        'product_id',
        'last_message_at',
        'is_archived'
    ];
}
