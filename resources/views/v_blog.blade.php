@extends('template.main')

@section('content')
  <section class="section" data-aos="zoom-out-up">
    <div class="container" style="margin-top: 30px;z-index: 999; position:relative">

      <?php
        $blog_1 = DB::table('blog_types')->where('id', 1)->first();

        $query_1 = DB::table('title_blogs')->where('id_blog_type', $blog_1->id);

        if ($keyword != null) {
          $query_1->where('title_blog', 'like', '%'.$keyword.'%');
        }

        $content_blog_1 = $query_1->take(3)->get();
      ?>
      <div class="d-flex justify-content-between mb-4">
          <div class="col-sm-6">
            <h4 class="posts-entry-title" style="color:black"><?= $blog_1->name_type_blog; ?></h4>
          </div>
          <div class="col-sm-6 text-sm-end">
            <a href="{{ url('/all_blog/'.$blog_1->id) }}" style="color:black;text-decoration: none;" class="read-more">View All</a>
          </div>
      </div>

      <div class="row">
        @foreach($content_blog_1 as $v_content_blog_1)
          <div class="col-lg-4 mb-4">
            <div class="post-entry-alt">
              <a href="{{ url('/content_blog/'.$v_content_blog_1->id) }}" class="img-link"
                ><img
                  src="{{ asset('/assets/blog/images/'.$v_content_blog_1->image_blog) }}"
                  alt="Image"
                  class="img-fluid"
              /></a>
              <div class="excerpt">
                <h5>
                  <a href="{{ url('/content_blog/'.$v_content_blog_1->id) }}" style="color:black;text-decoration: none;">
                    {{ $v_content_blog_1->title_blog }}
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
        $blog_2 = DB::table('blog_types')->where('id', '!=', 1)->first();

        $query_2 = DB::table('title_blogs')->where('id_blog_type', $blog_2->id);

        if ($keyword != null) {
          $query_2->where('title_blog', 'like', '%'.$keyword.'%');
        }

        $content_blog_2 = $query_2->take(3)->get();
      ?>

      <div class="d-flex justify-content-between mb-4">
        <div class="col-sm-6">
          <h4 class="posts-entry-title">{{ $blog_2->name_type_blog }}</h4>
        </div>
        <div class="col-sm-6 text-sm-end">
          <a href="{{ url('/all_blog/'.$blog_2->id) }}" class="read-more" style="color:black;text-decoration: none;">View All</a>
        </div>
      </div>

      <div class="row">
        @foreach($content_blog_2 as $v_content_blog_2)
          <div class="col-md-6 col-lg-3">
            <div class="blog-entry">
              <a href="{{ url('/content_blog/'.$v_content_blog_2->id) }}" class="img-link">
                <img
                  src="{{ asset('/assets/blog/images/'.$v_content_blog_2->image_blog) }}"
                  alt="Image"
                  class="img-fluid"
                />
              </a>
              <h5>
                <a href="{{ url('/content_blog/'.$v_content_blog_2->id) }}" style="color:black;text-decoration: none;"
                  >{{ $v_content_blog_2->title_blog }}</a
                >
              </h5>
            </div>
          </div>
        @endforeach
      </div>
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
