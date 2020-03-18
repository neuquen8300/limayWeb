@extends('layouts.app')
@section('content')
@foreach($accounts as $account)
<div class="container-fluid" id='confirmPaymentContainer'>
    <div class="row">
        <div class="col-12">
            <h2>COBRAR</h2>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-12">
            <h3>{{$account->business_name}}</h3>
        </div>
        <div class="col-6">
            <p>Saldo:</p>
        </div>
        <div class="col-6 text-right">
            <p class='semibold'>$ <span>{{$account->client_balance}}</span></p>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <h5>Detalle de facturación</h5>
        </div>
    </div>
    <div class="row py-2 bg-grayblue">
        <div class="col-12">
            <div class="row">
                <div class="col-2">
                    <p class='semibold'>20/04</p>
                </div>
                <div class="col-6">
                    <p class='semibold'>Compra</p>
                </div>
                <div class="col-4 text-right">
                    <p class='semibold'>$ <span class='red'>5000</span></p>
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
            <div class="row">
                <div class="col-2">
                    <p class='semibold'>20/04</p>
                </div>
                <div class="col-6">
                    <p class=''>Pago a cuenta</p>
                </div>
                <div class="col-4 text-right">
                    <p class='semibold'>$ 2000</span></p>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <p class='semibold'>20/04</p>
                </div>
                <div class="col-6">
                    <p class=''>Pago a cuenta</p>
                </div>
                <div class="col-4 text-right">
                    <p class='semibold'>$ 2000</span></p>
                </div>
            </div>    
        </div>
    </div>
    <div class="row py-2 bg-grayblue">
        <div class="col-12">
            <div class="row">
                <div class="col-2">
                    <p class='semibold'>20/04</p>
                </div>
                <div class="col-6">
                    <p class='semibold'>Compra</p>
                </div>
                <div class="col-4 text-right">
                    <p class='semibold'>$ <span class='red'>5000</span></p>
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
            <div class="row">
                <div class="col-2">
                    <p class='semibold'>20/04</p>
                </div>
                <div class="col-6">
                    <p class=''>Pago a cuenta</p>
                </div>
                <div class="col-4 text-right">
                    <p class='semibold'>$ 2000</span></p>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <p class='semibold'>20/04</p>
                </div>
                <div class="col-6">
                    <p class=''>Pago a cuenta</p>
                </div>
                <div class="col-4 text-right">
                    <p class='semibold'>$ 2000</span></p>
                </div>
            </div>    
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12">
            <form id='amount-form' action="">
                @csrf
                <label for="amount">Monto a cobrar:</label>
                    <input type="text" class='w-100 mb-3' name='amount' id='amount'>
                    <input type="hidden" name='account' value='{{$account->client_id}}'>
                <button type="submit" class='btn shadow-btn white bg-blue w-100'>COBRAR</button>
            </form>
        </div>
    </div>
</div>

<div id='confirmPayment'>
</div>


@endforeach
<script src="/js/confirmPayment.js"></script>
@endsection