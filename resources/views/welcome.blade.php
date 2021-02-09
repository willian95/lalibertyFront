@extends("layouts.main")	

@section("content")	

@php	
  $ua = strtolower($_SERVER['HTTP_USER_AGENT']);	
  $isMob = is_numeric(strpos($ua, "mobile"));	
@endphp	

<section class="mt-5 mb-5" >	
        <!------data-scroll-------->	

  <div class="container">	
    <div class="row">	
    @foreach(App\HomeOrder::with("work", "workImage", "workImage.work", "product", "productImage", "productImage.product", "blog")->orderBy("order")->take(4)->get() as $order)	

      
      @include("partials.welcomeCards", ["order" => $order, "loop" => $loop, "isMob" => $isMob])
          


    @endforeach	

    <div id="home">
      <div v-for="content in contents">

      </div>

      <button @click="fetchContent()">loadMore</button>
    </div>

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

    <script src="{{ url('js/app.js') }}"></script>
    <script>

      const home = new Vue({
        el: '#home',
        data() {
          return {
            pages:6,
            page:2,
            contents:[]
          }
        },
        methods:{

          fetchContent(){

            axios.get("{{ url('fetch-content') }}"+"/"+page).then(res => {

              console.log("res", res)

            })

          }

        }
        
      })
    
    </script>    
    

@endpush