@extends('template.main')

@section('content')
  <section class="section" data-aos="zoom-out-up">
    <div class="container" style="margin-top: 30px;z-index: 999; position:relative">
      <div class="d-flex justify-content-between mb-4">
          <div class="col-sm-6">
            <h4 class="posts-entry-title" style="color:black">MUSLIM LIFESTYLE</h4>
          </div>
          <div class="col-sm-6 text-sm-end">
            <a href="category.html" style="color:black;text-decoration: none;" class="read-more">View All</a>
          </div>
      </div>

      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="post-entry-alt">
            <a href="single.html" class="img-link"
              ><img
                src="{{ asset('/assets/blog/images/kesehatan_muslim.jpeg') }}"
                alt="Image"
                class="img-fluid"
            /></a>
            <div class="excerpt">
              <h5>
                <a href="single.html" style="color:black;text-decoration: none;">
                  Penting! Inilah Cara Menjaga Kesehatan dalam Islam
                </a>
              </h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="post-entry-alt">
            <a href="single.html" class="img-link"
              ><img
                src="{{ asset('/assets/blog/images/duka_muslim.jpeg') }}"
                alt="Image"
                class="img-fluid"
            /></a>
            <div class="excerpt">
              <h5>
                <a href="single.html" style="color:black;text-decoration: none;"
                  >Saat Berduka, Lakukan 7 Adab Memandikan Jenazah Ini</a
                >
              </h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="post-entry-alt">
            <a href="single.html" class="img-link"
              ><img
                src="{{ asset('/assets/blog/images/hand.jpg') }}"
                alt="Image"
                class="img-fluid"
            /></a>
            <div class="excerpt">
              <h5>
                <a href="single.html" style="color:black;text-decoration: none;"
                  >Bagaimana Hukum Memakai Handsanitizer saat Sholat?</a
                >
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- post selain informasi umroh -->
  <section class="section posts-entry posts-entry-sm bg-light" data-aos="zoom-out-down">
    <div class="container" style="margin-top: 30px;z-index: 999; position:relative">
      <div class="d-flex justify-content-between mb-4">
        <div class="col-sm-6">
          <h4 class="posts-entry-title">TRAVEL</h4>
        </div>
        <div class="col-sm-6 text-sm-end">
          <a href="category.html" class="read-more" style="color:black;text-decoration: none;">View All</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="blog-entry">
            <a href="single.html" class="img-link">
              <img
                src="{{ asset('/assets/blog/images/pantai.jpg') }}"
                alt="Image"
                class="img-fluid"
              />
            </a>
            <h5>
              <a href="single.html" style="color:black;text-decoration: none;"
                >Mata Gak Bisa Kedip! Ini 5 Pantai Indah yang Ada di Turki</a
              >
            </h5>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="blog-entry">
            <a href="single.html" class="img-link">
              <img
                src="{{ asset('/assets/blog/images/oman.jpg') }}"
                alt="Image"
                class="img-fluid"
              />
            </a>
            <h5>
              <a href="single.html" style="color:black;text-decoration: none;"
                >Inilah 5 Alasan Kamu Wajib Berwisata ke Oman</a
              >
            </h5>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="blog-entry">
            <a href="single.html" class="img-link">
              <img
                src="{{ asset('/assets/blog/images/turki.jpg') }}"
                alt="Image"
                class="img-fluid"
              />
            </a>
            <h5>
              <a href="single.html" style="color:black;text-decoration: none;"
                >Selain Transportasi Gratis, Ini 7 Fakta Menarik tentang Turki!</a
              >
            </h5>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="blog-entry">
            <a href="single.html" class="img-link">
              <img
                src="{{ asset('/assets/blog/images/makanan_dubai.jpg') }}"
                alt="Image"
                class="img-fluid"
              />
            </a>
            <h5>
              <a href="single.html" style="color:black;text-decoration: none;"
                >Berani Cicipi 5 Kuliner Unik di Dubai Ini?</a
              >
            </h5>
          </div>
        </div>
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
