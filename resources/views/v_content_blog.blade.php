<?php
    use Carbon\Carbon;
?>

@extends('template.main')

@section('content')
    <section class="section">
        <div class="container" style="margin-top: 30px;z-index: 999; position:relative">
            <h3>{{ $data_title->title_blog }}</h3>

            <br>
            <div class="row blog-entries element-animate" data-aos="zoom-out-left">
                <div class="col-md-12 col-lg-8 main-content">
                    <div class="post-content-body">
                        @foreach($content as $v_content)
                            <h5><strong>{{ $v_content->title_content }}</strong></h5>
                            <?php
                                if($v_content->image == null){
                            ?>
                            <?php }else{ ?>
                                <img stle="width:300px;" src="{{ asset('/assets/blog/images/'.$v_content->image) }}" alt="Image" class="img-fluid" />
                            <?php } ?>
                            <p>{{ $v_content->content }}<p>
                        @endforeach
                    </div>
                </div><br>
                <div class="col-md-12 col-lg-4 sidebar">
                    <div class="sidebar-box search-form-wrap" data-aos="zoom-out-right">
                        <form action="#" class="sidebar-search-form">
                            <span class="bi-search"></span>
                            <input
                            type="text"
                            class="form-control"
                            id="s"
                            placeholder="Type a keyword and hit enter"
                            />
                        </form>
                    </div><br>
                    <div class="sidebar-box">
                    <h5 class="heading">Latest Posts</h5>
                    <div class="post-entry-sidebar" data-aos="zoom-out-right">
                        <ul style="list-style-type: none;">
                            @foreach($latest as $v_latest)
                                <li>
                                    <a style="color:black;text-decoration: none;" href="{{ url('/content_blog/'.$v_latest->id) }}">
                                        <img
                                            src="{{ asset('/assets/blog/images/'.$v_latest->image_blog) }}"
                                            alt="Image placeholder"
                                            class="me-4 rounded"
                                            style= "width:200px;"
                                        />
                                        <div class="text">
                                            <h5>
                                            {{ $v_latest->title_blog }}
                                            </h5>
                                            <?php $date_last = Carbon::parse($v_latest->created_at); ?>

                                            <div class="post-meta">
                                            <span class="mr-2">{{ $date_last->format('d F Y'); }} </span>
                                            </div>
                                        </div>
                                    </a>
                                </li><br>
                            @endforeach
                        </ul>
                    </div>
                    <div class="sidebar-box" data-aos="zoom-out-right">
                        <h5 class="heading">Categories</h5>
                        <ul style="list-style-type: none;" class="categories">
                            <?php foreach($category as $v_category) {
                                $total = DB::table('title_blogs')
                                ->where('id_blog_type', $v_category->id)
                                ->distinct()
                                ->count();
                            ?>
                                <li>
                                    <a style="color:black;text-decoration: none;" href="{{ url('/all_blog/'.$v_category->id_blog_type) }}">{{ $v_category->name_type_blog }} <span>({{ $total }})</span></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')

@endpush