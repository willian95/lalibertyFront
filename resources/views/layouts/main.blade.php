<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('coming/assets/img/favicon.png') }}">

    <title>LЛ＊LIBERTУ</title>


    <link rel="stylesheet" href="{{ url('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/font-awesome.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    @laravelPWA
    <link rel="stylesheet" href="{{ url('assets/css/animsition.min.css') }}">
    <link rel="stylesheet" href="assets/css/responsive.css">
    @stack("css")

</head>

<body>
    <div class="animsition">

        <main>

            @include("partials.header")

            @yield("content")

            <footer class="footer-estyle">
                <div class="footer container mt-5 text-center">

                    <p>All Rights Reserved @ 2020 - LЛ＊LIBERTУ - <a data-toggle="modal" data-target="#terminos">Terms &
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
    <!--<script src="{{ url('assets/js/nav.js') }}"></script>-->


    <script src="{{ url('assets/js/animsition.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.animsition').animsition();
        });
        $('.css-1tmxu1x').html("Venta");

    </script>

    @stack("scripts")

    <!-- Modal -->
    <div class="modal fade" id="terminos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    Realiza tu compra en la tienda virtual de True y selecciona como método de pago PAYU.
                    Completa el pago a través de la plataforma, cuando termines nos pondremos en contacto contigo
                    para
                    inicar el despacho.


                    <strong> 4. DISPONIBILIDAD DE PRENDAS</strong>
                    Todas nuestras ediciones son limitadas, los inventarios se actualizan automáticamente, sin
                    embargo,
                    se
                    pueden presentar errores en y que la prenda que compraste ya no se encuentre disponible. En este
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
</body>

</html>
