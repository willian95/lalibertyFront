@extends("layouts.main")

@section("content")

@php

  $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
  $isMob = is_numeric(strpos($ua, "mobile"));

@endphp

<section class="mt-5 mb-5">
        <!------data-scroll-------->

        <div class="container-fluid">
          <div class="row">
          @foreach(App\HomeOrder::with("work", "workImage", "workImage.work", "product", "productImage", "blog")->orderBy("order")->get() as $order)
        
            @if($loop->index < 3)

              @if($order->work)
              <div class="col-md-4">
                <a href="{{ url('/works?work='.$order->work->slug) }}">
                  @if($order->work->main_image_file_type == 'image')
                    <img src="{{ $order->work->main_image }}" alt="imagen">
                  @else
                    @if($isMob)
                    <video style="width: 100%;" controls>
                    @else
                    <video style="width: 100%;" loop autoplay="true" muted="muted">
                    @endif
                      <source src="{{ $order->work->main_image }}" type="video/mp4">
                    </video>
                  @endif
                  <div class="grid-infoo">
                    <p class="grid-p">
                      <h3>{{ $order->work->title }}</h3>
                    </p>
                  </div>
                </a>
              </div>
              @elseif($order->workImage)
              <div class="col-md-4"><!-- imagenes secundarias -->
                <a href="{{ url('/works?work='.$order->workImage->work->slug) }}">
                  @if($order->workImage->file_type == 'image')
                    <img class="img-miniatura" src="{{ $order->workImage->image }}" alt="imagen">
                  @else
                    @if($isMob)
                    <video style="width: 100%;" controls>
                    @else
                    <video style="width: 100%;" loop autoplay="true" muted="muted">
                    @endif
                      <source src="{{ $order->workImage->image }}" type="video/mp4">
                    </video>
                  @endif
                </a>
              </div>
              @elseif($order->product)
              <div class="col-md-4">
                <a href="{{ url('/shop') }}">
                  @if($order->product->main_image_file_type == 'image')
                    <img src="{{ $order->product->image }}" alt="imagen">
                  @else
                    @if($isMob)
                    <video style="width: 100%;" controls>
                    @else
                    <video style="width: 100%;" loop autoplay="true" muted="muted">
                    @endif
                      <source src="{{ $order->product->image }}" type="video/mp4">
                    </video>
                  @endif
                  <div class="grid-infoo">
                    <p class="grid-p">
                      <h3>{{ $order->product->name }}</h3>
                    </p>
                  </div>
                </a>
              </div>
              @elseif($order->productImage)
              <div class="col-md-4"><!-- imagenes secundarias -->
                <a href="{{ url('/shop') }}">
                  @if($order->productImage->file_type == 'image')
                    <img class="img-miniatura" src="{{ $order->productImage->image }}" alt="imagen">
                  @else
                    @if($isMob)
                    <video style="width: 100%;" controls>
                    @else
                    <video style="width: 100%;" loop autoplay="true" muted="muted">
                    @endif
                      <source src="{{ $order->productImage->image }}" type="video/mp4">
                    </video>
                  @endif
                  
                </a>
              </div>
              @elseif($order->blog)
              <div class="col-md-4">
                <a href="{{ url('/blog/'.$order->blog->slug) }}">
                  @if($order->blog->main_image_file_type == 'image')
                    <img src="{{ $order->blog->image }}" alt="imagen">
                  @else
                    @if($isMob)
                    <video style="width: 100%;" controls>
                    @else
                    <video style="width: 100%;" loop autoplay="true" muted="muted">
                    @endif
                      <source src="{{ $order->blog->image }}" type="video/mp4">
                    </video>
                  @endif
                  <div class="grid-infoo">
                    <p class="grid-p">
                      <h3>{{ $order->blog->title }}</h3>
                    </p>
                  </div>
                </a>
              </div>
              @endif

            @else

              @if($order->work)
              <div class="col-md-6 offset-md-3 grid-item">
                <a href="{{ url('/works?work='.$order->work->slug) }}">
                  @if($order->work->main_image_file_type == 'image')
                    <img src="{{ $order->work->main_image }}" alt="imagen">
                  @else
                    @if($isMob)
                    <video style="width: 100%;" controls>
                    @else
                    <video style="width: 100%;" loop autoplay="true" muted="muted">
                    @endif
                      <source src="{{ $order->work->main_image }}" type="video/mp4">
                    </video>
                  @endif
                  <div class="grid-infoo">
                    <p class="grid-p">
                      <h3>{{ $order->work->title }}</h3>
                    </p>
                  </div>
                </a>
              </div>
              @elseif($order->workImage)
              <div class="col-md-4 "><!-- imagenes secundarias -->
                <a href="{{ url('/works?work='.$order->workImage->work->slug) }}">
                  @if($order->workImage->file_type == 'image')
                    <img class="img-miniatura" src="{{ $order->workImage->image }}" alt="imagen">
                  @else
                    @if($isMob)
                    <video style="width: 100%;" controls>
                    @else
                    <video style="width: 100%;" loop autoplay="true" muted="muted">
                    @endif
                      <source src="{{ $order->workImage->image }}" type="video/mp4">
                    </video>
                  @endif
                </a>
              </div>
              @elseif($order->product)
              <div class="col-md-6 offset-md-3 ">
                <a href="{{ url('/shop') }}">
                  @if($order->product->main_image_file_type == 'image')
                    <img src="{{ $order->product->image }}" alt="imagen">
                  @else
                    @if($isMob)
                    <video style="width: 100%;" controls>
                    @else
                    <video style="width: 100%;" loop autoplay="true" muted="muted">
                    @endif
                      <source src="{{ $order->product->image }}" type="video/mp4">
                    </video>
                  @endif
                  <div class="grid-infoo">
                    <p class="grid-p">
                      <h3>{{ $order->product->name }}</h3>
                    </p>
                  </div>
                </a>
              </div>
              @elseif($order->productImage)
              <div class="col-md-6 offset-md-3 "><!-- imagenes secundarias -->
                <a href="{{ url('/shop') }}">
                  @if($order->productImage->file_type == 'image')
                    <img class="img-miniatura" src="{{ $order->productImage->image }}" alt="imagen">
                  @else
                    @if($isMob)
                    <video style="width: 100%;" controls>
                    @else
                    <video style="width: 100%;" loop autoplay="true" muted="muted">
                    @endif
                      <source src="{{ $order->productImage->image }}" type="video/mp4">
                    </video>
                  @endif
                  
                </a>
              </div>
              @elseif($order->blog)
              <div class="grid-item ">
                <a href="{{ url('/blog/'.$order->blog->slug) }}">
                  @if($order->blog->main_image_file_type == 'image')
                    <img src="{{ $order->blog->image }}" alt="imagen">
                  @else
                    @if($isMob)
                    <video style="width: 100%;" controls>
                    @else
                    <video style="width: 100%;" loop autoplay="true" muted="muted">
                    @endif
                      <source src="{{ $order->blog->image }}" type="video/mp4">
                    </video>
                  @endif
                  <div class="grid-infoo">
                    <p class="grid-p">
                      <h3>{{ $order->blog->title }}</h3>
                    </p>
                  </div>
                </a>
              </div>
              @endif

            @endif
          
        
          @endforeach
          </div>
        </div>

      </section>


      <section class="container">
        <iframe width= "100%" src="https://open.spotify.com/embed/playlist/4Gw7ehv7RVkyaGys4Yrbbm" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>


      <!-- SnapWidget -->
<script src="https://snapwidget.com/js/snapwidget.js"></script>
<p class="ig-title mt-4">    <img alt='logo'  src="{{ url('assets/img/cursor.png') }}"> somoslaliberty</p>
<iframe src="https://snapwidget.com/embed/906132" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:100%; "></iframe>
<div class="text-center">
  <a href="https://www.instagram.com/somoslaliberty/"> <!--<img class="siguenos" src="{{ url('assets/img/instagram.svg') }}" alt="">--> Síguenos en Instagram</a>
</div>
      </section>

@endsection