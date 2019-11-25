<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="/images/alagadiTurtleLogo.svg" alt="Alagadi Turtle Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Alagadi Turtle</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/images/adminIcon.svg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                @can("isAdmin")
                    <a href="/users/{{Auth::user()->id}}" class="d-block">{{Auth::user()->full_name}}</a>
                @else
                    <a href="/user/{{Auth::user()->id}}/profile" class="d-block">{{Auth::user()->full_name}}</a>
                @endcan

            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/home" class="nav-link {{ Request::segment(1) === 'home' ? 'active' : null }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                @can('isAdmin')
                    <li class="nav-item">
                        <a href="/users" class="nav-link {{ Request::segment(1) === 'users' ? 'active' : null }}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Users</p>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a href="/turtles" class="nav-link {{ Request::segment(1) === 'turtles' ? 'active' : null }}">
                            <i class="nav-icon fas fa-sliders-h"></i>
                            <p>Devices</p>
                        </a>
                    </li>
                @endcan

                @can('isMember')
                    <li class="nav-item">
                        <a href="/users/{{\Illuminate\Support\Facades\Auth::user()->id}}/profile"
                           class="nav-link {{ Request::segment(1) === 'users' ? 'active' : null }}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>My Profile</p>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a href="/my-devices"
                           class="nav-link {{ Request::segment(1) === 'my-devices' ? 'active' : null }}">
                            <i class="nav-icon fas fa-sliders-h"></i>
                            <p>My Devices</p>
                        </a>
                    </li>
                @endcan


                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-power-off"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>

                {{-- <li class="nav-item has-treeview menu-open">
                     <a href="#" class="nav-link active">
                         <i class="nav-icon fa fa-dashboard"></i>
                         <p>
                             Starter Pages
                             <i class="right fa fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="#" class="nav-link active">
                                 <i class="fa fa-circle-o nav-icon"></i>
                                 <p>Active Page</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="fa fa-circle-o nav-icon"></i>
                                 <p>Inactive Page</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fa fa-th"></i>
                         <p>
                             Simple Link
                             <span class="right badge badge-danger">New</span>
                         </p>
                     </a>
                 </li>--}}

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
