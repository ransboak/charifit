@extends('frontend.main')
@section('content')
<!-- Breadcrumb Section -->
<div class="breadcrumb event-list-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="breadcrumb-left">
                    <img src="assets/images/slide-left.png" alt="">
                    <h1>Event</h1>
                    <h3><a href="index.html">Home</a> - Event</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Donate List -->
<section class="donate-lists event-list-cp campaign-section padding-90">
    <div class="container">
        <div class="event-list-title margin-bottom-55">
            <h2>Donation Campaigns Event</h2>
        </div>
        <div class="campaign-content event-list">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="campaign-column">
                        <a href="#"><span class="img-top-btn">Health</span></a>
                        <div class="img-container">
                            <a href="{{url('/event')}}"><img src="assets/images/donation-list-4.png" alt=""></a>
                        </div>
                        <div class="padding-20">
                            <a href="{{url('/event')}}">
                                <h3>Help children proverty and world safe environment</h3>
                            </a>
                            <div class="campaign-column-bottom">
                                <a href="{{url('/event')}}" class="readmore-btn">read more</a>
                                <div class="time">
                                    <span><i class="fas fa-calendar"></i> 21 December 2021</span>
                                    <span><i class="fas fa-clock"></i> 8:12pm</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="campaign-column">
                        <a href=""><span class="img-top-btn">Water</span></a>
                        <div class="img-container">
                            <a href="{{url('/event')}}"><img src="assets/images/donation-list-5.png" alt=""></a>
                        </div>
                        <div class="padding-20">
                            <a href="{{url('/event')}}">
                                <h3>Help children water pollution and human health</h3>
                            </a>
                            <div class="campaign-column-bottom">
                                <a href="{{url('/event')}}" class="readmore-btn">read more</a>
                                <div class="time">
                                    <span><i class="fas fa-calendar"></i> 21 December 2021</span>
                                    <span><i class="fas fa-clock"></i> 8:12pm</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="campaign-column">
                        <a href=""><span class="img-top-btn">Food</span></a>
                        <div class="img-container">
                            <a href="{{url('/event')}}"><img src="assets/images/event-list-1.png" alt=""></a>
                        </div>
                        <div class="padding-20">
                            <a href="{{url('/event')}}">
                                <h3>Children are going hungry around the world</h3>
                            </a>
                            <div class="campaign-column-bottom">
                                <a href="{{url('/event')}}" class="readmore-btn">read more</a>
                                <div class="time">
                                    <span><i class="fas fa-calendar"></i> 21 December 2021</span>
                                    <span><i class="fas fa-clock"></i> 8:12pm</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="campaign-column">
                        <a href="#"><span class="img-top-btn">Education</span></a>
                        <div class="img-container">
                            <a href="{{url('/event')}}"><img src="assets/images/donation-list-1.png" alt=""></a>
                        </div>
                        <div class="padding-20">
                            <a href="{{url('/event')}}">
                                <h3>Help children proverty and world safe environment</h3>
                            </a>
                            <div class="campaign-column-bottom">
                                <a href="{{url('/event')}}" class="readmore-btn">read more</a>
                                <div class="time">
                                    <span><i class="fas fa-calendar"></i> 21 December 2021</span>
                                    <span><i class="fas fa-clock"></i> 8:12pm</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="campaign-column">
                        <a href="#"><span class="img-top-btn">Environment</span></a>
                        <div class="img-container">
                            <a href="{{url('/event')}}"><img src="assets/images/donation-list-5.png" alt=""></a>
                        </div>
                        <div class="padding-20">
                            <a href="{{url('/event')}}">
                                <h3>Help Children Water pollution and Human Health</h3>
                            </a>
                            <div class="campaign-column-bottom">
                                <a href="{{url('/event')}}" class="readmore-btn">read more</a>
                                <div class="time">
                                    <span><i class="fas fa-calendar"></i> 21 December 2021</span>
                                    <span><i class="fas fa-clock"></i> 8:12pm</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="campaign-column">
                        <a href="#"><span class="img-top-btn">Cloth</span></a>
                        <div class="img-container">
                            <a href="{{url('/event')}}"><img src="assets/images/donation-list-6.png" alt=""></a>
                        </div>
                        <div class="padding-20">
                            <a href="{{url('/event')}}">
                                <h3>Children are going hungry around the world</h3>
                            </a>
                            <div class="campaign-column-bottom">
                                <a href="{{url('/event')}}" class="readmore-btn">read more</a>
                                <div class="time">
                                    <span><i class="fas fa-calendar"></i> 21 December 2021</span>
                                    <span><i class="fas fa-clock"></i> 8:12pm</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="pagination">
                        <li><a href="#"><i class="fas fa-angle-left"></i></a></li>
                        <li><a href="#" class="active">01</a></li>
                        <li><a href="#">02</a></li>
                        <li><a href="#">03</a></li>
                        <li><a href="#">04</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#"><i class="fas fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
