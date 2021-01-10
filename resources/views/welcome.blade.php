@extends("layouts.main")

@section("content")

<section class="mt-5 mb-5">
        <!------data-scroll-------->

        <div class="grid container-fluid">
          @foreach(App\Work::take(6)->inRandomOrder()->take(6)->get() as $work)
          <div class="grid-item ">
            @if($work->is_fashion_merch == 0)
            <a href="{{ url('/works?work='.$work->slug) }}">
            @else
            <a href="{{ url('/fashion-merch?work='.$work->slug) }}">
            @endif
              <img
                src="{{ $work->main_image }}"
                alt="imagen">
              <div class="grid-infoo">
                <p class="grid-p">
                  <h3>{{ $work->title }}</h3>
                </p>
              </div>
            </a>
          </div>
          @endforeach
        </div>

      </section>


      <section class="container">
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-30b1c87e-828d-4d63-a66b-4ff6f7f23578"></div>
      </section>

@endsection