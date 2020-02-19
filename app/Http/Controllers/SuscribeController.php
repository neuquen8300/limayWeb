<?php

namespace App\Http\Controllers;

use App\Suscribe;
use Illuminate\Http\Request;

use App\Rules\NoHtml;
class SuscribeController extends Controller
{
   
    public function Suscribe(){
        return view('suscribe');
    }
    public function SuscribeSaveData(Request $request)
    {
       $this->validate($request,[
           'email' => ['required', 'email', new NoHtml]
       ]);
        $suscribe = new Suscribe();
        $suscribe->email = $request['email'];
        $suscribe->save();

       return redirect('/');

        
        
        }
    }



