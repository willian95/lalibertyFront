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
            <div class="row">
                
                @foreach($works as $work)

                <div class="col-md-6">
                    <div class="fashion_item">
                        <a href="{{ url('/work/'.$work->slug) }}">
                            @if($work->main_image_file_type == 'image')
                            <img src="{{ $work->main_image }}" class="fashion-img" alt="imagen work">
                            @else
                            <video controls>
                                <source src="{{ $work->main_image }}#t=0.5" type="video/mp4">
                                </video>
                                @endif
                                
                                <p>{{ $work->client_name }}</p>
                            </a>
                        </div>
                    </div>

                    @endforeach

                </div>
                <div class="row centeres">
                    {!! $works->links() !!}
                </div>
            </section>
            <footer class="footer-estyle">
               <div class="footer container mt-5 text-center">

                   <p>All Rights Reserved @  <script>
                    document.write(new Date().getFullYear());
                </script> - LЛ＊LIBERTУ - <a data-toggle="modal" data-target=".terminos">Terms &
                Conditions</a></p>
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