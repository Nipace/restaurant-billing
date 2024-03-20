<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable=['token-no','food_id','quantity','scheme','total','discount'];
    
}
