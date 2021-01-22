<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fooditem extends Model
{
    use HasFactory;
    protected $fillable = [
        'item_name', 'price', 'foodcategory_id'
    ];

    function foodcategory(){
        return $this->belongsTo(Foodcategory::Class, 'foodcategory_id');
    }
}
