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
                        <div class="col-xl-2 col-lg-1">
                            <div class="logo">
                                <a href="{{route('home')}}">
                                    <img src="{{asset('assets')}}/img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 main-menu">
                            <form class="d-flex align-items-center" action="{{route('getproduct')}}" methos="post">
                                @csrf
                                @livewire('search')
                                <div class="input-group-append">
                                    <button style="height: 38px" class="btn" type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                            @section('footerjs')
                                @livewireScripts
                            @endsection
                        </div>
                        <div class="col-xl-5 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{route('home')}}">home</a></li>
                                        <li><a href={{route('aboutus')}}>about</a></li>
                                        <li><a href="{{route('categoryproduct')}}">Memberships <i class="ti-angle-down"></i></a>
                                            <ul class="submenu dropdown">
                                                @foreach($parentCategories as $rs)
                                                    <li class="dropdown">
                                                        <a class="dropdown" data-toggle="dropdown"
                                                           >{{$rs->title}}</a>
                                                        <div class="submenu dropdown-menu" style="margin-left: 200px">
                                                                @if(count($rs->children))
                                                                    @include('home.categorytree',['children'=>$rs->children])
                                                                @endif
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a href={{route('references')}}>References</a>
                                        </li>
                                        <li><a href={{route('faq')}}>Faq</a>
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
                                                class="fa fa-user-o white_border white_border"></i> {{Auth::user()->name}}
                                        </strong>
                                    </a>
                                    <ul class="dropdown-menu" style="background-color: black;">
                                        <li><a href="{{route('myprofile')}}"><i class="fa fa-user-o text-white"> My
                                                    Account</i></a>
                                        </li>
                                        <li><a href="{{route('user_orders')}}"><i class="fa fa-check text-white"> My
                                                    Orders</i></a>
                                        </li>
                                        <li><a href="{{route('logout')}}"><i class="fa fa-user-plus text-white">
                                                    Logout</i></a>
                                        </li>
                                        @php
                                            $userRoles=Auth::user()->roles->pluck('name');
                                        @endphp
                                        @if($userRoles->contains('admin'))
                                        </li>
                                        <a href="{{route('admin_home')}}" <i class="fa fa-superpowers text-white">
                                            Admin Panel</i></a>
                                        </li>
                                        @endif
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->

