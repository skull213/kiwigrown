<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function category(){
    	return $this->belongsTo("App\Models\Category");
    }

    protected $fillable = ['name', 'description', 'photo', 'price', 'category_id'];
}
