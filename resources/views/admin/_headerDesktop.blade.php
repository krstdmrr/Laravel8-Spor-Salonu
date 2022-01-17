<!-- HEADER DESKTOP-->
<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap float-right">
                <div class="header-button">
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image">
                                @if(Auth::user()->profile_photo_path)
                                    <img src="{{Storage::url(Auth::user()->profile_photo_path)}}" height="50" alt="">
                                @endif
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#">{{Auth::user()->name}}</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            @if(Auth::user()->profile_photo_path)
                                                <img src="{{Storage::url(Auth::user()->profile_photo_path)}}" height="50" alt="">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                                <a href="#">{{Auth::user()->name}}</a>
                                        </h5>
                                        <span class="email">{{Auth::user()->email}}</span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="{{route('logout')}}">
                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- HEADER DESKTOP-->
