<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="{{route('admin_home')}}">
            <img src="{{asset('assets')}}/admin/images/icon/logo.png" alt="Cool Admin"/>
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">

            <ul class="list-unstyled navbar__list">

                <li class="nav-item">
                    <a href="{{route('admin_category')}}" class="nav-link">
                        <i class="fas fa-copy"></i>Categories
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin_products')}}" class="nav-link">
                        <i class="fas fa-angle-left right"></i>Memberships

                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin_message')}}" class="nav-link">
                        <i class="fas fa-angle-left right"></i>Contact Messages

                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin_review')}}" class="nav-link">
                        <i class="fas fa-angle-left right"></i>Reviews
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin_faq')}}" class="nav-link">
                        <i class="fas fa-angle-left right"></i>FAQ
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin_setting')}}" class="nav-link">
                        <i class="fas fa-circle text-danger"></i>Settings

                    </a>
                </li>

                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>Orders</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{route('admin_orders')}}">All Orders</a>
                        </li>
                        <li>
                            <a href="{{route('admin_order_list',['status'=>'new'])}}">New Orders</a>
                        </li>
                        <li>
                            <a href="{{route('admin_order_list',['status'=>'accepted'])}}">Accepted Orders</a>
                        </li>
                        <li>
                            <a href="{{route('admin_order_list',['status'=>'canceled'])}}">Canceled Orders</a>
                        </li>
                        <li>
                            <a href="{{route('admin_order_list',['status'=>'completed'])}}">Completed Orders</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="chart.html">
                        <i class="fas fa-chart-bar"></i>Charts</a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="fas fa-table"></i>Tables</a>
                </li>
                <li>
                    <a href="form.html">
                        <i class="far fa-check-square"></i>Forms</a>
                </li>
                <li>
                    <a href="calendar.html">
                        <i class="fas fa-calendar-alt"></i>Calendar</a>
                </li>
                <li>
                    <a href="map.html">
                        <i class="fas fa-map-marker-alt"></i>Maps</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Pages</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                        <li>
                            <a href="register.html">Register</a>
                        </li>
                        <li>
                            <a href="forget-pass.html">Forget Password</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-desktop"></i>UI Elements</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="button.html">Button</a>
                        </li>
                        <li>
                            <a href="badge.html">Badges</a>
                        </li>
                        <li>
                            <a href="tab.html">Tabs</a>
                        </li>
                        <li>
                            <a href="card.html">Cards</a>
                        </li>
                        <li>
                            <a href="alert.html">Alerts</a>
                        </li>
                        <li>
                            <a href="progress-bar.html">Progress Bars</a>
                        </li>
                        <li>
                            <a href="modal.html">Modals</a>
                        </li>
                        <li>
                            <a href="switch.html">Switchs</a>
                        </li>
                        <li>
                            <a href="grid.html">Grids</a>
                        </li>
                        <li>
                            <a href="fontawesome.html">Fontawesome Icon</a>
                        </li>
                        <li>
                            <a href="typo.html">Typography</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
