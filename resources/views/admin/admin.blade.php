@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-6">
            @if (isset($last))
            <h6>
                Ultima vez: {{$last}}
            </h6>
            @else 
            <h6>
                No hay lista cargada.
            </h6>
            @endif
            <a href='/dashboard' class="btn bg-blue white semibold shadow-btn">
                VER VISTA VENDEDOR
            </a>
        </div>
        <div class="col-12 col-md-6">
            <h2>SUBIR LISTA DE PRECIOS</h2>
            @if($errors)
                <div class='rounded bg-rojo'>
                    @foreach ($errors->all() as $error)
                        <div class="py-2">
                            {{ $error }}
                        </div>
                    @endforeach
                </div>
            @endif
            <form method="POST" enctype="multipart/form-data" action="{{action('PricesController@Upload')}}">
                @csrf
                <div class="row">
                    <div class="col-12 py-3">
                        <label for="file">
                            <p>
                                Subir archivo:
                            </p>       
                        </label>
                        <input type="file" name="listaPrecios" class='w-100' id="file">
                    </div>
                    <div class="col-12">
                        <button class='btn white bg-blue' type="submit">SUBIR LISTA</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12 col-md-6">
            <h3>Ofertas</h3>
            <a href="/new-promo" class='btn bg-blue white semibold'>OFERTA NUEVA</a>
            @foreach($promos as $promo)
            @endforeach
        </div>
    </div>
</div>

@endsection