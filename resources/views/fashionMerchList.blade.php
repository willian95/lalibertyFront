<!DOCTYPE html>
<html lang="es">

<head>
    @include("partials.htmlHead")
    <!--- <link rel="stylesheet" href="assets/css/responsive.css">--->
</head>

<body>

    <main>
            
        @include("partials.header")

        <section class="fashion-new container">
                <p class="text-about mb-5 pb-5">
                Resulta paradójico que hoy importantes tiendas del mundo de la moda vendan –a no menos de 70 dólares–
                camisetas vintage estampadas con el logo de Coca Cola o la cara del Tigre Tony y logren agotados,
                mientras los estudios demuestran que la gente consume cada vez menos publicidad y hasta paga por no
                verla.

                <br>    <br>

                La moda y el diseño han sido siempre poderosas herramientas de comunicación, pero el merchandising es
                tal vez el rubro al que menos presupuesto dedican las marcas. Se tiene la idea equivocada que con bordar
                un logo en una camiseta polo la tarea esta hecha. Nuestro reto es crear objetos de deseo que la gente
                sienta orgullo de usar fuera del contexto corporativo, e incluso, esté dispuesta a pagar por ellos.
                <br>    <br>
                Lugares para estampar logos hay muchos. Lo que no había era quien pudiera mezclar conocimientos de
                publicidad y marketing, con diseño y moda para ayudar a las marcas en el complejo propósito de ponerse
                de moda entregando mensajes relevantes construidos a partir de su personalidad, estrategia y objetivos.
            </p>
            <div class="row">
                
                @foreach($fashionMerch as $merch)

                    <div class="col-md-6">
                        <div class="fashion_item">
                            <a href="{{ url('/fashion-merch/'.$merch->slug) }}">
                                @if($merch->main_image_file_type == 'image')
                                    <img src="{{ $merch->main_image }}" class="fashion-img" alt="imagen work">
                                @else
                                    <video  controls>
                                        <source src="{{ $merch->main_image }}" type="video/mp4">
                                    </video>
                                @endif
                                
                                <p>{{ $merch->client_name }}</p>
                            </a>
                        </div>
                    </div>

                @endforeach


               

            </div>
            <div class="row">
                {!! $fashionMerch->links() !!}
            </div>
        </section>
    
            <footer>
                <div class="footer container mt-5 text-center">

                    <p>All Rights Reserved @ 2020 - LЛ＊LIBERTУ</p>
                </div>
            </footer>
    </main>
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
</body>