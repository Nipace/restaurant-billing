<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = ['name','price','category_id','food_image'];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function stock(){
        return $this->hasOne(Stock::class,'food_id','id');
    }
    // public function stocks(){
    //     return $this->belongsToMany(Stock::class,'food_stocks', 'food_id', 'stock_id')->withPivot('quantity');
    // }
   
}
