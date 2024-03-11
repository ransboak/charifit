@extends('frontend.main')
@section('content')


<head>

</head>
    <!-- Breadcrumb Section -->
    <div class="breadcrumb blog-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb-left">
                        <img src="assets/images/slide-left.png" alt="">
                        <h1>News & Blog</h1>
                        <h3><a href="index.html">Home</a> - News & Blog</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Content Section -->
    <section class="blog-content-section padding-top-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="blog-posts">


                        {{-- <div class="blog-single-post different-bg-color">
                            <div class="blog-thumbnail-slider">
                                <div class="thumbnail-single-slide">
                                    <a href="blog-single.html"><img src="assets/images/blog-slider.png"
                                            alt="thumbnail"></a>
                                    <div class="img-shape-btn">
                                        <a href="#" class="img-top-btn">Health</a>
                                    </div>
                                </div>
                                <div class="thumbnail-single-slide">
                                    <a href="blog-single.html"><img src="assets/images/blog-slider.png"
                                            alt="thumbnail"></a>
                                    <div class="img-shape-btn">
                                        <a href="#" class="img-top-btn">Education</a>
                                    </div>
                                </div>
                                <div class="thumbnail-single-slide">
                                    <a href="blog-single.html"><img src="assets/images/blog-slider.png"
                                            alt="thumbnail"></a>
                                    <div class="img-shape-btn">
                                        <a href="#" class="img-top-btn">Water</a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-content-part">
                                <div class="blog-content-top">
                                    <div class="blog-date margin-right-20">
                                        <a href="#"><i class="fa fa-calendar"></i>28 june 2020</a>
                                    </div>
                                    <div class="blog-tag margin-right-20">
                                        <a href="#"><i class="fa fa-tag"></i>web design</a>
                                    </div>
                                    <div class="blog-author">
                                        <a href="#"><i class="fa fa-user-circle"></i>john doe</a>
                                    </div>
                                </div>
                                <div class="blog-title">
                                    <h3><a href="blog-single.html">Help Children water pollution and human health</a>
                                    </h3>
                                </div>
                                <div class="blog-content">
                                    <p>This widespread problem of water pollution is jeopardizing our health. Unsafe
                                        water kills more people each year than war and all other forms of violence
                                        combined. Meanwhile, our drinkable water sources are finite: Less than 1 percent
                                        of the earth’s freshwater is actually accessible to us. Without action.</p>
                                </div>
                                <div class="blog-excerpt-link">
                                    <a href="blog-single.html" class="readmore-btn">read more</a>
                                </div>
                            </div>
                        </div> --}}
                        @foreach ($blogs as $blog )

                        @if($blog->video_link)
                        <div class="blog-single-post">
                            <div class="blog-thumbnail-video">
                                <a href="{{route('single-blog', ['id' => $blog->id])}}"><img src="{{asset("uploads/$blog->thumbnail")}}" alt="thumbnail"></a>
                                <div class="video-play-button">
                                    <a href="{{$blog->video_link}}"
                                        class="button-video blog-popup-video">
                                        <div class="play-icon">
                                            <div class="play-circle"><img src="assets/images/blog-video-circle-red.png"
                                                    alt=""></div>

                                        </div>

                                    </a>
                                </div>
                                <div class="img-shape-btn">
                                    <a href="#" class="img-top-btn">{{$blog->category}}</a>
                                </div>
                            </div>
                            <div class="blog-content-part">
                                <div class="blog-content-top">
                                    <div class="blog-date margin-right-20">
                                        <a href="#"><i class="fa fa-calendar"></i>{{\Carbon\Carbon::parse($blog->created_at)->diffForHumans()}}</a>
                                    </div>
                                    <div class="blog-tag margin-right-20">
                                        <a href="#"><i class="fa fa-tag"></i>web design</a>
                                    </div>
                                    <div class="blog-author">
                                        <a href="#"><i class="fa fa-user-circle"></i>{{$blog->user->firstname}} {{$blog->user->lastname}}</a>
                                    </div>
                                </div>
                                <div class="blog-title">
                                    <h3><a href="blog-single.html">{{$blog->title}}</a>
                                    </h3>
                                </div>
                                @if(strlen($blog->body) > 2350)
                                <div class="blog-content">
                                    {!! substr($blog->body, 0, 2350) !!}...
                                </div>
                                <div class="blog-excerpt-link">
                                    <a href="{{route('single-blog', ['id' => $blog->id])}}" class="readmore-btn">read more</a>
                                </div>
                                @else
                                <div class="blog-content">
                                    {!! $blog->body !!}
                                </div>
                                @endif
                            </div>
                        </div>
                        @else
                        <div class="blog-single-post">
                            <div class="blog-thumbnail">
                                <a href="{{route('single-blog', ['id' => $blog->id])}}"><img src="{{asset("uploads/$blog->thumbnail")}}" alt="thumbnail"></a>
                                <div class="img-shape-btn">
                                    <a href="#" class="img-top-btn">{{$blog->category}}</a>
                                </div>
                            </div>
                            <div class="blog-content-part">
                                <div class="blog-content-top">
                                    <div class="blog-date margin-right-20">
                                        <a href="#"><i class="fa fa-calendar"></i>{{\Carbon\Carbon::parse($blog->created_at)->diffForHumans()}}</a>
                                    </div>
                                    <div class="blog-tag margin-right-20">
                                        <a href="#"><i class="fa fa-tag"></i>web design</a>
                                    </div>
                                    <div class="blog-author">
                                        <a href="#"><i class="fa fa-user-circle"></i>{{$blog->user->firstname}} {{$blog->user->lastname}}</a>
                                    </div>
                                </div>
                                <div class="blog-title">
                                    <h3><a href="blog-single.html">{{$blog->title}}</a>
                                    </h3>
                                </div>
                                @if(strlen($blog->body) > 2350)
                                <div class="blog-content">
                                    {!! substr($blog->body, 0, 2350) !!}...
                                </div>
                                <div class="blog-excerpt-link">
                                    <a href="{{route('single-blog', ['id' => $blog->id])}}" class="readmore-btn">read more</a>
                                </div>
                                @else
                                <div class="blog-content">
                                    {!! $blog->body !!}
                                </div>
                                @endif

                            </div>
                        </div>
                        @endif
                        @endforeach

                    </div>
                    <div class="blog-pagination">
                        {{$blogs->links()}}
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="blog-sidebar">
                        <div class="single-widget search-widget">
                            <div class="header-search">
                                <form action="#">
                                    <input type="text" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="single-widget category-widget">
                            <div class="widget-title">
                                <h4>categories</h4>
                            </div>
                            <div class="category-items">
                                <ul>
                                    <li><a href="#">education</a></li>
                                    <li><a href="#">Fight Cancer</a></li>
                                    <li><a href="#">Water</a></li>
                                    <li><a href="#">Environment</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-widget recent-post-widget">
                            <div class="widget-title">
                                <h4>Donation Campaign</h4>
                            </div>
                            <div class="single-recent-post">
                                <div class="recent-post-image">
                                    <a href="blog-single.html"><img src="assets/images/sidebar-blog-1.png"
                                            alt="image"></a>
                                </div>
                                <div class="recent-post-title">
                                    <h6><a href="blog-single.html">Give or Redeem Gift Card</a></h6>
                                    <div class="post-date">
                                        <a href="#"><i class="fa fa-calendar"></i>20Dec2020</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-recent-post">
                                <div class="recent-post-image">
                                    <a href="blog-single.html"><img src="assets/images/sidebar-blog-2.png"
                                            alt="image"></a>
                                </div>
                                <div class="recent-post-title">
                                    <h6><a href="blog-single.html">Project of the month club</a></h6>
                                    <div class="post-date">
                                        <a href="#"><i class="fa fa-calendar"></i>28Dec2020</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-recent-post">
                                <div class="recent-post-image">
                                    <a href="blog-single.html"><img src="assets/images/sidebar-blog-1.png"
                                            alt="image"></a>
                                </div>
                                <div class="recent-post-title">
                                    <h6><a href="blog-single.html">Project of the month club</a></h6>
                                    <div class="post-date">
                                        <a href="#"><i class="fa fa-calendar"></i>20Dec2020</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-widget tag-widget">
                            <div class="widget-title">
                                <h4>tags</h4>
                            </div>
                            <div class="tag-items">
                                <ul>
                                    <li><a href="#">Charity</a></li>
                                    <li><a href="#">Donation</a></li>
                                    <li><a href="#">Funding</a></li>
                                    <li><a href="#">Water</a></li>
                                    <li><a href="#">Sympatho</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-widget banner-widget">
                            <div class="banner-widget-logo">
                                <a href="index.html"><img src="assets/images/form-vector-2.png" alt="logo"></a>
                            </div>
                            <div class="banner-widget-title margin-top-20">
                                <h4>start course in yourself today</h4>
                            </div>
                            <div class="banner-widget-button margin-top-30">
                                <a href="#" class="call-to-action-btn">instructor</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @endsection
