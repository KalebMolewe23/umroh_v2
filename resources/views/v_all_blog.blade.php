<?php
    use Carbon\Carbon;
?>

@extends('template.main')

@section('content')
    <div class="section search-result-wrap">
        <div class="container" style="margin-top: 30px;z-index: 999; position:relative">
            <div class="row">
                <div class="col-lg-8">

                    @foreach($content as $v_content)
                        <div class="blog-entry d-flex blog-entry-search-item" data-aos="zoom-out-left">
                            <a href="{{ url('/content_blog/'.$v_content->id) }}" class="img-link me-4">
                                <img stle="width:300px;" src="{{ asset('/assets/blog/images/'.$v_content->image_blog) }}" alt="Image" class="img-fluid" />
                            </a>
                            <div>
                                <?php $date = Carbon::parse($v_content->created_at); ?>
                                <span style="color:grey;" class="date"
                                >{{ $date->format('d F Y'); }} &bullet; <a href="#" style="color:black;text-decoration: none;">{{ $v_content->name_type_blog }}</a></span
                                >
                                <h4>
                                <a style="color:black;text-decoration: none;" href="{{ url('/content_blog/'.$v_content->id) }}"
                                    >{{ $v_content->title_blog }}</a
                                >
                                </h4>
                                <p>
                                <a href="{{ url('/content_blog/'.$v_content->id) }}" class="btn btn-sm btn-outline-primary" 
                                    >Read More</a
                                >
                                </p>
                            </div>
                        </div><br>
                    @endforeach

                </div>

                <div class="col-lg-4 sidebar">
                    <div class="sidebar-box search-form-wrap mb-4" data-aos="zoom-out-right">
                        <form action="#" class="sidebar-search-form">
                            <span class="bi-search"></span>
                            <input
                            type="text"
                            class="form-control"
                            id="s"
                            placeholder="Cari postingan lainnya dan klik enter"
                            />
                        </form>
                    </div>
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
    </div>
@endsection

@push('js')

@endpush