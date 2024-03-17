@extends('frontend.main')
@section('content')

<?php
use App\Models\Activity;
use Illuminate\Support\Facades\DB;
$activities = DB::table('activities')->orderBy('created_at', 'desc')->take(3)->get();
?>

<!-- Breadcrumb -->
<div class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="breadcrumb-left">
                    <img src="{{asset('assets/images/slide-left.png')}}" alt="">
                    <h1>Donation Single</h1>
                    <h3><a href="index.html">Home</a> - Donation Singe</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    @if (session('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{session('success')}}
                                    </div>
                                    @endif
                                    @if (session('error'))
                                    <div class="alert alert-warning" role="alert">
                                        {{session('error')}}
                                    </div>
                                    @endif
                                    @if ($errors->any())
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li><div class="alert alert-danger" role="alert">
                                                {{$error}}
                                            </div></li>
                                        @endforeach
                                    </ul>
                                @endif
</div>

<div class="single-post-slider padding-top-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="post-slider">
                    <div class="single-slide">
                        <img src="{{asset("uploads/$activity->thumbnail")}}" alt="">
                        <a href="#" class="img-top-btn">Water</a>
                    </div>
                    <div class="single-slide">
                        <img src="{{asset("uploads/$activity->thumbnail")}}" alt="">
                        <a href="#" class="img-top-btn">Water</a>
                    </div>
                    <div class="single-slide">
                        <img src="{{asset("uploads/$activity->thumbnail")}}" alt="">
                        <a href="#" class="img-top-btn">Water</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
                    $percent = round(($activity->current/$activity->goal) * 100)
                    ?>
<section class="post-section padding-top-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="main-content">
                    <span class="title margin-bottom-25">{{$activity->title}}</span>
                    {!! $activity->description !!}
                    <div class="spacer"></div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="animated-progress-bar">
                                <div class="animated-progress" data-percent="{{$percent}}" data-color="#1f1f53">
                                    <span>{{$percent}}%</span></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="info">
                                <span>
                                    @if ($activity->goal < 1000)
                                        {{$activity->goal}}
                                    @elseif ($activity->goal < 1000000)
                                    {{round($activity->goal/1000, 2) . 'K'}}
                                    @else
                                    {{round($activity->goal/1000000, 2) . 'M'}}
                                    @endif
                                </span>
                                <span>Need: @if ($activity->current < 1000)
                                    {{$activity->current}}
                                @elseif ($activity->current < 1000000)
                                {{round($activity->current/1000, 2) . 'K'}}
                                @else
                                {{floor($activity->current/1000000, 2) . 'M'}}
                                @endif</span>
                                <span>Donate: 5k People</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-right">
                                <img src="{{asset('assets/images/hand-vector.png')}}" class="hand-vector" alt="">
                                <h4>Personal information</h4>
                                <form action="{{route('donate')}}" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{$activity->id}}" name="activity">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-input">
                                                <input type="text" name="firstname" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-input">
                                                <input type="text" name="lastname" placeholder="Last Name" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-input">
                                                <input type="email" name="email" placeholder="Email*">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-input">
                                                <input type="text" name="contact" placeholder="Phone Number*">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-input">
                                            <select name="currency" class="currency">
                                                <option value="">Currency</option>
                                                <option value="GHS">GHS</option>
                                                <option value="USD">USD</option>
                                                <option value="GBP">GBP</option>
                                            </select>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-input">
                                                {{-- <span class="currency">USD</span> --}}
                                                <input type="text" name="amount" placeholder="Amount*" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-input">
                                                <input type="hidden" name="type" readonly value={{$activity->category}} required >
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-6">
                                            <div class="form-input">
                                                <select name="s">
                                                    <option value="">Type Of Donation*</option>
                                                    <option value="">Type One</option>
                                                    <option value="">Type Two</option>
                                                    <option value="">Type three</option>
                                                </select>
                                            </div>
                                        </div> --}}
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-textarea">
                                                <textarea name="remarks" rows="3" placeholder="Comments"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="gateway-select">
                                                <h4>Select payment method</h4>
                                                <label>
                                                    <input type="radio" name="payment_method" value="paypal"
                                                        checked="checked">
                                                    <img src="{{asset('assets/images/paypal.png')}}" alt="" class="paypal-img">
                                                </label>
                                                <label>
                                                    <input type="radio" name="payment_method" value="payoneer">
                                                    <img src="{{asset('assets/images/payoneer.png')}}" alt=""
                                                        class="payoneer-img">
                                                </label>
                                                <label>
                                                    <input type="radio" name="payment_method" value="mastercard">
                                                    <img src="{{asset('assets/images/mastercard.png')}}" alt=""
                                                        class="mastercard-img">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="call-to-action-btn">Donate</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="sidebar">
                    <div class="row">
                        <div class="col-md-6 col-lg-12">
                            <div class="widget-container categories">
                                <h4>Categories</h4>
                                <ul class="categories-nav">
                                    <li><a href="#">education</a></li>
                                    <li><a href="#">fight cancer</a></li>
                                    <li><a href="#">water</a></li>
                                    <li><a href="#">environment</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <div class="widget-container blog-sidebar">
                                <h4>Donation Campaign</h4>
                                @foreach ($activities as $activity )
                                <div class="blog">
                                    <img src="{{asset("uploads/$activity->thumbnail")}}" alt="">
                                    <div class="blog-content">
                                        <a href="#">
                                            <h6>{{$activity->title}}</h6>
                                        </a>
                                        <span><i class="fas fa-calendar"></i> {{\Carbon\Carbon::parse($activity->created_at)->diffForHumans()}}</span>
                                    </div>
                                </div>
                                @endforeach



                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <div class="widget-container widget-banner">
                                <img src="{{asset('assets/images/sidebar-img.png')}}" alt="">
                                <div class="left-content">
                                    <img src="{{asset('assets/images/form-vector.png')}}" alt="">
                                    <h3>Join the Sympatho Team</h3>
                                    <a href="#" class="call-to-action-btn">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
