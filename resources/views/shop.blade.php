<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
  <title>LЛ＊LIBERTУ</title>

  @laravelPWA

  <link rel="stylesheet" href="{{ url('assets/css/slick.css')}}">
  <link rel="stylesheet" href="{{ url('assets/css/slick-theme.css')}}">
  <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ url('assets/css/font-awesome.css')}}">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">   <link rel="stylesheet" href="assets/css/style.css">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">  <link rel="stylesheet" href="assets/css/animsition.min.css">
  <!--- <link rel="stylesheet" href="assets/css/responsive.css">--->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="{{ url('assets/css/responsive.css') }}">
  
  <style>
    .nav-link-white {
      color: #fff !important;
    }
    @media (max-width: 767px){
      .hamburger-inner, .hamburger-inner::before, .hamburger-inner::after {
        background-color: #fff;

      }
      .offcanvas-collapse {

        background-color: #000000;
      }
    }
  </style>
</head>

<body style="background: #000;">
  <!--div class="animsition" -->>
  <div>

    <main style="background: #000;">
     <header>
      <nav class='navbar navbar-expand-md navbar-fixed-js'>
        <div class='flex-custom'>
          <a class='brand brand-xs' href='#'>
            <img alt='logo' class="invertir-color" src="{{ url('assets/img/logo-xs.png') }} ">
          </a>
          <button class='navbar-toggler p-2 border-0 hamburger hamburger--elastic d-none-lg' data-toggle='offcanvas'
          type='button'>
          <span class='hamburger-box'>
            <span class='hamburger-inner'></span>
          </span>
        </button>
        <div class='offcanvas-collapse fil' id='navbarNav'>
          <ul class='navbar-nav '>
            <div class="row">
              <div class="col-md-12 flex-custom  mt-3">
                <div class="menu-flex">
                  <li class='nav-item  '>
                    <a class='nav-link animsition-link  nav-link-white  ' href="{{ url('/') }}">HOME</a>
                  </li>
                  <li class='nav-item  '>
                    <a class='nav-link animsition-link  nav-link-white        ' href="{{ url('/works') }}">WORK</a>
                  </li>
                  <li class='nav-item '>
                    <a class='nav-link animsition-link  nav-link-white        ' href="{{ url('/fashion-merch') }}">FASHION MERCH</a>
                  </li>
                  <li class='nav-item '>
                    <a class='nav-link animsition-link nav-link-white        ' href="{{ url('/shop') }}">LIBERTY SHOP</a>
                  </li>
                  <li class='nav-item '>
                    <a class='nav-link animsition-link nav-link-white        ' href="{{ url('/about') }}">ABOUT US</a>
                  </li>
                  <li class='nav-item mr-5'>
                    <a class='nav-link animsition-link nav-link-white        ' href="{{ url('/blog') }}">BLOG</a>
                  </li>
                  
                </div>

                <div class="redes-nav">
                  <li class='nav-item mr-2'>
                    <a class='redes' href='#'>
                      <svg class="color-search         invertir-color" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <g data-name="Layer 2">
                          <g data-name="search">
                            <rect width="24" height="24" opacity="0" />
                            <path
                            d="M20.71 19.29l-3.4-3.39A7.92 7.92 0 0 0 19 11a8 8 0 1 0-8 8 7.92 7.92 0 0 0 4.9-1.69l3.39 3.4a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42zM5 11a6 6 0 1 1 6 6 6 6 0 0 1-6-6z" />
                          </g>
                        </g>
                      </svg>
                    </a>
                  </li>
                  <li class='nav-item'>
                    <a class='redes' href='https://www.instagram.com/somoslaliberty/'>
                      <svg class="color-ig         invertir-color" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"
                      viewBox="0 0 24 24">
                      <path
                      d="M17.34,5.46h0a1.2,1.2,0,1,0,1.2,1.2A1.2,1.2,0,0,0,17.34,5.46Zm4.6,2.42a7.59,7.59,0,0,0-.46-2.43,4.94,4.94,0,0,0-1.16-1.77,4.7,4.7,0,0,0-1.77-1.15,7.3,7.3,0,0,0-2.43-.47C15.06,2,14.72,2,12,2s-3.06,0-4.12.06a7.3,7.3,0,0,0-2.43.47A4.78,4.78,0,0,0,3.68,3.68,4.7,4.7,0,0,0,2.53,5.45a7.3,7.3,0,0,0-.47,2.43C2,8.94,2,9.28,2,12s0,3.06.06,4.12a7.3,7.3,0,0,0,.47,2.43,4.7,4.7,0,0,0,1.15,1.77,4.78,4.78,0,0,0,1.77,1.15,7.3,7.3,0,0,0,2.43.47C8.94,22,9.28,22,12,22s3.06,0,4.12-.06a7.3,7.3,0,0,0,2.43-.47,4.7,4.7,0,0,0,1.77-1.15,4.85,4.85,0,0,0,1.16-1.77,7.59,7.59,0,0,0,.46-2.43c0-1.06.06-1.4.06-4.12S22,8.94,21.94,7.88ZM20.14,16a5.61,5.61,0,0,1-.34,1.86,3.06,3.06,0,0,1-.75,1.15,3.19,3.19,0,0,1-1.15.75,5.61,5.61,0,0,1-1.86.34c-1,.05-1.37.06-4,.06s-3,0-4-.06A5.73,5.73,0,0,1,6.1,19.8,3.27,3.27,0,0,1,5,19.05a3,3,0,0,1-.74-1.15A5.54,5.54,0,0,1,3.86,16c0-1-.06-1.37-.06-4s0-3,.06-4A5.54,5.54,0,0,1,4.21,6.1,3,3,0,0,1,5,5,3.14,3.14,0,0,1,6.1,4.2,5.73,5.73,0,0,1,8,3.86c1,0,1.37-.06,4-.06s3,0,4,.06a5.61,5.61,0,0,1,1.86.34A3.06,3.06,0,0,1,19.05,5,3.06,3.06,0,0,1,19.8,6.1,5.61,5.61,0,0,1,20.14,8c.05,1,.06,1.37.06,4S20.19,15,20.14,16ZM12,6.87A5.13,5.13,0,1,0,17.14,12,5.12,5.12,0,0,0,12,6.87Zm0,8.46A3.33,3.33,0,1,1,15.33,12,3.33,3.33,0,0,1,12,15.33Z" />
                    </svg>
                  </a>
                </li>
              </div>
            </div>
            <div class="col-md-12  espacios-m6">
              <div class="menu-flex">

                <li class='nav-item logo_content'>
                  <a class='brand animsition-link ' href="{{ url('/') }}">
                    <img class=" invertir-color" alt='redes' src="{{ url('assets/img/logo.png') }}">

                  </a>
                  <!---   <p class="txt nav-link-white         ">We are a brand that loves to work with other brands</p>--->
                </li>

              </div>
                  <!---  <div class="col-md-12">
                      <p class="txt">We are a brand that loves to work with other brands</p>
                    </div>-->
                  </div>


                </div>

              </ul>
            </div>
          </div>
        </nav>
      </header>
      <section class="mt-5 mb-5">
        <!------data-scroll-------->
        <div class="container mt-5">
          <div class="tienda">
            <div class="row">
              <div class="col-md-12">
                <img class="img-fix  img-shoop" src="{{ url('assets/img/02_foto_rigofred-min.jpg') }}" alt="">

              </div>
              <div class="col-md-12">
                <p class="nav-link-white top-text">Esta no es una marca de moda más. De hecho, es justamente lo contrario. Una marca diseñada para liberarnos de las tendencias que nos obligan a comprar masivamente prendas que luego son condenadas a acumular polvo en los armarios. Las consecuencias ambientales y las condiciones laborales que se derivan de esta práctica son aterradoras. La*Liberty es una marca de vestuario básico y atemporal creada para envejecer de forma natural resistiendo los caprichos de la moda. Ropa que redefine el concepto de exclusividad no desde el precio sino desde los pequeños detalles y las ediciones limitadas. Esta inspirada en la libertad y su mensaje siempre será más relevante que el nombre del diseñador, por eso decimos que fue creada para quienes prefieren llamar la antención por el estilo de sus ideas antes que por su forma de vestir.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-------Limited Edition--------->
      <div class="mt-5">
        <section  id="effect-title">
          <p class="title_custom mb-5 nav-link-white ">Limited Edition</p>
          <div class="card-content">
            @foreach(App\Product::with("productColorSizes", "productColorSizes.size", "productColorSizes.color", "secondaryImages")->get() as $product)

            <div class="card-transition" data-toggle="modal" data-target="#producto-modal" onclick="storeLocal(JSON.parse('{{ $product }}'))">
              <figure class="card-effect">
                <p class="ml-3">{{ $product->name }}</p>
                @if($product->main_image_file_type == 'image')
                <img src="{{ $product->image }}" alt="" />
                @else
                <video style="width: 100%;" controls>
                  <source src="{{ $product->image }}#t=0.5" type="video/mp4">
                  </video>
                  @endif
                  <a href="#"></a>
                </figure>
              </div>

              @endforeach
            </div>
          </div>

        </section>
      </div>


      <footer>
        <div class="footer container mt-5 text-center">

         <p style="color: #fff;">All Rights Reserved @  <script>
          document.write(new Date().getFullYear());
        </script> - LЛ＊LIBERTУ - <a data-toggle="modal" data-target=".terminos">Terms &
        Conditions</a></p>
      </div>
    </footer>
  </main>
