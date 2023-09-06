<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Order;



class Product extends Model
{
    use HasFactory;

    public function orders(): BelongsToMany{
        return $this->belongsToMany(Order::class)
        ->withPivot('total_quantity', 'total_price');
    }

    public function getPriceAttribute($value)
    {
        return str_replace('.', ',', $value / 100) . '€';
    }

}
