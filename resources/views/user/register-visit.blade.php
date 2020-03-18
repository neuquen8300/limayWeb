@extends ('layouts.app')
@section('content')

<div id='search-box'class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <h2>
                VISITAR CLIENTE
            </h2>
        </div>
        <div class="col-12">
            <form id='search-form' method="get">
                @csrf
                <div class="mb-3">
                    <label for="search">Buscar cliente:</label>
                    <input type="text" name='search' id='search'  class='w-100'>
                </div>
                <button type="submit" class='btn shadow-btn white bg-blue'>BUSCAR</button>
            </form>
        </div>
    </div>
</div>
<div id='results'>
   
</div>
<script src="js/search.js" ></script>

<script src="js/visitsItem.js" type="module"></script>

@endsection