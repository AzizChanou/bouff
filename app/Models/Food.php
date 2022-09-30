<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'price',
        'picture_path',
        'status',
        'description',
        'eatery_id',
        'food_category_id'
    ];

    public function eatery()
    {
        return $this->belongsTo(Eatery::class);
    }

    public function foodcategory()
    {
        return $this->belongsTo(FoodCategory::class);
    }
}
