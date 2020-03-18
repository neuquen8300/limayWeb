<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['client_id', 'business_name', 'direction', 'business_type_id', 'client_name', 'client_phone', 'client_email', 'client_balance', 'active'];
}
