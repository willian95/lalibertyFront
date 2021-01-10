<!DOCTYPE html>
<html lang="es">

<head>
    @include("partials.htmlHead")
    <!--- <link rel="stylesheet" href="assets/css/responsive.css">--->
</head>

<body>
    <div>

        <main>
            @include("partials.header")
            <section>
                <!------data-scroll-------->
                <div class="container mt-5">
                    <div class="video-about">
                        <img src="{{ url('assets/img/banedera.jpg') }}" alt="">
                    </div>

                    <div class="container mt-4">
                        <p class="text-about">Somos una marca que ama trabajar con otras marcas. No somos una agencia que hace camisetas, sino una marca que sabe hacer campañas y que se resiste a seguir los caprichos de la moda. Somos nuevos pero llevamos más de 20 años en el mundo de las ideas trabajando para algunas de las marcas más importantes del mundo y las agencias más grandes del país.
                            <br><br>
                            Somos independientes y operamos sin sedes ni muros. Cobramos la experiencia, no el edificio, Creemos en el diseño, la tecnología, el entretenimiento, las colaboraciones, lo hecho a mano y a la medida. Creemos en los emprendedores, en la libertad de expresión, de culto, de género y orientación sexual. Nos obsesiona lograr relevancia cultural e impacto social, antes que premios. Estamos convencidos que desde la comunicación no sólo podemos ayudar a las marcas a lograr sus objetivos, sino también a construir un mundo mejor –y lo creemos desde mucho antes del COVID-19–.
                           
                            No sólo compartimos lo que creamos, sino todo en lo que creemos, hay espacio para la escritura, la música, el diseño, la moda… No buscamos clientes, sino amigos para divertirnos haciendo crecer los negocios. Bienvenidos a La*Liberty</p>


                        <div class="servicios-about mt-5 mb-5">
                            <div class="row">
                                <div class="col-md-3">
                                    <h3>DIGITAL CRAFTS      </h3>
                                    <ul class="service-list">
                                        <li>-Social media management</li>
                                        <li>-Creative content</li>
                                        <li>-Animation graphics</li>
                                        <li>Web design</li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <h3>BRAND STYLING   </h3>
                                    <ul class="service-list">
                                        <li>-Naming</li>
                                        <li>-Brand design</li>
                                        <li>-Brand personality</li>
                                        <li>-Packaging</li>
                                        <li>-Photo concept</li>
                                        <li>-Fashion Merch</li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <h3>COMMUNICATION DESIGN 	</h3>
                                    <ul class="service-list">
                                        <li>-Strategic stotytelling</li>
                                        <li>-Brand experience.</li>
                                        <li>-Brand movies</li>
                                        <li>-Art Prints</li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <h3>BEYOND DESIGN	</h3>
                                    <ul class="service-list">
                                        <li>-Fashion design</li>
                                        <li>-Space design</li>
                                        <li>-Editorial design </li>
                                        <li>-Objetcs design</li>
                                        <li>-Shopwindow design</li>
                                    </ul>
                                </div>
                            </div>
                        </div>



                        <ul class="person mt-5">
                            <li>
                                <p>Rigoski</p>
                                <img class="person-img" src="{{ url('assets/img/rigo.JPG') }}" alt="">
                                <div class="redes">
                                    <a href=""><img src="assets/img/iconos/whatsapp.svg" alt=""></a>
                                    <a href=""><img src="assets/img/iconos/linkedin.svg" alt=""></a>
                                    <a href=""><img src="assets/img/iconos/mail.svg" alt=""></a>
                                </div>
                            </li>
                            <li><p>Freddyski</p>
                                <img class="person-img" src="{{ url('assets/img/freddy.JPG') }}" alt="">
                                <div class="redes">
                                    <a href=""><img src="assets/img/iconos/whatsapp.svg" alt=""></a>
                                    <a href=""><img src="assets/img/iconos/linkedin.svg" alt=""></a>
                                    <a href=""><img src="assets/img/iconos/mail.svg" alt=""></a>
                                </div></li>
                        </ul>
                    </div>
                </div>
            </section>





            <footer>
                <div class="footer container mt-5 text-center">

                    <p>All Rights Reserved @ 2020 - LЛ＊LIBERTУ</p>
                </div>
            </footer>
        </main>
    </div>
    <!-- partial -->
    <script src="assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js">
    </script>

    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/nav.js"></script>

    <script>
        /* Demo purposes only */
        $(".hover").mouseleave(
            function () {
                $(this).removeClass("hover");
            }
        );
    </script>

    <!-- Modal detalle del producto -->
    <div class="modal fade" id="producto-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">
                        <p class="titulo-producto">Jacket - limited</p>
                        <span class="precio">$100.000</span>
                    </h5>
                    <div class="carrito-icon ml-auto">
                        <a href="">
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
                    <div class="row">
                        <div class="col-md-6">
                            <div class="details-product">


                                <img src="http://imgfz.com/i/yhKapEl.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <strong>
                                        <p>Stock : 2/5</p>
                                    </strong>
                                    <div class="input-group mb-4 mt-4">
                                        <select class="custom-select" id="inputGroupSelect02">
                                            <option selected>Talla...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>

                                    </div>
                                    <!------------->
                                    <div class="input-group  mb-4 mt-4">
                                        <select class="custom-select" id="inputGroupSelect02">
                                            <option selected>Color...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>

                                    </div>
                                    <!------------->
                                    <a class="btn btn-1 mt-5" href="#" data-toggle="modal" data-target="#carrito-modal">
                                        <svg>
                                            <rect x="0" y="0" fill="none" width="100%" height="100%"></rect>
                                        </svg>
                                        Comprar
                                    </a>


                                </div>
                                <div class="col-md-8">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum itaque magnam
                                        culpa, numquam
                                        molestiae, molestias eligendi voluptas doloremque vero mollitia esse non dolorum
                                        consectetur
                                        quisquam voluptatem distinctio sunt pariatur harum. <br><br> Lorem ipsum dolor
                                        sit amet consectetur
                                        adipisicing elit. Iusto inventore nesciunt sunt, atque enim assumenda aliquid
                                        doloribus ullam
                                        tempora? Error minus, pariatur cupiditate atque architecto est. Rerum vitae
                                        cumque minima.</p>
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
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div id="accordion">
                                <div class="card-tab">
                                    <div class="" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link btn-tab" data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Mi carrito
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="item-product">
                                                <ul>
                                                    <li>1</li>
                                                    <li><img src="http://imgfz.com/i/yhKapEl.png" alt=""></li>
                                                    <li>
                                                        <p>Nombre producto</p>
                                                        <p>$999.000</p>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="item-product">
                                                <ul>
                                                    <li>2</li>
                                                    <li><img src="http://imgfz.com/i/yhKapEl.png" alt=""></li>
                                                    <li>
                                                        <p>Nombre producto</p>
                                                        <p>$999.000</p>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
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
                                            <button class="btn btn-link collapsed btn-tab mt-2" data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                Dirección y pago
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <input type="text" class="form-control" placeholder="Nombre">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <input type="text" class="form-control"
                                                            placeholder="Carrera 4 # 12 12">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <input type="text" class="form-control" placeholder="Celular">
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <input type="text" class="form-control" placeholder="info">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="resumen">
                                <p class="sub-resumen">Resumen</p>
                                <ul>
                                    <li>
                                        <p><strong>Subtotal:</strong> $1,998.00</p>
                                    </li>
                                    <li>
                                        <p><strong>Envio:</strong> $5.00</p>
                                    </li>

                                    <li class="border-top pt-3">
                                        <p><strong>Total:</strong>$2.003.00</p>
                                    </li>
                                </ul>
                            </div>
                            <p class="mt-3 mt-4">Codigo de descuento?</p>
                            <input type="text" class="form-control" placeholder="info">


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>