<?php

namespace App\Http\Controllers;

use App\User;
use App\Prices;
use App\Promo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(Request $request){
        
        $date = Prices::select('created_at')->latest()->get();
        if(isset($date[0])){
        $last = $date[0]->created_at->format('j-m-Y'); 
        }

        $promos = Promo::where('active', 1)->get();
        return view('admin/admin', compact(['last', 'promos']));
        
        
    }

    public function getNewPromo(){
        return view('admin.new-offer');
    }
    // Cargar un usuario nuevo desde el panel de admin

    public function altaUsuario(Request $request) {

        $this->validate($request, [

            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:64'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'max:64', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'in:admin,vendedor,cliente']

        ]);
        
        $user = new User();

        $user->name = $request['name'];
        $user->surname = $request['surname'];
        $user->email = $request['email'];
        $user->username = $request['username'];
        $user->password = Hash::make($request['password']);
        $user->role = $request['role'];
        $user->save();

        return view('admin/usuarionuevo');

    }
}
