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
          <div class="col-md-6">
            
            <div class="form-group">
              <label for="name">Nombre</label>
              <input type="text" class="form-control" id="name" v-model="payerName" maxLength="15" @keydown="nameKeydown($event)" autocomplete="off">
            </div>

          </div>

          <div class="col-md-4">
            
            <div class="form-group">
              <label for="card-number">Tipo de tarjeta</label>
              <select class="form-control" @change="cardTypeChange()" v-model="cardType">
                <option value="VISA">Visa</option>
                <option value="DINNERS">Dinners</option>
                <option value="DISCOVER">Discover</option>
                <option value="AMEX">Amex</option>
                <option value="MASTERCARD">MasterCard</option>
                        <!--<option value="NARANJA CARD">Naranja Card</option>
                          <option value="ARGENCARD CARD">Argencard Card</option>-->
                          <option value="SHOPPING CARD">Shopping Card</option>
                          <option value="CABAL CARD">Cabal Card</option>
                          <option value="CENCOSUD CARD">Cencosud Card</option>
                          <option value="HIPERCARD CARD">Hipercard Card</option>
                          <option value="CODENSA CARD">Codensa Card</option>
                        </select>
                      </div>

                    </div>

                    <div class="col-md-4">
                      
                      <div class="form-group">
                        <label for="card-number">Nro. Tarjeta</label>
                        <input type="text" class="form-control" id="card-number" v-model="cardNumber" maxLength="16" @keypress="isNumber($event)" autocomplete="off">
                      </div>

                    </div>

                    <div class="col-md-6">
                      
                      <div class="form-group">
                        <label for="cvv">CVV</label>
                        <input type="text" class="form-control" v-model="cvv" id="cvv" :maxLength="cvvMaxlength" @keypress="isNumber($event)" autocomplete="off">
                      </div>

                    </div>

                    <div class="col-md-6">
                      
                      <div class="form-group">
                        <label for="expire-date">Fecha de expiración</label>
                        <input type="text" class="form-control" id="expire-date" placeholder="2025/10" autocomplete="off">
                      </div>

                    </div>

                    <div class="col-md-12">
                      <p class="text-center">
                        <button class="btn btn-success" @click="pay()">Pagar</button>
                      </p>
                    </div>

                  </div>

                </div>

                <footer class="footer-estyle">
                  <div class="footer container mt-5 text-center">
                   <p>All Rights Reserved @  <script>
                    document.write(new Date().getFullYear());
                  </script> - LЛ＊LIBERTУ - <a data-toggle="modal" data-target=".terminos">Terms &
                  Conditions</a></p>
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
    
    let cart = JSON.parse(window.localStorage.getItem("laliberty_cart"))


    const payment = new Vue({
      el: '#payment',
      data() {
        return {
          payerName:"",
          buyerName:"",
          cardNumber:"",
          cardType:"",
          expirationDate:"",
          email:"",
          phone:"",
          dni:"",
          street:"",
          loading:false,
          cvv:"",
          cvvMaxlength:"3",
          municipalityId:"",
          departmentId:"",
          total:0
        }
      },
      watch: {
        name(val) {
          this.payerName = val.replace(/\W/g, "");
        },
      },
      methods: {
        nameKeydown(e) {
          if (/^\W$/.test(e.key)) {
            e.preventDefault();
          }
        },
        cardTypeChange(){

          if(this.cardType == "AMEX"){
            this.cvvMaxlength = "4"
          }else{
            this.cvvMaxlength = "3"
          }

        },
        pay(){            
          this.expirationDate = $("#expire-date").val()
          let splittedDate = this.expirationDate.split("/")

          if(this.payerName == "" || this.payerName == null){
            swal({
              text:"Debes ingresar un nombre",
              icon:"error"
            })
          }
          else if(this.cardNumber == "" || this.cardNumber == null){
            swal({
              text:"Debes ingresar un número de tarjeta",
              icon:"error"
            })
          }
          else if(this.cardNumber.length < 13){
            swal({
              text:"Número de tarjeta no es válido",
              icon:"error"
            })
          }
          else if(this.cardType == "" || this.cardType == null){
            swal({
              text:"Debe seleccionar un tipo de tarjeta",
              icon:"error"
            })
          }
          else if(this.cvv == "" || this.cvv == null){
            swal({
              text:"Debes ingresar un CVV",
              icon:"error"
            })
          }
          else if(this.cvv.length < 3){
            swal({
              text:"Debes ingresar un CVV válido",
              icon:"error"
            })
          }
          else if(this.expirationDate == "" || this.expirationDate == null){
            swal({
              text:"Debes ingresar una fecha de expiración",
              icon:"error"
            })
          }
          else if(this.expirationDate.length < 7){
            swal({
              text:"Debes ingresar una fecha de expiración válida",
              icon:"error"
            })
          }
          else if(parseInt(splittedDate[0]) < new Date().getFullYear()){
            swal({
              text:"Año de expiración es menor al año actual",
              icon:"error"
            })
          }
          
          else if(parseInt(splittedDate[0]) == new Date().getFullYear()){

            if(parseInt(splittedDate[1]) > 12){
              swal({
                text:"Mes de expiración no es válido",
                icon:"error"
              })
            }

            else if(parseInt(splittedDate[1]) < new Date().getMonth() + 1){
              swal({
                text:"Mes de expiración es menor al mes actual",
                icon:"error"
              })
            }

          }
          else if(parseInt(splittedDate[1]) > 12){
            swal({
              text:"Mes de expiración no es válido",
              icon:"error"
            })
          }
          

            //console.log("expirationMonth", parseInt(splittedDate[1]))
            else{
              this.loading = true
              axios.post("{{ url('/checkout') }}", {total: this.total, buyerName: this.buyerName, payerName: this.payerName, email: this.email, dni: this.dni, street: this.street, phone: this.phone, creditCard: this.cardNumber, cvv: this.cvv, expirationDate: this.expirationDate, municipalityId: this.municipalityId, departmentId: this.departmentId, products: this.products, cardType: this.cardType}).then(res => {
                this.loading = false
                if(res.data.success == true){

                  swal({
                    text: res.data.msg,
                    icon:"success"
                  }).then(res => {

                    window.localStorage.setItem("paymentStatusLaliberty", "aprobado");
                    window.location.href="{{ url('payment/status') }}"

                  })

                }else{

                  swal({
                    text: res.data.msg,
                    icon:"error"
                  })

                }

              })
            }

            

          },
          isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if ((charCode > 31 && (charCode < 48 || charCode > 57))) {
              evt.preventDefault();;
            } else {
              return true;
            }
          },
          

        },
        mounted(){

         
          this.products = JSON.parse(window.localStorage.getItem("laliberty_cart"))

          this.products.forEach((data) => {

            this.total = this.total + data.productColorSize.price

          })

          this.payerName = window.localStorage.getItem("laliberty_guest_name")
          this.buyerName = window.localStorage.getItem("laliberty_guest_name")
          this.email = window.localStorage.getItem("laliberty_guest_email")
          this.phone = window.localStorage.getItem("laliberty_guest_phone")
          this.dni = window.localStorage.getItem("laliberty_guest_dni")
          this.street = window.localStorage.getItem("laliberty_guest_address")
          this.municipalityId = window.localStorage.getItem("laliberty_municipality")
          this.departmentId = window.localStorage.getItem("laliberty_department")

        }
      });


    </script>


  </body>

  </html>