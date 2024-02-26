@extends('template.main')

@section('content')
  <section class="section" data-aos="zoom-out-up">
    <div class="container" style="margin-top: 30px;z-index: 999; position:relative">

      <div class="d-flex justify-content-between mb-4">
        <div class="col-sm-6">
          <h4 class="posts-entry-title" style="color:black">Latest Blog</h4>
        </div>
      </div>
      
      <div class="row">
        @foreach($blog_1 as $v_content_blog_1)
        <div class="col-lg-4 mb-4">
          <div class="post-entry-alt">
            <a href="{{ url('/content_blog/'.$v_content_blog_1->id) }}" class="img-link"
              ><img
                src="{{ asset('/assets/images_blog/'.$v_content_blog_1->thumbnail) }}"
                alt="Image"
                class="img-fluid"
            /></a>
            <p>By {{ $v_content_blog_1->name }}</p>
            <div class="excerpt">
              <h5>
                <a href="{{ url('/content_blog/'.$v_content_blog_1->id) }}" style="color:black;text-decoration: none;">
                  {{ $v_content_blog_1->title }}
                </a>
              </h5>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- post selain informasi umroh -->
  <section class="section posts-entry posts-entry-sm bg-light" data-aos="zoom-out-down">
    <div class="container" style="margin-top: 30px;z-index: 999; position:relative">

      <?php
        $blog_2 = DB::table('blog_categories')->get();
      ?>

      @foreach($blog_2 as $v_blog_2)
        <div class="d-flex justify-content-between mb-4">
          <div class="col-sm-6">
            <h4 class="posts-entry-title">{{ $v_blog_2->category_name }}</h4>
          </div>
          <div class="col-sm-6 text-sm-end">
            <a href="{{ url('/all_blog/'.$v_blog_2->id) }}" class="read-more" style="color:black;text-decoration: none;">View All</a>
          </div>
        </div>

        <?php

        $query_2 = DB::table('blog_contents')->select('blog_contents.id', 'thumbnail', 'users.name', 'blog_contents.title')->join('users', 'users.id', '=', 'blog_contents.id_user')->where('id_category', $v_blog_2->id);

        if ($keyword != null) {
          $query_2->where('blog_contents.title', 'like', '%'.$keyword.'%');
        }

        $content_blog_2 = $query_2->take(4)->get();
      ?>

        <div class="row">
          @foreach($content_blog_2 as $v_content_blog_2)
            <div class="col-md-6 col-lg-3">
              <div class="blog-entry">
                <a href="{{ url('/content_blog/'.$v_content_blog_2->id) }}" class="img-link">
                  <img
                    src="{{ asset('/assets/images_blog/'.$v_content_blog_2->thumbnail) }}"
                    alt="Image"
                    class="img-fluid"
                  />
                </a>
                <p>By {{ $v_content_blog_1->name }}</p>
                <h5>
                  <a href="{{ url('/content_blog/'.$v_content_blog_2->id) }}" style="color:black;text-decoration: none;"
                    >{{ $v_content_blog_2->title }}</a
                  >
                </h5>
              </div>
            </div>
          @endforeach
        </div><br>
      @endforeach

      
    </div>
  </section>
@endsection

@push('js')
  <script src="{{ asset('assets/blog/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/blog/js/tiny-slider.js') }}"></script>

  <script src="{{ asset('assets/blog/js/flatpickr.min.js') }}"></script>

  <script src="{{ asset('assets/blog/js/aos.js') }}"></script>
  <script src="{{ asset('assets/blog/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/blog/js/navbar.js') }}"></script>
  <script src="{{ asset('assets/blog/js/counter.js') }}"></script>
  <script src="{{ asset('assets/blog/js/custom.js') }}"></script>
@endpush
