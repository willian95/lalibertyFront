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
           <!---- <div class="timeline-header">
                <h2 class="timeline-header__title"></h2>

            </div>-->
            <div class="timeline">
                @foreach(App\Blog::orderBy("created_date", "desc")->get() as $blog)
                  <div class="timeline-item" data-text="{{ $blog->created_at->format('d/m/Y') }}"  >

                  <!----------------₍ ὸ.ό₎ރ---------------------->
                    <a href="{{ url('/blog/'.$blog->slug) }}">
                     <div class="timeline__content">
                        @if($blog->main_image_file_type == 'image')
                          <img class="timeline__img" src="{{ $blog->image }}" />
                        @else
                          <video style="width: 100%;" controls>
                            <source src="{{ $blog->image }}" type="video/mp4">
                          </video>
                        @endif

                          <h2 class="timeline__content-title">{{ $blog->title }}</h2>
                          <p class="timeline__content-desc">{!! substr($blog->description, 0, 60) !!}...</p>
                      </div>
                    </a>
                  </div>
                @endforeach
                

            </div>
        </div>
    </section>
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
</script>

</body>

</html>