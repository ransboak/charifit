@extends('frontend.main')
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb-left">
                        <img src="assets/images/slide-left.png" alt="">
                        <h1>Donation</h1>
                        <h3><a href="index.html">Home</a> - Donation</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Donation Lists -->
    <section class="donate-lists dn-lists-bg campaign-section padding-top-120">
        <div class="container">
            <div class="campaign-content">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="campaign-column">
                            <a href="#"><span class="img-top-btn">Health</span></a>
                            <div class="img-container">
                                <a href="{{url('/donation')}}"><img src="assets/images/donation-list-1.png" alt=""></a>
                            </div>
                            <div class="padding-20">
                                <div class="animated-progress-bar">
                                    <div class="animated-progress" data-percent="50" data-color="#1f1f53">
                                        <span>50%</span></div>
                                </div>
                                <a href="{{url('/donation')}}">
                                    <h3>Help children proverty and world safe environment</h3>
                                </a>
                                <div class="campaign-column-bottom">
                                    <span>Goal: 20000k</span>
                                    <span>Need: 5000k</span>
                                    <span>Donate: 50k</span>
                                </div>
                                <a href="{{url('/donation')}}" class="donate-btn">Donate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="campaign-column">
                            <a href=""><span class="img-top-btn">Water</span></a>
                            <div class="img-container">
                                <a href="{{url('/donation')}}"><img src="assets/images/donation-list-2.png" alt=""></a>
                            </div>
                            <div class="padding-20">
                                <div class="animated-progress-bar">
                                    <div class="animated-progress" data-percent="70" data-color="#1f1f53">
                                        <span>70%</span></div>
                                </div>
                                <a href="{{url('/donation')}}">
                                    <h3>Help children water pollution and human health</h3>
                                </a>
                                <div class="campaign-column-bottom">
                                    <span>Goal: 20000k</span>
                                    <span>Need: 5000k</span>
                                    <span>Donate: 50k</span>
                                </div>
                                <a href="{{url('/donation')}}" class="donate-btn">Donate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="campaign-column">
                            <a href=""><span class="img-top-btn">Food</span></a>
                            <div class="img-container">
                                <a href="{{url('/donation')}}"><img src="assets/images/donation-list-3.png" alt=""></a>
                            </div>
                            <div class="padding-20">
                                <div class="animated-progress-bar">
                                    <div class="animated-progress" data-percent="85" data-color="#1f1f53">
                                        <span>85%</span></div>
                                </div>
                                <a href="{{url('/donation')}}">
                                    <h3>Children are going hungry around the world</h3>
                                </a>
                                <div class="campaign-column-bottom">
                                    <span>Goal: 20000k</span>
                                    <span>Need: 5000k</span>
                                    <span>Donate: 50k</span>
                                </div>
                                <a href="{{url('/donation')}}" class="donate-btn">Donate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="campaign-column">
                            <a href="#"><span class="img-top-btn">Education</span></a>
                            <div class="img-container">
                                <a href="{{url('/donation')}}"><img src="assets/images/donation-list-4.png" alt=""></a>
                            </div>
                            <div class="padding-20">
                                <div class="animated-progress-bar">
                                    <div class="animated-progress" data-percent="50" data-color="#1f1f53">
                                        <span>50%</span></div>
                                </div>
                                <a href="{{url('/donation')}}">
                                    <h3>Help children proverty and world safe environment</h3>
                                </a>
                                <div class="campaign-column-bottom">
                                    <span>Goal: 20000k</span>
                                    <span>Need: 5000k</span>
                                    <span>Donate: 50k</span>
                                </div>{{url('/donation')}}" class="donate-btn">Donate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="campaign-column">
                            <a href="#"><span class="img-top-btn">Environment</span></a>
                            <div class="img-container">
                                <a href="{{url('/donation')}}"><img src="assets/images/donation-list-5.png" alt=""></a>
                            </div>
                            <div class="padding-20">
                                <div class="animated-progress-bar">
                                    <div class="animated-progress" data-percent="40" data-color="#1f1f53">
                                        <span>40%</span></div>
                                </div>
                                <a href="{{url('/donation')}}">
                                    <h3>Help Children Water pollution and Human Health</h3>
                                </a>
                                <div class="campaign-column-bottom">
                                    <span>Goal: 20000k</span>
                                    <span>Need: 5000k</span>
                                    <span>Donate: 50k</span>
                                </div>
                                <a href="{{url('/donation')}}" class="donate-btn">Donate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="campaign-column">
                            <a href="#"><span class="img-top-btn">Cloth</span></a>
                            <div class="img-container">
                                <a href="{{url('/donation')}}"><img src="assets/images/donation-list-6.png" alt=""></a>
                            </div>
                            <div class="padding-20">
                                <div class="animated-progress-bar">
                                    <div class="animated-progress" data-percent="60" data-color="#1f1f53">
                                        <span>60%</span></div>
                                </div>
                                <a href="{{url('/donation')}}">
                                    <h3>Children are going hungry around the world</h3>
                                </a>
                                <div class="campaign-column-bottom">
                                    <span>Goal: 20000k</span>
                                    <span>Need: 5000k</span>
                                    <span>Donate: 50k</span>
                                </div>
                                <a href="{{url('/donation')}}" class="donate-btn">Donate</a>
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
