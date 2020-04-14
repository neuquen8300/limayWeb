@extends ('layouts.app')
@section('content')

<div class="container-fluid mb-3 mt-n4 search-container bg-white">
    <div class="row search-row">
        <div class="col-12">
            <form id='search-form' method="get">
                @csrf
                <div class="container-fluid ">
                    <div class="row ">
                        <div class="col-10 d-flex align-items-center px-0">
                            <input type="text" name='search' id='search' class='w-100' placeholder='Nombre o número de cliente'>
                        </div>
                        <div class="col-2 px-0 d-flex align-items-center ">
                            <button type="submit" class='search-submit blue w-100'><i class='lni lni-search size-sm'></i></button>   
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div id='results'>
   
</div>
<script src="js/search.js" ></script>

<script src="js/visitsItem.js" type="module"></script>

@endsection