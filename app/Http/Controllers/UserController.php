<?php

namespace App\Http\Controllers;
use App\Client;
use App\Transaction;
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
        $accMovements = Transaction::where('client_id', $id)->limit(2)->get();

        return view('user.client', compact('accounts','accMovements'));
    }

    public function getPayment(int $id){
        $accounts = Client::where('client_id', $id)->first();
        
        return view('user.payment', compact('accounts'));
    }
    public function getConfirmPayment(){
        return view('admin.confirm-payment');
    }

    public function getNewOrder($id) {
        $account = Client::where('client_id', $id)->firstOrFail();
        return view('user.new-order', compact('account'));
    }
    public function getPromos(){
        return view('user.promos');
    }
}
