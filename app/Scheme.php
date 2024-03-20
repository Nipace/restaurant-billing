<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scheme extends Model
{
    protected $fillable = [
        'food_id', 'quantity', 'status', 'start_date', 'end_date'
    ];
    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}
