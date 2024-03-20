<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','category_image'];
    public function foods()
    {
        return $this->hasMany(Food::class);
    }
    public function stock(){
        return $this->belongsTo(Stock::class);
    }
}
