<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['client_id', 'user_id', 'bill_type_id', 'total', 'status_id'];
    
}
