<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_id', 'name', 'brand', 'category_id', 'price', 'active', 'by_weight'];
}
