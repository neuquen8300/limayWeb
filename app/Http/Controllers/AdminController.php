<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(Request $request){

        $request->user()->authorizeRoles(['admin']);

        return view('admin');
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
