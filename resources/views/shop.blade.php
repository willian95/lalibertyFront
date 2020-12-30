<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
  <title>LЛ＊LIBERTУ</title>


  <link rel="stylesheet" href="{{ url('assets/css/slick.css')}}">
  <link rel="stylesheet" href="{{ url('assets/css/slick-theme.css')}}">
  <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ url('assets/css/font-awesome.css')}}">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">   <link rel="stylesheet" href="assets/css/style.css">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">  <link rel="stylesheet" href="assets/css/animsition.min.css">
  <!--- <link rel="stylesheet" href="assets/css/responsive.css">--->
  

</head>

<body >
  <!--div class="animsition" -->>
    <div>

    <main style="background: #000;">
      @include("partials.header")
      <section class="mt-5 mb-5">
        <!------data-scroll-------->
        <div class="container mt-5">
          <div class="tienda">
            <div class="row">
              <div class="col-md-6">
                <img class="img-fix" src="http://imgfz.com/i/r5EbFA9.jpeg" alt="">
              </div>
              <div class="col-md-6">
                <p class="nav-link-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, consequatur eaque consectetur ad
                  quaerat odio velit sit! Commodi sapiente facere nam. Facere magni reprehenderit dicta nostrum commodi
                  tempore dolorem dolor.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-------Limited Edition--------->
      <div class="mt-5">
        <section  id="effect-title">
          <p class="title_custom mb-5 nav-link-white ">Limited Edition</p>
          @foreach(App\Product::with("productColorSizes", "productColorSizes.size", "productColorSizes.color")->get() as $product)
          <div class="card-content">
            <div class="card-transition" data-toggle="modal" data-target="#producto-modal" onclick="storeLocal(JSON.parse('{{ $product }}'))">
              <figure class="card-effect">
                <p class="ml-3">{{ $product->name }}</p>
                <img src="{{ $product->image }}" alt="" />
              <a href="#"></a>
              </figure>
            </div>
          </div>
          @endforeach
    
          </div>

        </section>
      </div>

    
      <footer>
        <div class="footer container mt-5 text-center">
   
            <p>All Rights Reserved @ 2020 - LЛ＊LIBERTУ</p>
        </div>
    </footer>
    </main>
  </div>
  <!-- partial -->
  <script src="{{ url('assets/js/script.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js">
  </script>

  <script src="{{ url('assets/js/slick.min.js') }}"></script>
  <script src="{{ url('assets/js/nav.js') }}"></script>
  <script src="{{ url('assets/js/animsition.min.js') }}"></script>

  <script>
  
    $(document).ready(function() {
      $('.animsition').animsition();
    });

    function storeLocal(productColorSize){

      window.localStorage.setItem("laliberty_product", JSON.stringify(productColorSize))
      window.localStorage.setItem("laliberty_product_flag", "1")

    }
  </script>

    <!-- Modal detalle del producto -->
  <div class="modal fade" id="producto-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">
            <p class="titulo-producto">@{{ product.name }}</p>
            <span class="precio" v-if="price != ''">$ @{{ price }}</span>
          </h5>
          <div class="carrito-icon ml-auto">
            <a href="#" data-toggle="modal" data-target="#carrito-modal">
              <svg class="carrito-icon-hoevr" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 450.391 450.391"
                style="enable-background:new 0 0 450.391 450.391;" xml:space="preserve">
                <g>
                  <g>
                    <g>
                      <path
                        d="M143.673,350.322c-25.969,0-47.02,21.052-47.02,47.02c0,25.969,21.052,47.02,47.02,47.02 c25.969,0,47.02-21.052,47.02-47.02C190.694,371.374,169.642,350.322,143.673,350.322z M143.673,423.465 c-14.427,0-26.122-11.695-26.122-26.122c0-14.427,11.695-26.122,26.122-26.122c14.427,0,26.122,11.695,26.122,26.122 C169.796,411.77,158.1,423.465,143.673,423.465z" />
                      <path
                        d="M342.204,350.322c-25.969,0-47.02,21.052-47.02,47.02c0,25.969,21.052,47.02,47.02,47.02s47.02-21.052,47.02-47.02 C389.224,371.374,368.173,350.322,342.204,350.322z M342.204,423.465c-14.427,0-26.122-11.695-26.122-26.122 c0-14.427,11.695-26.122,26.122-26.122s26.122,11.695,26.122,26.122C368.327,411.77,356.631,423.465,342.204,423.465z" />
                      <path
                        d="M448.261,76.037c-2.176-2.377-5.153-3.865-8.359-4.18L99.788,67.155L90.384,38.42 C83.759,19.211,65.771,6.243,45.453,6.028H10.449C4.678,6.028,0,10.706,0,16.477s4.678,10.449,10.449,10.449h35.004 c11.361,0.251,21.365,7.546,25.078,18.286l66.351,200.098l-5.224,12.016c-5.827,15.026-4.077,31.938,4.702,45.453 c8.695,13.274,23.323,21.466,39.184,21.943h203.233c5.771,0,10.449-4.678,10.449-10.449c0-5.771-4.678-10.449-10.449-10.449 H175.543c-8.957-0.224-17.202-4.936-21.943-12.539c-4.688-7.51-5.651-16.762-2.612-25.078l4.18-9.404l219.951-22.988 c24.16-2.661,44.034-20.233,49.633-43.886l25.078-105.012C450.96,81.893,450.36,78.492,448.261,76.037z M404.376,185.228 c-3.392,15.226-16.319,26.457-31.869,27.69l-217.339,22.465L106.58,88.053l320.261,4.702L404.376,185.228z" />
                    </g>
                  </g>
                </g>
                <g> </g>
                <g> </g>
                <g> </g>
                <g> </g>
                <g> </g>
                <g> </g>
                <g> </g>
                <g> </g>
                <g> </g>
                <g> </g>
                <g> </g>
                <g> </g>
                <g> </g>
                <g> </g>
                <g> </g>
              </svg>
            </a>
          </div>
          <button type="button" class="close pl-0 ml-4" data-dismiss="modal" aria-label="Close">
            <span style="    font-size: 40px;" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="details-product">
                <img :src="product.image" alt="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-4">
                  <strong v-if="stock != ''">
                    <p>Stock : @{{ stock }}</p>
                  </strong>
                  <div class="input-group mb-4 mt-4">
                    <select class="custom-select" id="inputGroupSelect02" v-model="selectedSize" @change="fetchColors()"> 
                      <option value="">Talla...</option>
                      <option v-for="size in sizes" :value="size">@{{ size.size }}</option>
                    </select>

                  </div>
                  <div class="input-group  mb-4 mt-4">
                    <select class="custom-select" id="inputGroupSelect02" v-model="selectedColor" @change="fetchPriceAndStock()">
                      <option value="">Color...</option>
                      <option :value="color" v-for="color in colors">@{{ color.name }}</option>
                    </select>

                  </div>
                  <!------------->
                  <a class="btn btn-1 mt-5" href="#" data-toggle="modal" data-target="#carrito-modal" v-if="productColorSizeId != ''" @click="addToCart()">
                    <svg>
                      <rect x="0" y="0" fill="none" width="100%" height="100%"></rect>
                    </svg>
                    Comprar
                  </a>

                  <a class="btn btn-1 mt-5" href="#" v-else>
                    <svg>
                      <rect x="0" y="0" fill="none" width="100%" height="100%"></rect>
                    </svg>
                    Comprar
                  </a>


                </div>
                <div class="col-md-8">
                  <p class="descripcion-produtc">@{{ product.description }}</p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- carrito modal -->

  <div class="modal fade" id="carrito-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
        
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-8">
              <div id="accordion">
                <div class="card-tab">
                  <div class="" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link btn-tab" data-toggle="collapse" data-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        Mi carrito
                      </button>
                    </h5>
                  </div>

                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      <div class="item-product" v-for="(product, index) in products">
                        <ul>
                          <li>@{{ index + 1 }}</li>
                          <li><img :src="product.product.image" alt=""></li>
                          <li>
                            <p>@{{ product.product.name }}</p>
                            <p>$ @{{ product.productColorSize.price }}</p>
                          </li>
                          <li>
                            <button type="button" class="close" @click="removeCartProduct(index)" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </li>
                        </ul>
                      </div>
            
                    </div>
                  </div>
                </div>
                <div class="card-tab">
                  <div class="" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed btn-tab mt-2" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="false" aria-controls="collapseTwo">
                        Dirección y pago
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                      <form>
                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" placeholder="Nombre" v-model="guestName">
                          </div>
                          <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" placeholder="Carrera 4 # 12 12" v-model="guestAddress">
                          </div>
                          <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" placeholder="Celular" v-model="guestPhone">
                          </div>
                         
                          <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" placeholder="email" v-model="guestEmail">
                          </div>

                          <div class="col-md-12">
                            <button class="btn btn-primary">pagar</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              
              </div>
            </div>

            <div class="col-md-4">
              <div class="resumen">
                <p class="sub-resumen">Resumen</p>
                <ul>
                  <li><p><strong>Subtotal:</strong>  $ @{{ subtotal }}</p></li>
                  <li><p><strong>Envio:</strong> $5.00</p></li>

                  <li class="border-top pt-3"><p><strong>Total:</strong>$ @{{ subtotal + 5 }}</p></li>
                </ul>
              </div>
              <p class="mt-3 mt-4">Codigo de descuento?</p>
              <input type="text" class="form-control" placeholder="info">

         
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


  <script src="{{ url('/js/app.js') }}"></script>
  <script type="text/javascript">
    const app = new Vue({
        el: '#producto-modal',
        data() {
            return {
              product:"",
              productColorSizes:"",
              sizes:[],
              colors:[],
              selectedSize:"",
              selectedColor:"",
              productColorSizeId:"",
              price:"",
              stock:""
            }
        },
        methods: {

          fetchColors(){
            this.colors = [] 
            this.price = ""
            this.stock = ""
            this.productColorSizeId=""
    
            this.productColorSizes.forEach((data) =>{

              if(data.size.id == this.selectedSize.id){

                var exists = false

                this.colors.forEach((color) => {
                  
                  if(color.id == data.color.id){
                    exists == true
                  }

                })

                if(exists == false){
                  this.colors.push(data.color)
                }

              }

            })

          },
          fetchPriceAndStock(){

            this.price = ""
            this.stock = ""

            this.productColorSizes.forEach((data) =>{

              if(data.size.id == this.selectedSize.id && data.color.id == this.selectedColor.id){

                this.price = data.price
                this.stock = data.stock
                this.productColorSizeId= data

              }

            })

          },
          addToCart(){

            var cart = JSON.parse(window.localStorage.getItem("laliberty_cart"))
            
            if(cart == null){
              cart = []
              cart.push({"productColorSize": this.productColorSizeId, "product": this.product})
            
            }else{

              cart.push({"productColorSize": this.productColorSizeId, "product": this.product})

            }

            window.localStorage.setItem("laliberty_cart", JSON.stringify(cart))
            window.localStorage.setItem("laliberty_cart_flag", "1")

          }

        },
        mounted(){

            window.setInterval(() => {

              if(window.localStorage.getItem("laliberty_product_flag") == "1"){

                window.localStorage.setItem("laliberty_product_flag", "0")
                this.product = JSON.parse(window.localStorage.getItem("laliberty_product"))
                this.productColorSizes = this.product.product_color_sizes

                this.productColorSizes.forEach((data) => {

                  var exists = false
                  this.sizes.forEach((size) => {

                    if(size.id == data.size.id){
                      exists = true
                    }

                  })

                  if(exists == false){
                    this.sizes.push(data.size)
                  }

                })

              }

            })

        }
    });

    const carrito = new Vue({
        el: '#carrito-modal',
        data() {
            return {
              products:[],
              guestName:"",
              guestAddress:"",
              guestEmail:"",
              guestPhone:""
            }
        },
        computed: {
          subtotal: function () {

            var total = 0
            this.products.forEach((data) => {
              console.log(data)
              total = total + data.productColorSize.price

            })

            return total

          }

        },
        methods: {

          removeCartProduct(id){

            this.products.splice(id, 1)
            window.localStorage.setItem("laliberty_cart", JSON.stringify(this.products))

          }

        },
        mounted(){

          this.products = JSON.parse(window.localStorage.getItem("laliberty_cart"))

            window.setInterval(() => {

              if(window.localStorage.getItem("laliberty_cart_flag") == "1"){

                window.localStorage.setItem("laliberty_cart_flag", "0")
                this.products = JSON.parse(window.localStorage.getItem("laliberty_cart"))

              }

            })

        }
    });
  </script>

</body>

</html>