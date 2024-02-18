@extends('frontend.main')
@section('content')
<!-- Breadcrumb Section -->
<div class="breadcrumb project-list-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="breadcrumb-left">
                    <img src="assets/images/slide-left.png" alt="">
                    <h1>Porojects</h1>
                    <h3><a href="index.html">Home</a> - Projects</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="project-list padding-top-110">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="title">
                    <h2>Campaigns gallery</h2>
                </div>
            </div>
            <div class="col-xl-7 align-self-center">
                <div class="button-group filter-button-group">
                    <button data-filter="*" class="active">All</button>
                    <button data-filter=".education">Education</button>
                    <button data-filter=".water">water</button>
                    <button data-filter=".environment">environment</button>
                    <button data-filter=".health">health</button>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row grid">
                    <div class="col-lg-6 col-md-6 grid-item education">
                        <div class="messonry-img" style="background-image: url('assets/images/grid-1.png');">
                            <div class="describe">
                                <div class="project-gallery">
                                    <a href="assets/images/grid-1.png" alt="" class="p-gallery-img open-gallery"><i
                                            class="far fa-images"></i></a>
                                    <a href="assets/images/grid-2.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-3.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-4.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-5.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-6.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-7.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-8.png" alt="" class="p-gallery-img"></a>
                                </div>
                                <div class="content">
                                    <a href="project-single.html"><span>Water</span></a>
                                    <a href="project-single.html">
                                        <h4>Together we can beat poverty</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 grid-item water">
                        <div class="messonry-img" style="background-image: url('assets/images/grid-2.png');">
                            <div class="describe">
                                <div class="project-gallery">
                                    <a href="assets/images/grid-1.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-2.png" alt="" class="p-gallery-img open-gallery"><i
                                            class="far fa-images"></i></a>
                                    <a href="assets/images/grid-3.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-4.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-5.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-6.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-7.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-8.png" alt="" class="p-gallery-img"></a>
                                </div>
                                <div class="content">
                                    <a href="project-single.html"><span>Water</span></a>
                                    <a href="project-single.html">
                                        <h4>Together we can beat poverty</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 grid-item environment">
                        <div class="messonry-img" style="background-image: url('assets/images/grid-3.png');">
                            <div class="describe">
                                <div class="project-gallery">
                                    <a href="assets/images/grid-1.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-2.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-3.png" alt="" class="p-gallery-img open-gallery"><i
                                            class="far fa-images"></i></a>
                                    <a href="assets/images/grid-4.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-5.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-6.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-7.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-8.png" alt="" class="p-gallery-img"></a>
                                </div>
                                <div class="content">
                                    <a href="project-single.html"><span>Water</span></a>
                                    <a href="project-single.html">
                                        <h4>Together we can beat poverty</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 grid-item health">
                        <div class="messonry-img" style="background-image: url('assets/images/grid-4.png');">
                            <div class="describe">
                                <div class="project-gallery">
                                    <a href="assets/images/grid-1.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-2.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-3.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-4.png" alt="" class="p-gallery-img open-gallery"><i
                                            class="far fa-images"></i></a>
                                    <a href="assets/images/grid-5.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-6.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-7.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-8.png" alt="" class="p-gallery-img"></a>
                                </div>
                                <div class="content">
                                    <a href="project-single.html"><span>Water</span></a>
                                    <a href="project-single.html">
                                        <h4>Together we can beat poverty</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 grid-item environment">
                        <div class="messonry-img" style="background-image: url('assets/images/grid-5.png');">
                            <div class="describe">
                                <div class="project-gallery">
                                    <a href="assets/images/grid-1.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-2.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-3.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-4.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-5.png" alt="" class="p-gallery-img open-gallery"><i
                                            class="far fa-images"></i></a>
                                    <a href="assets/images/grid-6.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-7.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-8.png" alt="" class="p-gallery-img"></a>
                                </div>
                                <div class="content">
                                    <a href="project-single.html"><span>Water</span></a>
                                    <a href="project-single.html">
                                        <h4>Together we can beat poverty</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 grid-item water">
                        <div class="messonry-img" style="background-image: url('assets/images/grid-6.png');">
                            <div class="describe">
                                <div class="project-gallery">
                                    <a href="assets/images/grid-1.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-2.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-3.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-4.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-5.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-6.png" alt="" class="p-gallery-img open-gallery"><i
                                            class="far fa-images"></i></a>
                                    <a href="assets/images/grid-7.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-8.png" alt="" class="p-gallery-img"></a>
                                </div>
                                <div class="content">
                                    <a href="project-single.html"><span>Water</span></a>
                                    <a href="project-single.html">
                                        <h4>Together we can beat poverty</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 grid-item education">
                        <div class="messonry-img" style="background-image: url('assets/images/grid-7.png');">
                            <div class="describe">
                                <div class="project-gallery">
                                    <a href="assets/images/grid-1.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-2.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-3.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-4.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-5.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-6.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-7.png" alt="" class="p-gallery-img open-gallery"><i
                                            class="far fa-images"></i></a>
                                    <a href="assets/images/grid-8.png" alt="" class="p-gallery-img"></a>
                                </div>
                                <div class="content">
                                    <a href="project-single.html"><span>Water</span></a>
                                    <a href="project-single.html">
                                        <h4>Together we can beat poverty</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 grid-item education">
                        <div class="messonry-img" style="background-image: url('assets/images/grid-8.png');">
                            <div class="describe">
                                <div class="project-gallery">
                                    <a href="assets/images/grid-1.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-2.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-3.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-4.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-5.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-6.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-7.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-8.png" alt="" class="p-gallery-img open-gallery"><i
                                            class="far fa-images"></i></a>
                                </div>
                                <div class="content">
                                    <a href="project-single.html"><span>Water</span></a>
                                    <a href="project-single.html">
                                        <h4>Together we can beat poverty</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 grid-item education">
                        <div class="messonry-img" style="background-image: url('assets/images/grid-8.png');">
                            <div class="describe">
                                <div class="project-gallery">
                                    <a href="assets/images/grid-1.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-2.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-3.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-4.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-5.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-6.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-7.png" alt="" class="p-gallery-img"></a>
                                    <a href="assets/images/grid-8.png" alt="" class="p-gallery-img open-gallery"><i
                                            class="far fa-images"></i></a>
                                </div>
                                <div class="content">
                                    <a href="project-single.html"><span>Water</span></a>
                                    <a href="project-single.html">
                                        <h4>Together we can beat poverty</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
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
</section>
@endsection
