<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'sub_total', 'grand_total', 'token_no', 'scheme', 'status','table'];

    public function foods()
    {
        return $this->belongsToMany('App\Food')->withPivot('quantity', 'price', 'scheme');
    }
    public function orderFoods()
    {
        return $this->hasMany(FoodOrder::class, 'order_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
