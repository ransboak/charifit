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
    <!-- Donation Lists -->
    <section class="donate-lists dn-lists-bg campaign-section padding-top-120">
        <div class="container">
            <div class="campaign-content">
                <div class="row">

                    @foreach ($activities as $activity)
                    <?php
                    $percent = round(($activity->current/$activity->goal) * 100)
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="campaign-column">
                            <a href="#"><span class="img-top-btn">{{$activity->category}}</span></a>
                            <div class="img-container">
                                <a href="{{route('donationn', ['id' => $activity->id])}}"><img src="{{asset("uploads/$activity->thumbnail")}}" alt=""></a>
                            </div>
                            <div class="padding-20">
                                <div class="animated-progress-bar">
                                    <div class="animated-progress" data-percent="{{$percent}}" data-color="#1f1f53">
                                        <span>{{$percent}}%</span></div>
                                </div>
                                <a href="{{route('donation', ['id' => $activity->id])}}">
                                    <h3>{{$activity->title}}</h3>
                                </a>
                                <div class="campaign-column-bottom">
                                    <span>Goal: GH₵
                                        @if ($activity->goal < 1000)
                                        {{$activity->goal}}
                                    @elseif ($activity->goal < 1000000)
                                    {{round($activity->goal/1000, 2) . 'K'}}
                                    @else
                                    {{round($activity->goal/1000000, 2) . 'M'}}
                                    @endif
                                    </span>
                                    <span>Current: GH₵
                                        @if ($activity->current < 1000)
                                        {{$activity->current}}
                                    @elseif ($activity->current < 1000000)
                                    {{round($activity->current/1000, 2) . 'K'}}
                                    @else
                                    {{floor($activity->current/1000000, 2) . 'M'}}
                                    @endif</span>
                                    <span>Donate: 50</span>
                                </div>
                                <a href="{{route('donation', ['id' => $activity->id])}}" class="donate-btn">Donate</a>
                            </div>
                        </div>
                    </div>
                    @endforeach


                    <div class="col-md-12">

                            {{$activities->links()}}

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
