@extends('frontend.main')
@section('content')
<!-- Breadcrumb Section -->
<div class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="breadcrumb-left">
                    <img src="{{asset('assets/images/slide-left.png')}}" alt="">
                    <h1>Blog Details</h1>
                    <h3><a href="index.html">Home</a> - Blog Details</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Blog Content Section -->
<section class="blog-content-section blog-details-page padding-top-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="blog-posts">
                    <div class="blog-single-post">
                        <div class="blog-thumbnail vector-container">
                            <a href="#" class="img-top-btn">{{$blog->category}}</a>
                            <img src="{{asset("uploads/$blog->thumbnail")}}" alt="thumbnail">
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
                                <h3>{{$blog->title}}</h3>
                            </div>
                            <div class="blog-content">
                               {!!$blog->body!!}

                            </div>

                            <div class="blog-images margin-top-30">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="single-image">
                                            <img src="{{asset('assets/images/blog-single-1.png')}}" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="single-image image-2">
                                            <img src="{{asset('assets/images/blog-single-2.png')}}" alt="image">
                                        </div>
                                    </div>
                                </div>
                            </div>





                            <div class="content-bottom margin-top-30">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="blog-social-icons">
                                            <ul>
                                                <li><span>share:</span></li>
                                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-comment-area">
                        <div class="blog-title margin-top-30">
                            <h3>2 comments</h3>
                        </div>
                        <div class="single-comment">
                            <div class="comment-image">
                                <img src="{{asset('assets/images/instructor-2.png')}}" alt="author">
                            </div>
                            <div class="comment-content">
                                <div class="comment-content-top">
                                    <div class="content-top-left">
                                        <h5>chris doe</h5>
                                        <span>30 august 2020</span>
                                    </div>
                                    <div class="comment-reply-button">
                                        <a href="#">reply</a>
                                    </div>
                                </div>
                                <p class="margin-top-10">A wonderful serenity has taken possession of my entire
                                    soul, like these sweet mornings of the spring which I enjoy with my whole heart.
                                </p>
                            </div>
                        </div>
                        <div class="single-comment comment-left-margin">
                            <div class="comment-image">
                                <img src="{{asset('assets/images/client-img.png')}}" alt="author">
                            </div>
                            <div class="comment-content">
                                <div class="comment-content-top">
                                    <div class="content-top-left">
                                        <h5>harry olson</h5>
                                        <span>30 august 2020</span>
                                    </div>
                                    <div class="comment-reply-button">
                                        <a href="#">reply</a>
                                    </div>
                                </div>
                                <p class="margin-top-10">A wonderful serenity has taken possession of my entire
                                    soul, like these sweet mornings of the spring which I enjoy with my whole heart.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-comment-form margin-top-60">
                        <div class="comment-title">
                            <h3>Live Comments</h3>
                            <form action="#">
                                <input type="text" placeholder="Your Name">
                                <input type="email" placeholder="Your Email">
                                <textarea name="message" placeholder="Write Comment" id="comment-form" cols="30"
                                    rows="5"></textarea>
                                <button type="submit" class="call-to-action-btn">post comment</button>
                            </form>
                        </div>
                    </div>
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
                                <a href="blog-details.html"><img src="{{asset('assets/images/sidebar-blog-1.png')}}"
                                        alt="image"></a>
                            </div>
                            <div class="recent-post-title">
                                <h6><a href="blog-details.html">Give or Redeem Gift Card</a></h6>
                                <div class="post-date">
                                    <a href="#"><i class="fa fa-calendar"></i>20Dec2020</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-recent-post">
                            <div class="recent-post-image">
                                <a href="blog-details.html"><img src="{{asset('assets/images/sidebar-blog-2.png')}}"
                                        alt="image"></a>
                            </div>
                            <div class="recent-post-title">
                                <h6><a href="blog-details.html">Project of the month club</a></h6>
                                <div class="post-date">
                                    <a href="#"><i class="fa fa-calendar"></i>28Dec2020</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-recent-post">
                            <div class="recent-post-image">
                                <a href="blog-details.html"><img src="{{asset('assets/images/sidebar-blog-1.png')}}"
                                        alt="image"></a>
                            </div>
                            <div class="recent-post-title">
                                <h6><a href="blog-details.html">Project of the month club</a></h6>
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
                            <a href="index.html"><img src="{{asset('assets/images/form-vector-2.png')}}" alt="logo"></a>
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
