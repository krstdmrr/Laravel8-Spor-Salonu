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
                        <i class="fas fa-bullseye"></i>Memberships
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin_message')}}" class="nav-link">
                        <i class="fas fa-file-text"></i>Contact Messages
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin_review')}}" class="nav-link">
                        <i class="fas fa-comments"></i>Reviews
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin_faq')}}" class="nav-link">
                        <i class="fas fa-question"></i>FAQ
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin_users')}}" class="nav-link">
                        <i class="fas fa-user"></i>User
                    </a>
                </li>
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-shopping-cart"></i>Orders</a>
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
                <li class="nav-item">
                    <a href="{{route('admin_setting')}}" class="nav-link">
                        <i class="fas fa-gear"></i>Settings
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
