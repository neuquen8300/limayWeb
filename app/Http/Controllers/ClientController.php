<?php

namespace App\Http\Controllers;
use App\Client;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($request)
    {
        $clients = Client::where('client_id', 'like', "%$request%")->orWhere('business_name', 'like', "%$request%")->orderBy('client_id', 'DESC')->get();

        return json_encode($clients);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function doPayment(Request $request){
        
        $client = Client::where('client_id', $request->account)->first();
        
        $newBalance = $client->client_balance - $request->amount;
        $client->update(['client_balance' => $newBalance]);

        $payment = new Transaction();
        $payment->client_id = $client->client_id;
        $payment->type = 'payment';
        $payment->user_id = $request->user_id;

        $payment->save();

        return response(json_encode('ok'));
    }

    
}
