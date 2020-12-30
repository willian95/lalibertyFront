@extends("layouts.main")

@section("content")

<section class="mt-5 mb-5">
        <!------data-scroll-------->

        <div class="gridywrap">
          @foreach(App\Work::take(6)->inRandomOrder()->take(6)->get() as $work)
          <div class="gridy-2 gridyhe-1">
            <a href="{{ url('/works?work='.$work->slug) }}">
              <div class="gridimg"
                style="background-image: url({{ $work->main_image }})">
                &nbsp;</div>

              <div class="gridinfo">
                <div class="gridmeta">
                  <p class="gridwho">
                    <h3>{{ $work->title }}</h3>
                  </p>
                </div>
              </div>
            </a>
          </div>
          @endforeach
          {{--<div class="gridy-1 gridyhe-1">
            <a href="work.html">
              <div class="gridimg"
                style="background-image: url(https://images.unsplash.com/photo-1494537176433-7a3c4ef2046f?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=967&q=80)">
                &nbsp;
            </div>

              <div class="gridinfo">
                <div class="gridmeta">

                  <p class="gridwho">
                    <h3>Item Title</h3>
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="gridy-1 gridyhe-2">
           <a href="work.html">
            <div class="gridimg"
            style="background-image: url(https://images.unsplash.com/photo-1487700066891-e2af21f110b1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80)">
            &nbsp;</div>

            <div class="gridinfo">
              <div class="gridmeta">

                <p class="gridwho">
                  <h3>Item Title</h3>
                </p>
              </div>
            </div>
            </a>
          </div>
          <div class="gridy-2 gridyhe-1">
            <a href="work.html">
              <div class="gridimg" style="background-image: url(http://imgfz.com/i/eNBIo0d.png)">
                &nbsp;</div>

              <div class="gridinfo">
                <div class="gridmeta">

                  <p class="gridwho">
                    <h3>Item Title</h3>
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="gridy-1 gridyhe-1">
            <a href="work.html">
              <div class="gridimg"
              style="background-image: url(https://images.unsplash.com/photo-1516983642686-f4793cb64f3b?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=926&q=80)">
              &nbsp;</div>
              <div class="gridinfo">
                <div class="gridmeta">

                  <p class="gridwho">
                    <h3>Item Title</h3>
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="gridy-1 gridyhe-1">
           <a href="work.html">
            <div class="gridimg"
            style="background-image: url(https://images.unsplash.com/photo-1578160503497-35b1c06e395c?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=757&q=808)">
            &nbsp;</div>
            <div class="gridinfo">
              <div class="gridmeta">
  
                <p class="gridwho">
                  <h3>Item Title</h3>
                </p>
              </div>
            </div>
           </a>
          </div>--}}
        </div>

      </section>

@endsection