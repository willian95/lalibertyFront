@php

$class = "";
$style = "";
if($loop->index == 0){
$style = "width: 300px;";
}
else if($loop->index == 1){
$style = "";
}
else if($loop->index == 2){
$style = "height: auto!important;";
}

else if($loop->index == 4){
$style = "";
}
else if($loop->index == 5){
$style = "margin-top: -15rem;
margin-left: -8rem;
height: 300px!important;
margin-bottom: 10rem;";
}
else if($loop->index == 6){
$style = "margin-top: -19rem;";
}else if($loop->index == 20){
$style = "margin-top: -19rem; width: 200px; margin-left: 0rem;    height: 500px;";
}


if($loop->index == 0){
$class="col-md-5  col-lg-5 ";
}

else if($loop->index == 1 || $loop->index == 17){
$class="col-md-7 col-lg-7";
}

else if($loop->index == 2){
$class = "col-md-6 offset-md-3 col-lg-6 offset-lg-3 hola";
}

else if($loop->index == 5){
$class = "col-md-4 offset-md-8 col-lg-4 offset-lg-8";
}

else if($loop->index == 6 || $loop->index == 7){
$class="col-md-6";
}

else if($loop->index == 3 || $loop->index == 4 || $loop->index == 8 || $loop->index == 9 || $loop->index == 11 || $loop->index == 12 || $loop->index == 16 || $loop->index == 19){
$class = "col-lg-12";
}

else if($loop->index == 10){
$class = "col-md-8 offset-md-4 col-lg-8 offset-lg-4";
}

else if($loop->index == 13 || $loop->index == 14 || $loop->index == 15){
$class="col-md-4 col-lg-4";
}

else if($loop->index == 18){
$class = "col-md-4 offset-md-6 col-lg-4 offset-lg-6";
}

else if($loop->index == 20){
$class ="col-md-4 col-lg-4";
}


@endphp



@if($order->work)	
<div class="{{ $class }} grid-item">	
    <a href="{{ url('/works?work='.$order->work->slug) }}">	
        @if($order->work->main_image_file_type == 'image')	
        <img src="{{ $order->work->main_image }}" alt="imagen" style="{{ $style }}">	
        @else	
        @if($isMob)	
        <video style="width: 100%;       {{ $style }}" controls poster="{{ $order->poster }}">	
            @else	
            <video style="width: 100%;         {{ $style }}" loop autoplay="true" muted="muted">	
                @endif	
                <source src="{{ $order->work->main_image }}" type="video/mp4">	
                </video>	
                @endif		
            </a>	
        </div>	
        @elseif($order->workImage)	
        <div class="{{ $class }} grid-item"><!-- imagenes secundarias -->	
            @if($order->workImage->file_type == 'image')
            <a href="{{ url('/works?work='.$order->workImage->work->slug) }}">
                @else
                <a>
                    @endif	
                    @if($order->workImage->file_type == 'image')	
                    <img class="img-miniatura" src="{{ $order->workImage->image }}" alt="imagen" style="{{ $style }}">	
                    @else	
                    @if($isMob)	
                    <video style="width: 100%; {{ $style }}" poster="{{ $order->poster }}" controls>	
                        @else	
                        <video style="width: 100%; {{ $style }}" loop autoplay="true" muted="muted">	
                            @endif	
                            <source src="{{ $order->workImage->image }}" type="video/mp4">	
                            </video>	
                            @endif	

                        </a>	
                    </div>	
                    @elseif($order->product)	
                    <div class="{{ $class }} grid-item ">
                        @if($order->product->main_image_file_type == 'image')		
                        <a href="{{ url('/shop') }}">	
                            @else
                            <a>
                                @endif
                                @if($order->product->main_image_file_type == 'image')	
                                <img src="{{ $order->product->image }}" alt="imagen" style="{{ $style }}">	
                                @else	
                                @if($isMob)	
                                <video style="width: 100%; {{ $style }}" poster="{{ $order->poster }}" controls>	
                                    @else	
                                    <video style="width: 100%; {{ $style }}" loop autoplay="true" muted="muted">	
                                        @endif	
                                        <source src="{{ $order->product->image }}" type="video/mp4">	
                                        </video>	
                                        @endif	

                                    </a>	
                                </div>	
                                @elseif($order->productImage)	
                                <div class="{{ $class }} grid-item"><!-- imagenes secundarias -->	
                                    @if($order->productImage->file_type == 'image')
                                    <a href="{{ url('/shop') }}">	
                                        @else
                                        <a>
                                            @endif
                                            @if($order->productImage->file_type == 'image')	
                                            <img class="img-miniatura" src="{{ $order->productImage->image }}" alt="imagen" style="{{ $style }}">	
                                            @else	
                                            @if($isMob)	
                                            <video style="width: 100%; {{ $style }}" poster="{{ $order->poster }}" controls>	
                                                @else	
                                                <video style="width: 100%; {{ $style }}" loop autoplay="true" muted="muted">	
                                                    @endif	
                                                    <source src="{{ $order->productImage->image }}" type="video/mp4">	
                                                    </video>	
                                                    @endif	

                                                </a>	
                                            </div>	
                                            @elseif($order->blog)	
                                            <div class="{{ $class }} grid-item">
                                                @if($order->blog->main_image_file_type == 'image')	
                                                <a href="{{ url('/blog/'.$order->blog->slug) }}">
                                                    @else
                                                    <a>
                                                        @endif	
                                                        @if($order->blog->main_image_file_type == 'image')	
                                                        <img src="{{ $order->blog->image }}" alt="imagen" style="{{ $style }}">	
                                                        @else	
                                                        @if($isMob)	
                                                        <video style="width: 100%; {{ $style }}" poster="{{ $order->poster }}" controls>	
                                                            @else	
                                                            <video style="width: 100%; {{ $style }}" loop autoplay="true" muted="muted">	
                                                                @endif	
                                                                <source src="{{ $order->blog->image }}" type="video/mp4">	
                                                                </video>	
                                                                @endif	

                                                            </a>	
                                                        </div>	
                                                        @endif