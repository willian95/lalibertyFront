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
          @foreach(App\HomeOrder::with("work", "workImage", "workImage.work", "product", "productImage", "productImage.product", "blog")->orderBy("order")->get() as $order)	

           
            @include("partials.welcomeCards", ["order" => $order])
              	


          @endforeach	
          </div>	
        </div>	<!---->

      </section>	


      <section class="container">	
        <iframe width= "100%" src="https://open.spotify.com/embed/playlist/4Gw7ehv7RVkyaGys4Yrbbm" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>	


        <div data-mc-src="bfff06f2-8293-40d7-96fa-01fb4bb52cf0"></div>	

        <script 	
          src="https://cdn2.woxo.tech/a.js#600069b1c99e460015690ada" 	
          async data-usrc>	
        </script>	
      </section>	

@endsection 