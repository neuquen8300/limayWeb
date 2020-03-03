@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-6">
            <span></span>
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
    </div>
</div>

@endsection