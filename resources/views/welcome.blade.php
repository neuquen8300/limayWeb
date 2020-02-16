<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Limay S.A.- Inicio</title>

        <!-- Fonts -->
        
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel='stylesheet' href="css/styles.css">
        <link rel="stylesheet" href='css/home.css'>
        <!-- Styles -->
        
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <a class="navbar-brand" href="#"><p class='black semibold'>LIMAY S.A.</p></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link black" href="servicios">SERVICIOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link black" href="#">NOSOTROS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link black" href="#">CONTACTO</a>
                    </li>
                </ul>
            </div>
        </nav>
    <div class="container" id='container'>
        <div class="row">
            <div class="col-12 col-md-6 text-center img-col">
                <img class='img-title img-fluid' src="img/limay.png" alt="">
            </div>
            <div class="col-12 col-md-6 h-25 title-col align-self-end">
                <h1 class='title pt-4'>Tu negocio empieza acá.</h1>
                <div class="title-cta">
                   <a href="#contact" class='btn shadow-btn white bg-blue '>CONTACTARSE</a>

                </div>
            </div>
        </div>
    </div>
    <div class="container marcas-container pt-4">
       
        <div class="row py-4">
            <div class="col-12 text-center pt-3">
                <p>Estas marcas ya nos confían su distribución:</p>
            </div>
        </div>
        <div class="row ">
            <div class="col-3 d-flex">
                <img class='img-fluid img-marca my-auto' src="img/marcas/piamontesa.png" alt="">
            </div>
            <div class="col-3 d-flex">
                <img class='img-fluid img-marca my-auto' src="img/marcas/Dulxelitos.png" alt="">
            </div>
            <div class="col-3 d-flex">
                <img class='img-fluid img-marca my-auto' src="img/marcas/aguantadora.png" alt="">
            </div>
            <div class="col-3 d-flex">
                <img class='img-fluid img-marca my-auto' src="img/marcas/fox.png" alt="">
            </div>
        </div>
        <div class="row pt-2">
            <div class="col-3 d-flex">
                <img class='img-fluid img-marca my-auto' src="img/marcas/ramolac.png" alt="">
            </div>
            <div class="col-3 d-flex">
                <img class='img-fluid img-marca my-auto' src="img/marcas/recreo.png" alt="">
            </div>
            <div class="col-3 d-flex">
                <img class='img-fluid img-marca my-auto' src="img/marcas/grassetto.png" alt="">
            </div>
            <div class="col-3 d-flex">
                <img class='img-fluid img-marca my-auto' src="img/marcas/granja3arroyos.png" alt="">
            </div>
        </div>
        
        </div>
    </div>
    <div class="container pb-4 nosotros-container">
        <div class="row">
            <div class="col-12">
                <h2 class='pt-4'>NOSOTROS</h2>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <p class='pb-3'>Desde 2015, acompañando a los comercios del alto valle, Limay comenzó su historia de manera humilde en el garage de una casa.</p>
                <p class='pb-3'>Hoy contamos con más de 250 clientes que confían en nuestro servicio de distribución de alimentos.</p>
                <p class='pb-3'>Ahora expandimos nuestras fronteras con nuestro nuevo servicio de logística a pedido del cliente.</p>
            </div>
            <div class="col-12 col-md-6">
                <div class="card bg-white">
                    <div class="map-wrapper">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3101.8951105390533!2d-68.04743758498816!3d-38.97206297955924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x960a318a37aa8e9f%3A0xa185d21933c81b64!2sInt.%20Pedro%20Linares%201578%2C%20Q8300%20Neuqu%C3%A9n!5e0!3m2!1ses!2sar!4v1581705716189!5m2!1ses!2sar" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                    <div class="m-2">
                        <h3 class='py-2'>Limay S.A.</h3>
                        <p class='semibold'>Dirección: <span class='light'>Linares 1578</span></p>
                        <p class='semibold'>Horarios: <span class='light'>Lunes a Sábados: 8hs a 14hs</span>
                        <p class='semibold'>Teléfono: <span class='light'>299 - 0303456</span></p>
                        <div class="text-right">
                            <a class='btn blue' href="tel:2990303456">LLAMAR</a> 
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    
    <div class="container pb-4 servicios-container ">
        <div class="row">
            <div class="col-12">
                <h2>
                    SERVICIOS
                </h2>
            </div>
            <div class="col-12 col-md-6 pb-2">
                <h3>Distribución</h3>
                <p class='pb-3'>Tenés negocio? Nos encargamos de abastecerte con las primeras marcas del mercado al mejor precio. </p>
                <p class='pb-3'>Abarcamos toda la zona del Alto Valle en Neuquén Capital y alrededores.</p>
                <p class='pb-3 medium'>Envío sin costo!</p>
                <a href="#" class='btn shadow-btn bg-blue white mb-3'>PEDIR LISTA DE PRECIOS</a>
            </div>
            <div class="col-12 col-md-6">
                <h3>
                    Logística
                </h3>
                <p class='pb-3'>Te acercamos a todo el Alto Valle!</p>
                <p class='pb-3'>Con vehículos de distintos portes llevamos tu carga a donde sea necesario.</p>
                <p class='pb-3'>Coordinación especial con servicios de mensajería aérea.</p>
                <a href="#" class='btn shadow-btn white bg-blue'>PEDIR COTIZACION</a>
            </div>

        </div>
    </div>
   
    <div class="container pb-4 contacto-container">
        <div class="row">
            <div class="col-12">
                <h2 class="py-4" id='contact'>ESTAMOS EN CONTACTO</h2>
            </div>
            <div class="col-12 form-col">
                <form class='form' action="{{ action('ContactController@contactSaveData') }}" method="POST">
                @csrf
                <div class="input-wrapper pb-2">
                        <label for="Nombre"><p>Nombre:</p></label>
                        <input class=' w-100' type="text" name="name" id="name" placeholder="Tu nombre" required>
                    </div>
                    <div class="input-wrapper pb-2">
                        <label for="email"><p>Email:</p></label>
                        <input class=' w-100' type="email" name="email" id="email" placeholder="TU email" required>
                    </div>
                    <div class="input-wrapper pb-2">
                        <label for="msg"><p>Algo que nos quieras decir:</p></label>
                        <textarea class=' w-100' name="user_message" id="user_message" cols="30" rows="4" placeholder="Lo que quieras"></textarea>
                    </div>
                    <button class='my-2 btn bg-blue white shadow-btn' type="submit">ENVIAR MENSAJE</button>
                </form>
            </div>
        </div>
    </div>
    <footer class='container-fluid py-4 bg-white'>
        <div class="row">
            <div class="col-12 col-md-4 d-flex ">
                <form action="" class='py-2'>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 px-0 m-0">
                                <label for="newsletter">
                                    <p class='semibold'>No te pierdas las noticias!</p>
                                </label>
                            </div>
                            <div class="col-12 px-0 pb-3">
                                <input class='w-100 bd-blue' type="email" name="newsletter" id="newsletter" placeholder="Tu email">
                            </div>
                            <div class="col-12 px-0">
                                <button type="submit" class="btn shadow-btn bg-blue white">SUSCRIBIRSE</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-4 d-flex align-items-center justify-content-center order-3 order-md-2">
                <img class='img-fluid footer-img' src="img/limay.png" alt="">
            </div>
            <div class="col-12 col-md-4 d-flex align-items-center order-2 order-md-3">
                <div class="container-fluid footer-links py-4">
                    <div class="row">
                        <div class="col-12 col-md-4 pb-4">
                            <a class='text-decoration-none' href='/servicios'><span class='semibold black'>SERVICIOS</span></a>
                        </div>
                        <div class="col-12 col-md-4 pb-4">
                            <a class='text-decoration-none' href='#nosotros'><span class='semibold black'>NOSOTROS</span></a>
                        </div>
                        <div class="col-12 col-md-4 pb-4">
                            <a class='text-decoration-none' href='#contacto'><span class='semibold black'>CONTACTO</span></a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>
@if (session('status'))
   <div class="row success-row">
            <div class="col-12 success-col mx-auto" id="contact-success">
                <div class="contact-success" >
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 p-0">
                                <p>Gracias por tu mensaje! Enseguida nos comunicamos con vos.</p>
                            </div>
                        <form action="">
                            <div class="col-12 px-0 m-0">
                                <label for="newsletter">
                                    <p class='semibold'>No te pierdas las noticias!</p>
                                </label>
                            </div>
                            <div class="col-12 px-0 pb-3">
                                <input class='w-100 bd-blue' type="email" name="newsletter" id="newsletter" placeholder="Tu email">
                            </div>
                            <div class="col-12 px-0">
                                <button type="submit" class="btn shadow-btn bg-blue white">SUSCRIBIRSE</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           
        @endif
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>

    </body>
</html>