</div>
<!-- partial -->
<script src="{{ url('assets/js/script.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js">
</script>

<script src="{{ url('assets/js/slick.min.js') }}"></script>
<script src="{{ url('assets/js/nav.js') }}"></script>
<script src="{{ url('assets/js/animsition.min.js') }}"></script>

<script>

  $(document).ready(function() {
    $('.animsition').animsition();
  });

  function storeLocal(productColorSize){

    window.localStorage.removeItem("laliberty_product")
    window.localStorage.setItem("laliberty_product", JSON.stringify(productColorSize))
    window.localStorage.setItem("laliberty_product_flag", "1")

  }
</script>
<!-- Modal -->
<div class="modal fade terminos" id="terminos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <p class="modal-title" id="exampleModalLabel"> <strong> TERMINOS Y CONDICIONES</strong></p>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body termins">
      <p>


        <strong> 1. ENVÍOS</strong>
        Todos los envíos se realizan desde la ciudad de Bogotá. En la ciudad se entregan en un plazo de
        1 a
        3
        días. A ciudades principales se entregarán entre 4 y 8 días hábiles, a las ciudades secundarias,
        entre
        8 y 12 días hábiles. Las transportadoras con las cuales trabajamos son 472 y Envía . En caso tal
        de
        que estas empresas no lleguen a tu ubicación, nos adaptamos a la que nos sugieras. El envío es
        gratis
        por compras desde $150.000, si es menor a este valor, pagarías un máximo de 10.000 pesos por el
        valor
        del flete.

        <strong> 2. POLÍTICA DE DEVOLUCIONES Y REEMBOLSOS</strong>
        Puedes devolver tu compra realizada en nuestra tienda online, en un plazo de 20 días desde la
        fecha
        de
        recepción del paquete y te reembolsaremos el valor total.
        PARA CAMBIOS O DEVOLUCIONES POR FAVOR PONTE EN CONTACTO por Wapp al 320 3045593


        <strong> 2.1 POLÍTICA DE CAMBIOS Y GARANTÍAS</strong>
        Se podrán realizar cambios de talla o artículo a través de Servicio al Cliente por whatsapp, en
        un
        plazo de 20 días desde la fecha de recepción del paquete. Se puede elegir cualquier artículo de
        cambio, si es de menor valor se devuelve la diferencia, si es de mayor valor, el cliente da el
        excedente del dinero.

        Para cambios y devoluciones el cliente asume los costos de los envíos necesarios.

        <strong> 2.2 NO ACEPTAMOS CAMBIOS NI DEVOLUCIONES EN LOS SIGUIENTES CASOS</strong>
        Si las prendas se han dañado por un mal uso o negligencia (exposición a productos químicos,
        calor,
        objetos afilados, etc.)
        Si la prenda presenta cualquier señal de uso, mal olor, sudoración, maquillaje, manchas, etc.

        No se sustituirán los productos dañados por el uso y el desgaste normales que se produzcan por
        el
        uso
        natural del producto.

        <strong> 2.3 INSTRUCCIONES DE DEVOLUCIÓN DE PRODUCTOS</strong>
        Para devolver un producto, sigue estas instrucciones:
        Comunícate por Wapp al 320 3045593 y asegúrate que tienes la siguiente información a mano:

        Nombre y cédula de quién realizó la compra
        Número de pedido
        Fecha del pedido
        Dirección de recogida
        Número de teléfono
        Nuestro equipo te indicará si tu solicitud es autorizada de acuerdo a nuestra política de
        devoluciones
        anteriormente especificadas.


        Si tu solicitud es autorizada, debes enviar el paquete a la siguiente dirección en Bogotá
        Carrera 17
        A
        # 106 A 07 Ap. 404.

        <strong> 3. FORMAS DE PAGO. (Crédito o en efectivo a través de PAYU)</strong>
        Recibimos tus pagos de cualquier tarjeta de crédito, débito o efectivo (Efecty, Gana, Baloto) a
        través
        de PAYU.
        Realiza tu compra en la tienda virtual y selecciona como método de pago PAYU.
        Completa el pago a través de la plataforma, cuando termines nos pondremos en contacto contigo
        para
        inicar el despacho.


        <strong> 4. DISPONIBILIDAD DE PRENDAS</strong>
        Todas nuestras ediciones son limitadas, los inventarios se actualizan automáticamente, sin
        embargo,
        se
        pueden presentar errores y que la prenda que compraste ya no se encuentre disponible. En este
        caso
        te notificaremos a través de correo, whatsapp o llamada telefónica y te daremos la opción de
        escoger
        otro producto o de recibir el reembolso de tu dinero.


        <strong> 5. VERIFICACIÓN DE PAGOS</strong>
        Los pagos realizados con tarjeta de crédito deben ser previamente verificados . Eventualmente se
        le
        pedirá al comprador enviarnos una foto del documento de identidad del titular de la tarjeta para
        hacer
        dicha verificación y de esta manera evitar fraudes , suplantaciones de identidad y futuros
        inconvenientes con la entidad bancaria.


        <strong> 6. POLÍTICA DE TRATAMIENTO DE INFORMACIÓN Y DATOS PERSONALES</strong>
        Este sitio web cuida y respeta los datos personales de los usuarios ya registrados dentro de
        nuestra
        base de datos por compras realizadas a través de la tienda en línea (plataforma digital).

        No será solicitada información personal que no sea relevante para nosotros como marca y para
        ustedes
        como usuarios.
        No compartiremos información personal con terceros.
        No obstante y con el propósito de ofrecer un mejor servicio, podríamos enviar información
        promocional
        de la marca.


        CONTACTO
        Si tienes inquietudes con tus envíos, o quieres hacernos alguna consulta específica, puedes
        contactarnos rápidamente por Wapp al 320 3045593 Recuerda que nuestro horario de atención por
        este
        medio es de Lunes a viernes de 9 am a 5 pm.
      </p>
    </div>

  </div>
