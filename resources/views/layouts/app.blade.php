<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="limay, neuquen, mayorista, alimentos, logistica, transporte, fiambres, quesos,
                                    distribucion, distribuidora, frio, catering, eventos, negocios, almacenes, despensa,
                                    kiosco, restaurant">
    <meta name="description" content="Limay S.A.S, Mayorista de alimentos. Logística y transporte. Neuquén Capital">
    <!-- CSRF Token -->
    <script type="application/ld+json">
        {
          "@context" : "http://schema.org",
          "@type" : "LocalBusiness",
          "name" : "Limay S.A.S.",
          "image" : "https://limaymayorista.com.ar/img/limaytitle.png",
          "telephone" : "299 - 5176476",
          "address" : {
            "@type" : "PostalAddress",
            "streetAddress" : "Intendente Pedro Linares 1578",
            "adressLocality" : "Neuquén",
            "postalCode" : "Q8300",
            "adressCountry" : "AR"
          },
          "geo" : {
            "@type" : "GeoCoordinates",
            "name" : "GeoCoordinates",
            "latitude" : -38.9720588,
            "longitude" : -68.0474376,
          },
          "openingHoursSpecification" : {
            "name" : "OpeningHoursSpecification",
            "@type" : "OpeningHoursSpecification",
            "dayOfWeek" : [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday"
            ],
            "opens" :  "8:00",
            "closes" : "15:00"
          }
        }
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-159554218-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-159554218-1');
    </script>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    @if (Auth::user())
    <link rel="stylesheet" href="{{asset('css/user.css')}}">
    @endif
    <!-- Line Icons -->
    <link href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white ">
            <div class="container-fluid">
                <a class="navbar-brand black" href="{{ url('/') }}">
                    <img src="{{asset('img/limaynav.png')}}" class='img-fluid img-nav' alt="">
                </a>
                <button class="navbar-toggler bd-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <i class="lni-menu black size-md"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link black" href="{{ route('login') }}">{{ __('INICIAR SESION') }}</a>
                            </li>
                            
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right bg-white" aria-labelledby="navbarDropdown">
                                    @if(Auth::user()->role == 'admin')
                                    <a class='dropdown-item' href="/admin">Panel de control </a> 
                                    @endif
                                    <a class='dropdown-item' href="/payments"> Cobros </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!--<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1713424,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>-->
<script src="js/script.js" defer></script>
</body>
</html>
