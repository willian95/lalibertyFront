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
    
    </main>

</body>