</div>
</div>
<!-- Modal detalle del producto -->
<div class="modal fade" id="producto-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle">
        <p class="titulo-producto">@{{ product.name }}</p>
        <span class="precio" v-if="price != ''">$ @{{ price }}</span>
      </h5>
      <div class="carrito-icon ml-auto">
        <a href="#" data-toggle="modal" data-target="#carrito-modal">
          <svg class="carrito-icon-hoevr" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 450.391 450.391"
          style="enable-background:new 0 0 450.391 450.391;" xml:space="preserve">
          <g>
            <g>
              <g>
                <path
                d="M143.673,350.322c-25.969,0-47.02,21.052-47.02,47.02c0,25.969,21.052,47.02,47.02,47.02 c25.969,0,47.02-21.052,47.02-47.02C190.694,371.374,169.642,350.322,143.673,350.322z M143.673,423.465 c-14.427,0-26.122-11.695-26.122-26.122c0-14.427,11.695-26.122,26.122-26.122c14.427,0,26.122,11.695,26.122,26.122 C169.796,411.77,158.1,423.465,143.673,423.465z" />
                <path
                d="M342.204,350.322c-25.969,0-47.02,21.052-47.02,47.02c0,25.969,21.052,47.02,47.02,47.02s47.02-21.052,47.02-47.02 C389.224,371.374,368.173,350.322,342.204,350.322z M342.204,423.465c-14.427,0-26.122-11.695-26.122-26.122 c0-14.427,11.695-26.122,26.122-26.122s26.122,11.695,26.122,26.122C368.327,411.77,356.631,423.465,342.204,423.465z" />
                <path
                d="M448.261,76.037c-2.176-2.377-5.153-3.865-8.359-4.18L99.788,67.155L90.384,38.42 C83.759,19.211,65.771,6.243,45.453,6.028H10.449C4.678,6.028,0,10.706,0,16.477s4.678,10.449,10.449,10.449h35.004 c11.361,0.251,21.365,7.546,25.078,18.286l66.351,200.098l-5.224,12.016c-5.827,15.026-4.077,31.938,4.702,45.453 c8.695,13.274,23.323,21.466,39.184,21.943h203.233c5.771,0,10.449-4.678,10.449-10.449c0-5.771-4.678-10.449-10.449-10.449 H175.543c-8.957-0.224-17.202-4.936-21.943-12.539c-4.688-7.51-5.651-16.762-2.612-25.078l4.18-9.404l219.951-22.988 c24.16-2.661,44.034-20.233,49.633-43.886l25.078-105.012C450.96,81.893,450.36,78.492,448.261,76.037z M404.376,185.228 c-3.392,15.226-16.319,26.457-31.869,27.69l-217.339,22.465L106.58,88.053l320.261,4.702L404.376,185.228z" />
              </g>
            </g>
          </g>
          <g> </g>
          <g> </g>
          <g> </g>
          <g> </g>
          <g> </g>
          <g> </g>
          <g> </g>
          <g> </g>
          <g> </g>
          <g> </g>
          <g> </g>
          <g> </g>
          <g> </g>
          <g> </g>
          <g> </g>
        </svg>
      </a>
    </div>
    <button type="button" class="close pl-0 ml-4" data-dismiss="modal" aria-label="Close">
      <span style="    font-size: 40px;" aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <div class="row ">
      <div class="col-md-6">
        <div class="details-product">

          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div id="custCarousel" class="carousel slide" data-ride="carousel" >
                  <!-- slides -->
                  <div class="carousel-inner" id="inner-carousel">
                    <div class="carousel-item active"> 
                      <img :src="product.image" alt="imagen de producto" v-if="product.main_image_file_type == 'image'"> 
                      <video style="width: 100%;" controls v-else>
                        <source :src="product.image+'#t=0.5'" type="video/mp4">
                        </video>
                      </div>

                    </div> <!-- Left right -->
                    <a class="carousel-control-prev" href="#custCarousel" data-slide="prev"> <span class="carousel-control-prev-icon"></span> </a> <a class="carousel-control-next" href="#custCarousel" data-slide="next"> <span class="carousel-control-next-icon"></span> </a> <!-- Thumbnails -->
                    <ol class="carousel-indicators list-inline" id="bottom-carousel">
                      <li class="list-inline-item active"> <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#custCarousel"> 
                      <img :src="product.image" v-if="product.main_image_file_type == 'image'" class="img-fluid"> <span v-else>Video</span> </a> </li>

                    </ol>
                  </div>
                </div>
              </div>
            </div>
            <!-------<img :src="product.image" alt="">--->
          </div>
        </div>
        <div class="col-md-6">
          <div class="row reverse-info">
            <div class="col-md-4">
              <strong v-if="stock != ''">
                <p>Stock : @{{ stock }}</p>
              </strong>
              <div class="input-group mb-4 mt-4">
                <select class="custom-select" id="inputGroupSelect02" v-model="selectedSize" @change="fetchColors()"> 
                  <option value="">Talla...</option>
                  <option v-for="size in sizes" :value="size">@{{ size.size }}</option>
                </select>

              </div>
              <div class="input-group  mb-4 mt-4">
                <select class="custom-select" id="inputGroupSelect02" v-model="selectedColor" @change="fetchPriceAndStock()">
                  <option value="">Color...</option>
                  <option :value="color" v-for="color in colors">@{{ color.name }}</option>
                </select>

              </div>
              <!------------->
              <a class="btn btn-1 mt-5" href="#" data-toggle="modal" data-target="#carrito-modal" v-if="productColorSizeId != ''" @click="addToCart()">
                <svg>
                  <rect x="0" y="0" fill="none" width="100%" height="100%"></rect>
                </svg>
                Comprar
              </a>

              <a class="btn btn-1 mt-5" href="#" v-else>
                <svg>
                  <rect x="0" y="0" fill="none" width="100%" height="100%"></rect>
                </svg>
                Comprar
              </a>


            </div>
            <div class="col-md-8">
              <div class="descripcion-product" v-html="product.description"></div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- carrito modal -->

