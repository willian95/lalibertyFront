@extends("layouts.main")	

@section("content")	

@php	
  $ua = strtolower($_SERVER['HTTP_USER_AGENT']);	
  $isMob = is_numeric(strpos($ua, "mobile"));	

  if($isMob == ""){
    $isMob = 0;
  }

@endphp	

<section class="mt-5 mb-5" >	
        <!------data-scroll-------->	

  <div class="container">	
    <div class="row">	
      @foreach(App\HomeOrder::with("work", "workImage", "workImage.work", "product", "productImage", "productImage.product", "blog")->orderBy("order")->take(4)->get() as $order)	

        
        @include("partials.welcomeCards", ["order" => $order, "loop" => $loop, "isMob" => $isMob])
            


      @endforeach	
    </div>
    <div id="home" class="row">
      
    </div>

      <p id="scroll-to">
        
      </p>
    </div>	
  </div>	<!---->

</section>	


      <section class="container">	
        <iframe width= "100%" src="https://open.spotify.com/embed/playlist/4Gw7ehv7RVkyaGys4Yrbbm" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>	


        <div class="mt-8" data-mc-src="bfff06f2-8293-40d7-96fa-01fb4bb52cf0"></div>	

        <script 	
          src="https://cdn2.woxo.tech/a.js#600069b1c99e460015690ada" 	
          async data-usrc>	
        </script>	
      </section>	

@endsection 

@push("scripts")

  <script>

    var pages = 6, page = 2;

    var element_position = ""

    $(window).on('scroll', function() {
        var y_scroll_pos = window.pageYOffset;
        var scroll_pos_test = element_position;

        console.log("scroll", y_scroll_pos)

        if(y_scroll_pos > scroll_pos_test) {
          fetchContent()
        }
    });

    function fetchContent(){

      $.get("{{ url('/fetch-content/') }}"+"/"+page+"/"+"{{ $isMob }}", function(res){

        res.html.forEach((data) => {

          $("#home").append(data)

        })

        page++

      })

    }

    window.setInterval(() => {
      element_position = $('#scroll-to').offset().top;
    }, 1000)

  </script>
    

@endpush