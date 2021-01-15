@php

    $class = "";

    if($loop->index == 0){
        $class = "col-md-6 offset-md-3 col-lg-6 offset-lg-3";
    }

@endphp



@if($order->work)	
    <div class="{{ $class }} grid-item">	
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
    <div class="{{ $class }} grid-item"><!-- imagenes secundarias -->	
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
        <div class="grid-infoo">	
        <p class="grid-p">	
            <h3>{{ $order->workImage->work->title }}</h3>	
        </p>	
        </div>
    </a>	
    </div>	
    @elseif($order->product)	
    <div class="{{ $class }} grid-item ">	
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
    <div class="{{ $class }} grid-item"><!-- imagenes secundarias -->	
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
        <div class="grid-infoo">	
        <p class="grid-p">	
            <h3>{{ $order->productImage->product->name }}</h3>	
        </p>	
        </div>
    </a>	
    </div>	
    @elseif($order->blog)	
    <div class="{{ $class }} grid-item">	
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