<div class="modal fade" id="carrito-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header">

      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <div style="position: fixed; background: rgba(0, 0, 0, 0.5); top: 0; bottom:0; width: 100%; z-index: 99;" v-if="paymentLoader == true"></div>

    <div class="modal-body">
      <div class="row reverse-info">
        <div class="col-md-8">
          <div id="accordion">
            <div class="card-tab">
              <div class="" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link btn-tab tab-arrow" data-toggle="collapse" data-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">
                  Mi carrito

                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 284.929 284.929" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g>
                    <g xmlns="http://www.w3.org/2000/svg">
                      <path d="M282.082,76.511l-14.274-14.273c-1.902-1.906-4.093-2.856-6.57-2.856c-2.471,0-4.661,0.95-6.563,2.856L142.466,174.441   L30.262,62.241c-1.903-1.906-4.093-2.856-6.567-2.856c-2.475,0-4.665,0.95-6.567,2.856L2.856,76.515C0.95,78.417,0,80.607,0,83.082   c0,2.473,0.953,4.663,2.856,6.565l133.043,133.046c1.902,1.903,4.093,2.854,6.567,2.854s4.661-0.951,6.562-2.854L282.082,89.647   c1.902-1.903,2.847-4.093,2.847-6.565C284.929,80.607,283.984,78.417,282.082,76.511z" fill="#ffffff" data-original="#000000" style=""/>
                    </g>
                    <g xmlns="http://www.w3.org/2000/svg">
                    </g>
                    <g xmlns="http://www.w3.org/2000/svg">
                    </g>
                    <g xmlns="http://www.w3.org/2000/svg">
                    </g>
                    <g xmlns="http://www.w3.org/2000/svg">
                    </g>
                    <g xmlns="http://www.w3.org/2000/svg">
                    </g>
                    <g xmlns="http://www.w3.org/2000/svg">
                    </g>
                    <g xmlns="http://www.w3.org/2000/svg">
                    </g>
                    <g xmlns="http://www.w3.org/2000/svg">
                    </g>
                    <g xmlns="http://www.w3.org/2000/svg">
                    </g>
                    <g xmlns="http://www.w3.org/2000/svg">
                    </g>
                    <g xmlns="http://www.w3.org/2000/svg">
                    </g>
                    <g xmlns="http://www.w3.org/2000/svg">
                    </g>
                    <g xmlns="http://www.w3.org/2000/svg">
                    </g>
                    <g xmlns="http://www.w3.org/2000/svg">
                    </g>
                    <g xmlns="http://www.w3.org/2000/svg">
                    </g>
                  </g></svg>


                </button>
              </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                <div class="item-product" v-for="(product, index) in products">
                  <ul>
                    <li class="numero">@{{ index + 1 }}</li>
                    <li><img :src="product.product.image" alt=""></li>
                    <li>
                      <p>@{{ product.product.name }}</p>
                      <p>$ @{{ product.productColorSize.price }}</p>
                    </li>
                    <li class="trash-product">
                      <button type="button" class="close" @click="removeCartProduct(index)" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </li>
                  </ul>
                </div>

              </div>
            </div>
          </div>
          <div class="card-tab">
            <div class="" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed btn-tab mt-2 tab-arrow" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="false" aria-controls="collapseTwo">
                Dirección y pago
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 284.929 284.929" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g>
                  <g xmlns="http://www.w3.org/2000/svg">
                    <path d="M282.082,76.511l-14.274-14.273c-1.902-1.906-4.093-2.856-6.57-2.856c-2.471,0-4.661,0.95-6.563,2.856L142.466,174.441   L30.262,62.241c-1.903-1.906-4.093-2.856-6.567-2.856c-2.475,0-4.665,0.95-6.567,2.856L2.856,76.515C0.95,78.417,0,80.607,0,83.082   c0,2.473,0.953,4.663,2.856,6.565l133.043,133.046c1.902,1.903,4.093,2.854,6.567,2.854s4.661-0.951,6.562-2.854L282.082,89.647   c1.902-1.903,2.847-4.093,2.847-6.565C284.929,80.607,283.984,78.417,282.082,76.511z" fill="#ffffff" data-original="#000000" style=""/>
                  </g>
                  <g xmlns="http://www.w3.org/2000/svg">
                  </g>
                  <g xmlns="http://www.w3.org/2000/svg">
                  </g>
                  <g xmlns="http://www.w3.org/2000/svg">
                  </g>
                  <g xmlns="http://www.w3.org/2000/svg">
                  </g>
                  <g xmlns="http://www.w3.org/2000/svg">
                  </g>
                  <g xmlns="http://www.w3.org/2000/svg">
                  </g>
                  <g xmlns="http://www.w3.org/2000/svg">
                  </g>
                  <g xmlns="http://www.w3.org/2000/svg">
                  </g>
                  <g xmlns="http://www.w3.org/2000/svg">
                  </g>
                  <g xmlns="http://www.w3.org/2000/svg">
                  </g>
                  <g xmlns="http://www.w3.org/2000/svg">
                  </g>
                  <g xmlns="http://www.w3.org/2000/svg">
                  </g>
                  <g xmlns="http://www.w3.org/2000/svg">
                  </g>
                  <g xmlns="http://www.w3.org/2000/svg">
                  </g>
                  <g xmlns="http://www.w3.org/2000/svg">
                  </g>
                </g></svg>

              </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">

              <div class="row">
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" placeholder="Nombre" v-model="guestName">
                </div>
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" placeholder="Carrera 4 # 12 12" v-model="guestAddress">
                </div>
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" placeholder="Celular" v-model="guestPhone">
                </div>

                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" placeholder="email" v-model="guestEmail">
                </div>

                @if(env('PAYU_ENV') == 'local')
                <form method="post" action="https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/" id="form-pay">
                  @else
                  <form method="post" action="https://checkout.payulatam.com/ppp-web-gateway-payu/" id="form-pay">
                    @endif
                    <input name="merchantId"    type="hidden"  value="{{ env('PAYU_MERCHANT_ID') }}"   >
                    <input name="accountId"     type="hidden"  value="{{ env('PAYU_ACCOUNT_ID') }}" >
                    <input name="description"   type="hidden"  value="Compra la liberty shop"  >
                    <input name="referenceCode" type="hidden"  v-model="referenceCode" >
                    <input name="amount"        type="hidden"  v-model="total"   >
                    <input name="tax"           type="hidden"  value="0"  >
                    <input name="taxReturnBase" type="hidden"  value="0" >
                    <input name="currency"      type="hidden"  value="COP" >
                    <input name="signature"     type="hidden"  v-model="signature"  >
                    @if(env('PAYU_ENV') == 'local')
                    <input name="test"          type="hidden"  value="1" >
                    @else
                    <input name="test"          type="hidden"  value="0" >
                    @endif
                    <input name="buyerFullName"    type="hidden"  v-model="guestName" >
                    <input name="buyerEmail"    type="hidden"  v-model="guestEmail" >
                    <input name="responseUrl"    type="hidden"  value="{{ url('/payment/response') }}" >
                    <input name="confirmationUrl"    type="hidden"  value="{{ url('/payment/confirmation') }}" >
                  </form>

                  <div class="col-md-12">
                    <button type="button" class="btn btn-primary" @click="payment()">pagar</button>
                  </div>
                </div>

              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="col-md-4">
        <div class="resumen">
          <p class="sub-resumen">Resumen</p>
          <ul>
            <li><p><strong>Subtotal:</strong>  $ @{{ subtotal }}</p></li>
            <!--<li><p><strong>Envio:</strong> $5.00</p></li>-->

            <li class="border-top pt-3"><p><strong>Total:</strong>$ @{{ subtotal }}</p></li>
          </ul>
        </div>
              <!--<p class="mt-3 mt-4">Codigo de descuento?</p>
                <input type="text" class="form-control" placeholder="info">-->


              </div>
            </div>
          </div>

        </div>
      </div>
    </div>


    <script src="{{ url('/js/app.js') }}"></script>
    <script type="text/javascript">

      var childWind = null

      const app = new Vue({
        el: '#producto-modal',
        data() {
          return {
            product:"",
            productColorSizes:"",
            sizes:[],
            colors:[],
            selectedSize:"",
            selectedColor:"",
            productColorSizeId:"",
            secondaryImages:[],
            price:"",
            stock:""
          }
        },
        methods: {

          fetchColors(){
            this.colors = [] 
            this.price = ""
            this.stock = ""
            this.productColorSizeId=""

            this.productColorSizes.forEach((data) =>{

              if(data.size.id == this.selectedSize.id){

                var exists = false

                this.colors.forEach((color) => {

                  if(color.id == data.color.id){
                    exists == true
                  }

                })

                if(exists == false){
                  this.colors.push(data.color)
                }

              }

            })

          },
          fetchPriceAndStock(){

            this.price = ""
            this.stock = ""

            this.productColorSizes.forEach((data) =>{

              if(data.size.id == this.selectedSize.id && data.color.id == this.selectedColor.id){

                this.price = data.price
                this.stock = data.stock
                this.productColorSizeId= data

              }

            })

          },
          addToCart(){

            var cart = JSON.parse(window.localStorage.getItem("laliberty_cart"))
            
            if(cart == null){
              cart = []
              cart.push({"productColorSize": this.productColorSizeId, "product": this.product})

            }else{

              cart.push({"productColorSize": this.productColorSizeId, "product": this.product})

            }

            window.localStorage.setItem("laliberty_cart", JSON.stringify(cart))
            window.localStorage.setItem("laliberty_cart_flag", "1")

          }

        },
        mounted(){

          window.setInterval(() => {

            if(window.localStorage.getItem("laliberty_product_flag") == "1"){

              this.secondaryImages = []
              window.localStorage.setItem("laliberty_product_flag", "0")
              this.product = JSON.parse(window.localStorage.getItem("laliberty_product"))
              this.productColorSizes = this.product.product_color_sizes
              this.secondaryImages = this.product.secondary_images

              $("#inner-carousel").empty()
              $("#bottom-carousel").empty()

              this.secondaryImages.forEach((data,index) => {

                if(data.file_type == 'image'){
                  $("#inner-carousel").append("<div class='carousel-item'> <img src='"+data.image+"' > </div>")
                  $("#bottom-carousel").append("<li class='list-inline-item'> <a id='carousel-selector-"+(index+1)+"' data-slide-to='"+(index+1)+"' data-target='#custCarousel'> <img src='"+data.image+"' class='img-fluid'> </a> </li>")
                  
                }else{

                  $("#inner-carousel").append("<div class='carousel-item'><video style='width: 100%;' controls> <source src='"+data.image+"' type='video/mp4'></video></div>")
                  $("#bottom-carousel").append("<li class='list-inline-item'> <a id='carousel-selector-"+(index+1)+"' data-slide-to='"+(index+1)+"' data-target='#custCarousel'> <span>Video</span> </a> </li>")

                }


              })

              this.sizes = []
              this.colors = []

              this.productColorSizes.forEach((data) => {

                var exists = false
                this.sizes.forEach((size) => {

                  if(size.id == data.size.id){
                    exists = true
                  }

                })

                if(exists == false){
                  this.sizes.push(data.size)

                  this.selectedSize = this.sizes[0]

                  this.colors = [] 
                  this.price = ""
                  this.stock = ""
                  this.productColorSizeId=""

                  this.productColorSizes.forEach((data) =>{

                    if(data.size.id == this.selectedSize.id){

                      var exists = false

                      this.colors.forEach((color) => {

                        if(color.id == data.color.id){
                          exists == true
                        }

                      })

                      if(exists == false){
                        this.colors.push(data.color)
                        this.selectedColor = this.colors[0]
                        this.fetchPriceAndStock()
                      }

                    }

                  })
                }


              })




            }

          }, 500)

        }
      });


