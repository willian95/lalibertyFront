@extends("layouts.main")

@section("content")

<section class="mt-5 mb-5">
        <!------data-scroll-------->

        <div class="container-fluid">
          <div class="row">
          @foreach(App\HomeOrder::with("work", "workImage", "workImage.work", "product", "productImage", "blog")->orderBy("order")->get() as $order)
        
            @if($loop->index + 1 < 3)

              @if($order->work)
              <div class="col-md-4">
                <a href="{{ url('/works?work='.$order->work->slug) }}">
                  @if($order->work->main_image_file_type == 'image')
                    <img src="{{ $order->work->main_image }}" alt="imagen">
                  @else
                    <video style="width: 100%;" controls>
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
                    <video style="width: 100%;" controls>
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
                    <video style="width: 100%;" controls>
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
                    <video style="width: 100%;" controls>
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
                    <video style="width: 100%;" controls>
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
              <div class="col-md-6 offset-md-3">
                <a href="{{ url('/works?work='.$order->work->slug) }}">
                  @if($order->work->main_image_file_type == 'image')
                    <img src="{{ $order->work->main_image }}" alt="imagen">
                  @else
                    <video style="width: 100%;" controls>
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
                    <video style="width: 100%;" controls>
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
                    <video style="width: 100%;" controls>
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
                    <video style="width: 100%;" controls>
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
                    <video style="width: 100%;" controls>
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
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-30b1c87e-828d-4d63-a66b-4ff6f7f23578"></div>
      </section>

@endsection