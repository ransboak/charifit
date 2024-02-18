<div class="info-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="top-left">
                    <div class="date">
                        <p>
                            <span class="current-date"><i class="far fa-calendar-alt margin-right-8"></i> Date: 3th
                                December 2020</span> |
                        </p>
                    </div>
                    <div class="infobar-ticker">
                        <div class="single-ticker"><span><i class="fas fa-comments"></i></span>Give a Helping Hand
                            to those Who Need it</div>
                        <div class="single-ticker"><span><i class="fas fa-comments"></i></span>Help children
                            proverty and safe environment</div>
                        <div class="single-ticker"><span><i class="fas fa-comments"></i></span>Childrens are going
                            hungry around the world</div>
                        <div class="single-ticker"><span><i class="fas fa-comments"></i></span>Donate Food for the
                            poor people and children</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="social">
                    <a href="#">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Header -->
<header class="header-section overflow-visible">
    <div class="container vector-container">
        <div class="row align-items-center" id="mobile-menu-container">
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="logo">
                    <a href="index.html"><img src="assets/images/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-7 md-none">
                <div class="navigation">

                    <nav id="mobile-menu">
                        <ul class="main-menu">
                            <li><a href="#">home <span><i class="fas fa-angle-down"></i></span></a>
                                <ul class="submenu">
                                    <li><a href="index.html">home-1</a></li>
                                    <li><a href="home2.html">home-2</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">about</a></li>
                            <li><a href="#">Events <span><i class="fas fa-angle-down"></i></span></a>
                                <ul class="submenu">
                                    <li><a href="event-list.html">Event list</a></li>
                                    <li><a href="event-single.html">Event single</a></li>
                                </ul>
                            </li>
                            <li><a href="#">blog <span><i class="fas fa-angle-down"></i></span></a>
                                <ul class="submenu">
                                    <li><a href="blog.html">blog</a></li>
                                    <li><a href="blog-single.html">blog single</a></li>
                                </ul>
                            </li>
                            <li><a href="#">pages <span><i class="fas fa-angle-down"></i></span></a>
                                <ul class="submenu">
                                    <li><a href="donation-list.html">donation list</a></li>
                                    <li><a href="donation-single.html">donation single</a></li>
                                    <li><a href="faq.html">faq</a></li>
                                    <li><a href="project-list.html">project list</a></li>
                                    <li><a href="project-single.html">project single</a></li>
                                    <li><a href="volunteer-team.html">our team</a></li>
                                    <li><a href="our-mission.html">Our mission</a></li>
                                    <li><a href="404.html">404 page</a></li>
                                </ul>
                            </li>
                            <li><a href="#">
                                @if (Auth::user())
                                    {{Auth::user()->firstname}}
                                @else
                                    Account
                                @endif
                                <span><i class="fas fa-angle-down"></i></span></a>
                                <ul class="submenu">

                                    @if (Route::has('login'))
                                    @auth
                                    <li><a href={{url('/home')}}>Dashboard</a></li>
                                    @else
                                    <li><a href={{url('login')}}>Login</a></li>
                                    @if (Route::has('register'))
                                    <li><a href={{url('register')}}>Sign Up</a></li>
                                    @endif
                                    @endauth
                                    @endif
                                    {{-- <li><a href="donation-single.html">donation single</a></li>
                                    <li><a href="faq.html">faq</a></li>
                                    <li><a href="project-list.html">project list</a></li>
                                    <li><a href="project-single.html">project single</a></li>
                                    <li><a href="volunteer-team.html">our team</a></li>
                                    <li><a href="our-mission.html">Our mission</a></li>
                                    <li><a href="404.html">404 page</a></li> --}}
                                </ul>
                            </li>
                            {{-- <li><a href="contact.html">contact us</a></li> --}}
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                <ul class="nav-right-btn">
                    <li><a href="donation-single.html">Donation</a></li>
                </ul>
            </div>
        </div>
        <div class="mobile-menu"></div>
    </div>
</header>