const carrito = new Vue({
  el: '#carrito-modal',
  data() {
    return {
      products:[],
      guestName:"",
      guestAddress:"",
      guestEmail:"",
      guestPhone:"",
      paymentLoader:false,
      departments:[],
      municipalities:[],
      department:"",
      municipality:"",
      intervalID:null,
      referenceCode:"",
      signature:"",
      total:0
    }
  },
  computed: {
    subtotal: function () {

      var total = 0
      this.products.forEach((data) => {

        total = total + data.productColorSize.price

      })
      this.total = total
      return total

    }

  },
  methods: {

    removeCartProduct(id){

      this.products.splice(id, 1)
      window.localStorage.setItem("laliberty_cart", JSON.stringify(this.products))

    },
    payment(){

      if(this.guestName == "" || this.guestName == null){
        swal({
          text:"Debes ingresar un nombre",
          icon:"error"
        })
      }
      else if(this.guestAddress == "" || this.guestAddress == null){
        swal({
          text:"Debes ingresar un email",
          icon:"error"
        })
      }
      else if(this.guestPhone == "" || this.guestPhone == null){
        swal({
          text:"Debes ingresar un teléfono",
          icon:"error"
        })
      }

      else{

        window.localStorage.setItem("laliberty_guest_name", this.guestName)
        window.localStorage.setItem("laliberty_guest_address", this.guestAddress)
        window.localStorage.setItem("laliberty_guest_email", this.guestEmail)
        window.localStorage.setItem("laliberty_guest_phone", this.guestPhone)
        window.localStorage.setItem("laliberty_department", this.department)
        window.localStorage.setItem("laliberty_municipality", this.municipality)
        window.localStorage.setItem("laliberty_guest_dni", this.guestDNI)

        this.paymentLoader = true
        this.getSignature()

              //childWind = window.open("{{ url('payment') }}", 'print_popup', 'width=600,height=600');
              //this.intervalID = window.setInterval(this.checkWindow, 500);
              

            }

          },
          getSignature(){

            axios.post("{{ url('/getSignature') }}", {total: this.total}).then(res => {

              this.signature = res.data.hash
              this.referenceCode = res.data.reference
              this.storePayment()
              

            })

          },
          storePayment(){

            axios.post("{{ url('/payment/store') }}", {total: this.total, reference: this.referenceCode, email: this.guestEmail, name: this.guestName, address: this.guestAddress, phone: this.guestPhone, products: this.products}).then(res => {

              if(res.data.success == true){
                window.setTimeout(() => {
                  document.getElementById("form-pay").submit()
                }, 1000);
              }
            }); 

          },
          checkWindow() {

            if (childWind && childWind.closed) {
              window.clearInterval(this.intervalID);
              this.paymentLoader = false
              if (localStorage.getItem("paymentStatusLaliberty") == 'aprobado') {
                localStorage.removeItem("paymentStatusLaliberty")
                window.location.href = "{{ url('/') }}"
                  } /*else if (localStorage.getItem("paymentStatusAida") == 'rechazado') {
                      window.location.reload()
                    }*/
                  }
                },
                fetchDepartments(){

                  axios.get("{{ url('/departments') }}").then(res => {
                    this.departments = res.data.departments
                  })

                },
                fetchMunicipalities(){

                  axios.get("{{ url('/municipalities') }}"+"/"+this.department).then(res => {
                    this.municipalities = res.data.municipalities
                  })

                },


                checkProductColorSize(id, indexReview){

                  axios.get("{{ url('/products/color/size/') }}"+"/"+id).then(res => {
                    var cart = JSON.parse(window.localStorage.getItem("laliberty_cart"))

                    if(res.data.success == true){
                      if(res.data.product.stock > 0){

                        cart[indexReview].price = res.data.product.price
                        cart[indexReview].stock = res.data.product.stock
                        cart[indexReview].productColorSize.price = res.data.product.price

                      }else{
                        cart.splice(indexReview, 1)
                      }


                    }else{
                      cart.splice(indexReview, 1)
                    }

                    window.localStorage.setItem("laliberty_cart", JSON.stringify(cart))
                    this.products = cart

                  })

                },
                reviewCart(){

                  var cart = JSON.parse(window.localStorage.getItem("laliberty_cart"))
                  if(cart != null){
                    cart.forEach((data, index) => {

                      this.checkProductColorSize(data.productColorSize.id, index)


                    })

                  }

                }

              },
              mounted(){

                this.reviewCart()
                this.fetchDepartments()

                this.products = JSON.parse(window.localStorage.getItem("laliberty_cart"))

                window.setInterval(() => {

                  if(window.localStorage.getItem("laliberty_cart_flag") == "1"){

                    window.localStorage.setItem("laliberty_cart_flag", "0")
                    this.products = JSON.parse(window.localStorage.getItem("laliberty_cart"))

                  }

                })

              }
            });
          </script>

        </body>

        </html>