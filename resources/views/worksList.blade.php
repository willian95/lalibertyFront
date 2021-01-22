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
                                    <video  controls>
                                        <source src="{{ $work->main_image }}" type="video/mp4">
                                    </video>
                                @endif
                                
                                <p>{{ $work->client_name }}</p>
                            </a>
                        </div>
                    </div>

                @endforeach

            </div>
            <div class="row">
                {!! $works->links() !!}
            </div>
        </section>
    
    </main>

</body>