@extends('layouts.app')
@section('content')
@foreach($accounts as $account)
<div class="container-fluid">
    <div class="row">
        <div class="col-12 mb-2">
            <h2>
                {{$account->business_name}}
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p>ID Cliente: <span class='semibold'>{{$account->client_id}}</span></p>
        </div>
        <div class="col-12">
            <p>Razon social: <span class='semibold'>{{$account->client_name}}</span></p>
        </div>
        <div class="col-12">
            <p>CUIT: <span class='semibold'>30-03034567-5</span></p>
        </div>
        <div class="col-12">
            <p>Dirección: <span class='semibold'>Los Aromos 432</span></p>
        </div>
        <div class="col-12">
            <p>Teléfono: <span class='semibold'>299 - 4534768</span></p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 my-4">
            <a href="tel:+2994534768" class='btn btn-shadow blue bg-lightgray'>LLAMAR</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 my-1">
            <h5>Detalle de facturación</h5>
        </div>
    </div>
    @foreach($accMovements as $movement)
    <div class="my-2">
        <div class="row">
            <div class="col-2">
                <p class='semibold'>{{date('d/m', strtotime($movement->created_at))}}</p>
            </div>
            <div class="col-6">
                <p class='semibold'>{{$movement->type}}</p>
            </div>
            <div class="col-4 text-right">
                <p class='semibold'>$ <span class='red'>{{$movement->amount}}</span></p>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <p>ID Compra: 0303456</p>
            </div>
            <div class="col-4 text-right">
                <a href="">Ver detalle</a>
            </div>
        </div>
    </div>
    @endforeach
    <div class="row">
        <div class="col-12 text-right my-2">
            <a href="" class='blue'>
                <p class='blue semibold'>Ver todo</p>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mb-3">
            <a href="/payment/{{$account->client_id}}" class='btn bg-blue white'>COBRAR</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mb-2">
            <a href="/new-order/{{$account->client_id}}" class='btn bg-blue white'>CARGAR PEDIDO</a>
        </div>
    </div>
</div>
@endforeach
@endsection 