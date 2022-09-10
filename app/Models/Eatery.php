<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Eatery extends Model implements Viewable
{
    use HasFactory, UUID, InteractsWithViews;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'label',
        'ifu',
        'rccm',
        'description',
        'picture_path',
        'logo_path',
        'open_hour',
        'closed_hour',
        'cookingtime',
    ];

    public function foods()
    {
        return $this->hasMany(Food::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
