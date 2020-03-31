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
</div>
<div class="container-fluid mb-3 search-container bg-white">
    <div class="row search-row">
        <div class="col-12">
            <form id='search-form' method="get">
                @csrf
                <div class="container-fluid ">
                    <div class="row px-0 ">
                        <div class="col-8 d-flex align-items-center">
                            <input type="text" name='search' id='search' class='w-100' placeholder='Nombre o código de artículo'>
                        </div>
                        <div class="col-4">
                            <button type="submit" class='btn blue'><i class='lni lni-search size-md'></i></button>   
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="confirm d-none" id='confirm'>
    <div class="container-fluid payment-container bg-white">
        <div class="row pt-2">            
            <div class="col-12 py-2">
                <div class="row">
                    <div class='col-12'> 
                        <h3 class='item-title'>Item</h3>
                    </div> 
                    <div class='col-12'> 
                        <p>COD: <span class='semibold item-cod'>1354<span></p> 
                    </div> 
                    <div class='col-12'> 
                        <p>Marca: <span class='semibold item-brand'>Ernesto Perez</span></p> 
                    </div> 
                    <div class='col-12'> 
                        <p>Precio: <span class='semibold item-price'>$12</span></p> 
                    </div>
                    <div class="col-12">
                        <p>Cantidad:</p>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-4 px-0">
                                    <a class='btn blue' id='minusAmount'>
                                        <i class='lni lni-minus size-md'></i>                                        
                                    </a>
                                </div>
                                <div class="col-4">
                                    <input class="w-100 h-100 text-center h4 semibold blue" type="text" id="productAmount" disabled value="1">
                                </div>
                                <div class="col-4 px-0 text-center">
                                    <a class='btn blue' id='plusAmount'>
                                        <i class='lni lni-plus size-md'></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div> 
        </div>
        <div class="row text-center mt-3">
            <div class="col-6">
                <input type='radio' name='articleType' id='unidad'>
                <label for="caja">Caja</label>
            </div>
            <div class="col-6">
                <input type="radio" name="articleType" id="unidad">
                <label for="unidad">Unidad</label>
            </div>
        </div>
        <div class="row py-4 bg-white">
            <div class='col-6'> 
                <p> Sub-total: <span class='subtotal semibold'></span></p> 
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
                <a id='addBtn' class='btn btn-block bg-blue white'>SI, AGREGAR</a>
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