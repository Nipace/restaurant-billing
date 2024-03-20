<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodOrder extends Model
{
    protected $table = 'food_order';
    protected $fillable = ['order_id', 'food_id', 'price', 'quantity', 'scheme'];
}
