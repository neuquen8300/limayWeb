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
<div class="" id='results'>
    
</div>
<script src="/js/productSearch.js"></script>
@endsection