<!DOCTYPE html>
<html lang="es">

<head>
  @include("partials.htmlHead")
  <!--- <link rel="stylesheet" href="assets/css/responsive.css">--->
</head>

<body>
  
  <div >

    <div>
      @include("partials.header")

      <section>
        <p class="main_title-general"></p>
        <div class="timeline-container" id="timeline-1">
          <div class="timeline">
            
          </div>
        </div>
      </section>
      <br><br><br><br><br>
      <footer class="footer-estyle">
        <div class="footer container mt-5 text-center">

          <p>All Rights Reserved @  <script>
            document.write(new Date().getFullYear());
          </script> - LЛ＊LIBERTУ - <a data-toggle="modal" data-target=".terminos">Terms &
          Conditions</a></p>
        </div>
      </footer>
    </div>
  </div>
      <!-- partial -->
      <script src="assets/js/script.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js">
      </script>

      <script src="assets/js/slick.min.js"></script>
      <script src="assets/js/nav.js"></script>

      <script>
        /* Demo purposes only */
        $(".hover").mouseleave(
          function () {
            $(this).removeClass("hover");
          }
          );
        </script>

      </body>

      </html>