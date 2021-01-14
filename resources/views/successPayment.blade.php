

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/img/favicon.png') }}">
  <title>LЛ＊LIBERTУ</title>


  <link rel="stylesheet" href="{{ url('assets/css/slick.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/slick-theme.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/font-awesome.css') }}">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">   <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">

  <link rel="stylesheet" href="{{ url('assets/css/animsition.min.css') }}">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <style>

			.loader-cover-custom{
				position: fixed;
				left:0;
				right: 0;
				z-index: 99999999;
				background-color: rgba(0, 0, 0, 0.6);
				top: 0;
				bottom: 0;
			}

			.loader-custom {
				margin-top:45vh;
				margin-left: 45%;
				border: 16px solid #f3f3f3; /* Light grey */
				border-top: 16px solid #3498db; /* Blue */
				border-radius: 50%;
				width: 120px;
				height: 120px;
				animation: spin 2s linear infinite;
			}
			
			@keyframes spin {
				0% { transform: rotate(0deg); }
				100% { transform: rotate(360deg); }
			}

		</style>

    @stack("css")
  <!--- <link rel="stylesheet" href="assets/css/responsive.css">--->
</head>

<body>
  <div>

    <main>
      

        <div class="container" id="payment">

          <div class="loader-cover-custom" v-if="loading == true">
            <div class="loader-custom"></div>
          </div>

            <div class="row">
                <div class="col-md-12">
                  @if($payment["message"] == 'APPROVED')
                  <h3 style="text-align: center;">Gracias por tu compra</h3>
                  <p style="text-align: center;">Hemos enviado un correo con tu resumen de compra</p>
                  @else
                  <h3 style="text-align: center;">Hubo un problema con su pago</h3>
                  @endif

                  <p style="text-align: center;">Referencia: @{{ reference }}</p>
                </div>
                <div class="col-md-6">
                    
                    <div class="form-group">
                      <label for="name">Nombre</label>
                      <input type="text" class="form-control" id="name" v-model="name" readonly>
                    </div>

                </div>
                <div class="col-md-6">
                    
                    <div class="form-group">
                      <label for="name">Email</label>
                      <input type="text" class="form-control" id="name" v-model="email" readonly>
                    </div>

                </div>

                <div class="col-md-6">
                    
                    <div class="form-group">
                      <label for="name">Dirección</label>
                      <input type="text" class="form-control" id="name" v-model="address" readonly>
                    </div>

                </div>

                <div class="col-md-6">
                    
                    <div class="form-group">
                      <label for="name">Teléfono</label>
                      <input type="text" class="form-control" id="name" v-model="phone" readonly>
                    </div>

                </div>

                @if($payment["message"] == 'APPROVED')
                <div class="col-md-12">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Producto</th>
                        <th>Talla</th>
                        <th>Color</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="product in products">
                        <td><p>@{{ product.product.name }}</p><img class="img-pay" style="width: 40%;" :src="product.product.image" alt=""></td>
                        <td>@{{ product.productColorSize.size.size }}</td>
                        <td>@{{ product.productColorSize.color.name }}</td>
                        <td>1</td>
                        <td>@{{ product.productColorSize.price }}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                @endif

                <div class="col-md-12">
                  <p class="text-center">
                    <button class="btn btn-success" @click="accept()">Aceptar</button>
                  </p>
                </div>

            </div>

        </div>

      <footer class="footer-estyle">
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
    /*$(document).ready(function() {
      $('.animsition').animsition();
    });*/


  </script>
  <script src="{{ url('/js/app.js') }}"></script>
  <script src="{{ url('js/jquery.mask.min.js') }}"></script>
    
    <script>
      
      $(document).ready(function(){
        $('#expire-date').mask('0000/00');
      })
    </script>

  <script>

    const payment = new Vue({
        el: '#payment',
        data() {
            return {
              buyerName:"",
              email:"",
              phone:"",
              address:"",
              reference:"{{ $payment['referenceCode'] }}",
              loading:false,
              total:0
            }
        },
        methods: {
          accept(){            
            
            window.location.href="{{ url('/') }}"

          },

          

        },
        mounted(){

          this.payerName = window.localStorage.getItem("laliberty_guest_name")
          this.name = window.localStorage.getItem("laliberty_guest_name")
          this.email = window.localStorage.getItem("laliberty_guest_email")
          this.phone = window.localStorage.getItem("laliberty_guest_phone")
          this.address = window.localStorage.getItem("laliberty_guest_address")

          this.products = JSON.parse(window.localStorage.getItem("laliberty_cart"))
          
          axios.post("{{ url('/payment/check') }}", {products: this.products, message: "{{ $payment['message'] }}", referenceCode: this.reference, email: this.email}).then(res => {

            if(res.data.success == false){
              swal({
                text:res.data.msg,
                icon: "error"
              })
            }

          })

          this.products.forEach((data) => {

            this.total = this.total + data.productColorSize.price

          })

          

          @if($payment['message'] == 'APPROVED')
            window.localStorage.removeItem("laliberty_guest_name")
            window.localStorage.removeItem("laliberty_guest_name")
            window.localStorage.removeItem("laliberty_guest_email")
            window.localStorage.removeItem("laliberty_guest_phone")
            window.localStorage.removeItem("laliberty_guest_dni")
            window.localStorage.removeItem("laliberty_guest_address")
            window.localStorage.removeItem("laliberty_municipality")
            window.localStorage.removeItem("laliberty_department")
            window.localStorage.removeItem("laliberty_cart")
          @endif

        }
    });


  </script>


</body>

</html>