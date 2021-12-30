@auth
<div class="blog_left_sidebar">
    <aside class="single_sidebar_widget post_category_widget">
        <h4 class="widget_title">User Panel</h4>
        <hr>
        <ul class="list cat-list">
            <li>
                <a href="{{route('myprofile')}}" class="d-flex">
                    <p>My Profile</p>
                </a>
            </li>
            <li>
                <a href="{{route('user_orders')}}" class="d-flex">
                    <p>My Orders</p>
                </a>
            </li>
            <li>
                <a href="{{route('myreviews')}}" class="d-flex">
                    <p>My Reviews</p>
                </a>
            </li>
            <a href="{{route('logout')}}" class="d-flex">
                <p>Logout</p>
            </a>
            </li>
            @php
                $userRoles=Auth::user()->roles->pluck('name');
            @endphp
            @if($userRoles->contains('admin'))
            </li>
            <a href="{{route('admin_home')}}" class="d-flex">
                <p>Admin Panel</p>
            </a>
            </li>
            @endif

        </ul>
    </aside>
</div>
@endauth
