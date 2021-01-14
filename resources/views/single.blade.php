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

    <section class="single-blog container">
        <p class="main_title-general"></p>

       <p class="titulo-producto titulo-blog">{{ $blog->title }}</p>
       <span>{{ $blog->created_at->format("d/m/Y") }}</span>

       <div class="shares">

       </div>
        <div class="content-blog">
            @if($blog->main_image_file_type == 'image')
              <img class="timeline__img" src="{{ $blog->image }}" />
            @else
              <video style="width: 100%;" controls>
                <source src="{{ $blog->image }}" type="video/mp4">
              </video>
            @endif
          {!! $blog->description !!}
        </div>

        
<div id="fb-root"></div>

<a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}&display=popup" target="_blank"> share this </a>
<a href="#" onclick="clipboardCopy('{{ url()->current() }}')">Copiar link</a>


        <div class="volver text-sm-left">
          <a href="{{ url('/blog') }}">       <img src="{{ url('assets/img/left.svg') }}" alt="">  volver a blog</a>
        </div>
    </section>


  <style>
  .single-blog{
    text-align:center;
  }
  .single-blog .content-blog{
        text-align: start;
  }
.content-blog img {
    height: 500px;
    object-fit: contain;
    width: 100%;
    margin: 7rem 0;
}

  </style>


    <br><br><br><br><br>

    <footer style="padding-bottom: 150px;">

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

  function clipboardCopy(link){
    var copyText = link

    /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */

    /* Copy the text inside the text field */
    document.execCommand("copy");

    swal({
      text: "Link copiado",
      icon: "success"
    })
  }
  
</script>

</body>

</html>