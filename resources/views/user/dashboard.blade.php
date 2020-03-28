@extends ('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>
                Buen día,     
            </h2>
        </div>
        <div class="col-12">
            <h2>
                {{Auth::user()->name}}.
            </h2>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 my-4">
            <h3>
                Ofertas del día de hoy:
            </h3>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-8">
            <p>Queso tybo Windy</p>
        </div>
        <div class="col-4 text-right">
            <h5>$ 1234</h5>
        </div>
        
        <div class="col-8 blue">
            <p>con 30% de descuento</p>
        </div>
        <div class="col-4 blue text-right">
            <h5>$ 1234</h5>
        </div>
        <div class="col-6 text-muted">
            <p>COD: 0303456</p>
        </div>
        <div class="col-6 text-right">
            <a href="" >Ver artículo</a>
        </div>   
    </div>
    <div class="row mb-4">
        <div class="col-8">
            <p>Queso Azul Emperador</p>
        </div>
        <div class="col-4 text-right">
            <h5>$ 1234</h5>
        </div>
        
        <div class="col-8 blue">
            <p>con 30% de descuento</p>
        </div>
        <div class="col-4 blue text-right">
            <h5>$ 1234</h5>
        </div>
        <div class="col-6 text-muted">
            <p>COD: 0303456</p>
        </div>
        <div class="col-6 text-right">
            <a href="">Ver artículo</a>
        </div>   
    </div>
    <div class="row mb-4">
        <div class="col-12 text-right">
            <a href="">
                <h5 class='text-right blue'>
                   Ver todas las ofertas
                </h5>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mb-3">
            <a href="/registerVisit" class='btn shadow-btn white bg-blue'>REGISTRAR VISITA</a>
        </div>
        <div class="col-12 mb-3">
            <a href="" class='btn shadow-btn white bg-blue'>NUEVO CLIENTE</a>
        </div>
    </div>
    
</div>

@endsection