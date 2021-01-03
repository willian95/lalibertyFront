@extends("layouts.main")

@section("content")

<section class="mt-5 mb-5">
        <!------data-scroll-------->

        <div class="grid container-fluid">
          @foreach(App\Work::take(6)->inRandomOrder()->take(6)->get() as $work)
          <div class="grid-item ">
            <a href="{{ url('/works?work='.$work->slug) }}">
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

@endsection