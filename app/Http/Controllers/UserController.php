<?php

namespace App\Http\Controllers;
use App\Client;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('user.dashboard');
    }
    public function getRegisterVisit(){
        return view('user.register-visit');
    }
    public function getClient(int $id) {
        $accounts = Client::where('client_id', $id)->get();
       
        return view('user.client', compact('accounts'));
    }

    public function getPayment(int $id){
        $accounts = Client::where('client_id', $id)->get();
        return view('user.payment', compact('accounts'));
    }
    public function getConfirmPayment(){
        return view('admin.confirm-payment');
    }

    public function getNewOrder($id) {
        return view('user.new-order');
    }
}
