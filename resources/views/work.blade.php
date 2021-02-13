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

            <section class="container mt-5 pt-5">
                <div>
                    <div class="row">
                        <div class="col-md-5">
                            @if($work->main_image_file_type == 'image')
                                <img class="cliente-img" src="{{ $work->main_image }}" alt="">
                            @else
                                <video controls>
                                    <source src="{{ $work->main_image }}#t=0.5" type="video/mp4">
                                </video>
                            @endif
                        </div>
                        <div class="col-md-7">
                            <div class="texto-client">
                                <div>{!! $work->description !!}</div>
                            </div>
                        </div>
                        <div id="effect-title" class="mt-5"></div>
                        <div class="galleria-client mt-5">
                            <!----GALERIA------>                                  
                                
                                    
                                    <div class="grid container-fluid">
                                        @foreach(App\WorkImage::where("work_id", $work->id)->get() as $workImage)
                                        <div class="grid-item img-works ">  
                                            @if($workImage->file_type == "image")                                         
                                            <img
                                            src="{{ $workImage->image }}"
                                            alt="">     
                                            @else
                                                <video  controls>
                                                    <source src="{{ $workImage->image }}#t=0.5" type="video/mp4">
                                                </video>
                                            @endif                                                                                    
                                        </div>
                                        @endforeach
                                    </div>
                                    
                            
                            
                            <!----GALERIA------>
                        </div>
                                
                        

                    </div>

                </div>
            </section>


            <footer>
                <div class="footer container mt-5 text-center">

                   <p>All Rights Reserved @  <script>
                    document.write(new Date().getFullYear());
                </script> - LЛ＊LIBERTУ - <a data-toggle="modal" data-target="#terminos">Terms &
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

    <script src="{{ url('assets/js/slick.min.js')}}"></script>
    <script src="{{ url('assets/js/nav.js') }}"></script>

    <script>
        /* Demo purposes only */
        $(".hover").mouseleave(
            function () {
                $(this).removeClass("hover");
            }
        );
        
    </script>


</body>

</html>