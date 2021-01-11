@extends("layouts.main")

@section("content")

<section class="mt-5 mb-5">
        <!------data-scroll-------->

        <div class="grid container-fluid">
          @foreach(App\HomeOrder::with("work", "workImage", "product", "productImage", "blog")->orderBy("order")->get() as $order)
         <div class="grid-top">
          <div class="grid-item ">

            @if($order->work)
            <a href="#">
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
            @elseif($order->workImage)
            <a href="#">
              @if($order->workImage->file_type == 'image')
                <img src="{{ $order->workImage->image }}" alt="imagen">
              @else
                <video style="width: 100%;" controls>
                  <source src="{{ $order->workImage->image }}" type="video/mp4">
                </video>
              @endif
            </a>
            @elseif($order->product)
            <a href="#">
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
            @elseif($order->productImage)
            <a href="#">
              @if($order->productImage->file_type == 'image')
                <img src="{{ $order->productImage->image }}" alt="imagen">
              @else
                <video style="width: 100%;" controls>
                  <source src="{{ $order->productImage->image }}" type="video/mp4">
                </video>
              @endif
              
            </a>
            @elseif($order->blog)
            <a href="#">
              @if($order->blog->main_image_file_type == 'image')
                <img src="{{ $order->blog->image }}" alt="imagen">
              @else
                <video style="width: 100%;" controls>
                  <source src="{{ $order->blog->image }}" type="video/mp4">
                </video>
              @endif
              
            </a>
            @endif

          </div>
          
         </div>
          @endforeach
        </div>

      </section>


      <section class="container">
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-30b1c87e-828d-4d63-a66b-4ff6f7f23578"></div>
      </section>

@endsection