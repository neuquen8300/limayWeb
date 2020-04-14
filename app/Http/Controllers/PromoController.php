<?php

namespace App\Http\Controllers;

use App\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function getPromos(){
        $promos = Promo::where('active', 1)->get();
        return $promos;
    }
    public function newPromo(Request $request){
        
    }
}
