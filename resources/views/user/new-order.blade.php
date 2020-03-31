@extends('layouts.app')
@section('content')

<div class="container-fluid mb-3" id=''>
    <div class="row">
        <div class="col-12">
            <h2>CARGAR PEDIDO</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p>A <span class='semibold'>{{$account->business_name}}:</span></p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 px-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-8">
                        <p>Artículo </p>
                    </div>
                    <div class="col-4">
                        <p>Costo</p>
                    </div>
                </div>  
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 px-0">
            <div class="container-fluid" id='order-list'>
            </div>
            
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <h5>Total estimado: </h5>
        </div>
        <div class="col-4">
            <h5>$ <span class='total'></span></h5>
        </div>    
    </div>
    <div class="row">
        <div class="col-12">
            <form id='search-form' method="get">
                @csrf
                <div class="mb-3">
                    <label for="search">Nombre o código de artículo</label>
                    <input type="text" name='search' id='search'  class='w-100'>
                </div>
                <button type="submit" class='btn shadow-btn white bg-blue'>BUSCAR</button>
            </form>
        </div>
    </div>
</div>
<div class="" id='confirm'>
<div class="container-fluid payment-container bg-white">
            <div class="row pt-2"> 
                   
            <div class="col-12 item py-2">
                <div class="row">
                    <div class='col-12'> 
                        <h3>Item</h3>
                    </div> 
                    <div class='col-12'> 
                        <p>COD: <span class='semibold'>1354<span></p> 
                    </div> 
                    <div class='col-12'> 
                        <p>Marca: <span class='semibold'>Ernesto Perez</span></p> 
                    </div> 
                    <div class='col-12 my-4'> 
                        <p>Cantidad: <span class='semibold'>30-03034567-2</span></p> 
                    </div> 
                </div>
            </div> 
        </div>
        <div class="row py-4 bg-white">
            <div class='col-6'> 
                <p> Nuevo saldo:</p> 
            </div> 
            <div class="col-6 text-right">
                <p class='semibold'></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class='bold'>Estás seguro?</h3>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-12 mb-3">
                <a id='pay' class='btn btn-block bg-blue white'>SI, AGREGAR</a>
            </div>
            <div class="col-12">
                <a id='goBack' class='btn btn-block bg-lightgray blue'>NO, VOLVER</a>
            </div>
        </div>
    </div>
</div>
<div class="" id='results'>
    
</div>

<script src="/js/neworder.js"></script>
@endsection