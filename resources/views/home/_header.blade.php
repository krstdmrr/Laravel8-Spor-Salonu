@php
    $parentCategories = \App\Http\Controllers\HomeController::categoryList();
@endphp
<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid ">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="{{route('home')}}">
                                    <img src="{{asset('assets')}}/img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{route('home')}}">home</a></li>
                                        <li><a href={{route('aboutus')}}>about</a></li>
                                        <li><a href="pricing.html">pricing <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                @foreach($parentCategories as $rs)
                                                    <li class="dropdown side-dropdown">
                                                        <a class="dropdown-toggle" data-toggle="dropdown"
                                                           aria-expanded="true">{{$rs->title}}</a>
                                                        <div class="sub-menu">
                                                            <div class="row">
                                                                @if(count($rs->children))
                                                                    @include('home.categorytree',['children'=>$rs->children])
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a href={{route('gallery')}}>Gallery</a></li>
                                        <li><a href={{route('references')}}>References</a>
                                            <ul class="submenu">

                                                <li><a href="elements.html">elements</a></li>
                                            </ul>
                                        </li>
                                        <li><a href={{route('faq')}}>Faq</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="single-blog.html">single-blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href={{route('contact')}}>Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3">

                            <li class="dropdown">
                                @auth
                                    <a href="#" class="dropdown-toggle text-white" data-toggle="dropdown" role="button"
                                       aria-expanded="true">
                                        <strong class="text-uppercase text-white"><i
                                                class="fa fa-user-o white_border white_border"></i> {{Auth::user()->name}} </strong>
                                    </a>
                                    <ul class="dropdown-menu" style="background-color: black;" >
                                        <li><a href="{{route('myprofile')}}"><i class="fa fa-user-o text-white"> My Account</i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-heart-o text-white"> My Wishlist</i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-check text-white"> Checklist</i></a>
                                        </li>
                                        <li><a href="{{route('logout')}}"><i class="fa fa-user-plus text-white"> Logout</i></a>
                                        </li>

                                    </ul>



                            @endauth
                            @guest
                                <div style="color:darkred" class="text-uppercase text-white">
                                    <strong><a href="/login" class="text-uppercase text-white">Login</a> / <a
                                            href="/register" class="text-uppercase text-white">Register</a></strong>
                                </div>
                                @endguest


                                </li>
                        </div>

                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- header-end -->

