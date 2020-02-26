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

    // Almacenar el mail enviado desde el campo suscribirse en el footer
    
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



