<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Limay S.A.S. - Inicio</title>

        <!-- Fonts -->
        
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel='stylesheet' href="css/styles.css">
        <link rel="stylesheet" href='css/home.css'>
        <link href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css" rel="stylesheet">
        <!-- Styles -->  
    </head>
    <body>
        
    <div class="container title-container" id='title-container'>
        <div class="row pb-4">
            <div class="col-12 col-lg-6 text-center img-col">
                <img class='img-title img-fluid title-img-anim' src="img/limaytitle.png" alt="">
            </div>
            <div class="col-12 col-lg-6 h-25 title-col align-self-end">
                <h1 class='title title-anim pt-4'>Tu negocio empieza acá.</h1>
                <div class="title-cta">
                    <a id='title-btn' class='btn shadow-btn title-btn white bg-blue title-anim'>CONTACTARSE</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
    <div class="container servicios-container blue">
        <div class="row">
            <div class="col-12 pb-3 black servicios-title">
                <h2>
                    SERVICIOS
                </h2>
            </div>
            <div class="col-12 col-lg-6 pb-2 ">
                <h3 class='black'>Distribución</h3>
                <p class='pb-3'>Tenés negocio? Nos encargamos de abastecerte con las primeras marcas del mercado al mejor precio. </p>
                <p class='medium'>Envío sin costo!</p>
                <p class='pb-3'>Abarcamos toda la zona del Alto Valle en Neuquén Capital y alrededores.</p>
                
                <a id='precios-btn' class='btn shadow-btn bg-blue white mb-3'>PEDIR LISTA DE PRECIOS</a>        
            </div>
            <div class="col-12 col-lg-6 pb-2">
                <h3 class='black'>
                    Logística
                </h3>
                <p class='pb-3'>Te acercamos a todo el Alto Valle!</p>
                <p class='pb-3'>Con vehículos de distintos portes llevamos tu carga a donde sea necesario.</p>
                <p class='pb-3'>Coordinación especial con servicios de mensajería aérea.</p>
                <a id='cotizacion-btn' class='btn shadow-btn white bg-blue'>PEDIR COTIZACION</a>
            </div>

        </div>
    </div>
    </div>
   
   <div class="container-fluid bg-blue">
   <div class="container nosotros-container white">
        <div class="row">
           
            <div class="col-12 col-md-6">
                <h2 class='nosotros-title'>NOSOTROS</h2>
                <p class='pb-3'>Desde 2015, acompañando a los comercios del alto valle, Limay comenzó su historia de manera humilde en el garage de una casa.</p>
                <p class='pb-3'>Hoy contamos con más de 250 clientes que confían en nuestro servicio de distribución de alimentos.</p>
                <p class='pb-3'>Ahora expandimos nuestras fronteras con nuestro nuevo servicio de logística a pedido del cliente.</p>
            </div>
            <div class="col-12 col-md-6">

            </div>
 
        </div>
    </div>
   </div>
   
    <div class="container-fluid">

    <div class="container contacto-container">
        <div class="row">
            <div class="col-12">
                <h2 class="pb-4" id='contact'>ESTAMOS EN CONTACTO</h2>
            </div>
            <div class="col-12 col-md-6 form-col">
                <form class='form' action="{{ action('ContactController@contactSaveData') }}" method="POST">
                @csrf
                <div class="input-wrapper pb-2">
                        <label for="Nombre"><p>Nombre:</p></label>
                        <input class=' w-100' type="text" name="name" id="name" placeholder="Tu nombre..." required>
                    </div>
                    <div class="input-wrapper pb-2">
                        <label for="email"><p>Email:</p></label>
                        <input class=' w-100' type="email" name="email" id="email" placeholder="Tu email..." required>
                    </div>
                    <div class="input-wrapper pb-2">
                        <label for="msg"><p>Algo que nos quieras decir:</p></label>
                        <textarea class=' w-100' name="user_message" id="user_message" cols="30" rows="4" placeholder='Ej: "Quiero una lista de precios para un almacén"'></textarea>
                    </div>
                    <button class='my-2 btn bg-blue white shadow-btn' type="submit">ENVIAR MENSAJE</button>
                </form>
                
            </div>
            <div class="col-12 col-md-6 contact-info-col">
                <h3 class='py-2'>Limay S.A.S.</h3>
                <p class='semibold'>Dirección: <span class='light'>Linares 1578</span></p>
                <p class='semibold'>Horarios: <span class='light'>Lunes a Sábados: 8hs a 14hs</span>
                <p class='semibold pb-4'>Teléfono: <span class='light'>299 - 5176476</span></p>
                <a class='btn shadow-btn white bg-blue' href="tel:2990303456">LLAMAR</a> 
            </div>
        </div>
    </div>
    </div>
    <div class="container-fluid bg-blue">
        <div class="container marcas-container white">
       
            <div class="row ">
               <div class="col-12 text-center ">
                   <p>Estas marcas ya nos confían su distribución:</p>
               </div>
            </div>
            <div class="row ">
                <div class="col-3 d-flex">
                    <img class='img-fluid img-marca my-auto' src="img/marcas/piamontesa.png" alt="">
                </div>
                <div class="col-3 d-flex">
                    <img class='img-fluid img-marca my-auto' src="img/marcas/laquesera.png" alt="">
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
    </div>
    
    <footer class='container-fluid py-4 bg-white'>
        <div class="row">
            <div class="col-12 col-md-4 d-flex order-2 order-md-1">
                
                <form action="/suscribe" method="POST" class='py-2'>
                @csrf
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 px-0 m-0">
                                <label for="email">
                                    <p class='semibold'>No te pierdas las noticias!</p>
                                </label>
                            </div>
                            <div class="col-12 px-0 pb-3">
                                <input class='w-100 bd-blue' type="email" name="email" id="email" placeholder="Tu email">
                            </div>
                            <div class="col-12 px-0">
                                <button type="submit" class="btn shadow-btn bg-blue white">SUSCRIBIRSE</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-4 d-flex align-items-center justify-content-center order-1 order-md-2">
                <img class='img-fluid footer-img' src="img/limaytitle.png" alt="">
            </div>
            <div class="col-12 col-md-4 d-flex align-items-center order-2 order-md-3">
                <div class="container-fluid footer-links py-4">
                    <div class="row">
                        <div class="col-6">
                            <a class='btn blue' href="">
                                <i class="lni-facebook size-md"></i>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class='btn blue'href="">
                                <i class="lni-instagram size-md"></i>
                            </a>    
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </footer>
@if (session('status'))
   <div class="row success-row">
            <div class="col-12 success-col mx-auto" id="contact-success">
                <div class="contact-success text-center" >
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 p-0">
                                <p>Gracias por tu mensaje! Enseguida nos comunicamos con vos.</p>
                            </div>
                            
                        <form class='mx-auto' action="/suscribe" method="POST">
                        @csrf    
                            <div class="col-12 px-0 m-0">
                                <label for="newsletter">
                                    <p class='semibold'>No te pierdas las noticias!</p>
                                </label>
                            </div>
                            <div class="col-12 px-0 pb-3">
                                <input class='bd-blue' type="email" name="newsletter" id="newsletter" placeholder="Tu email">
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 py-2">
                                    <button id='success-btn' type="submit" class="btn shadow-btn bg-blue white">SUSCRIBIRSE</button>
                                </div>
                            </form>
                            <div class="col-12 col-md-6 py-2">
                                <button id='not-btn' class='bg-transparent btn bd-blue blue'>Por ahora no</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           
        @endif
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>

    </body>
</html>
