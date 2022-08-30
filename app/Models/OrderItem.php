<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory, UUID;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'quantity',
        'price',
        'amount',
        'order_id',
        'food_id',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function foods()
    {
        return $this->belongsTo(Food::class);
    }
}
