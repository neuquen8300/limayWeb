<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prices extends Model
{
    protected $table = 'lista_de_precios';
    protected $fillable = ['path', 'file_extension'];
}
