<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/products*') ? 'active' : '' }}" href="#">
                    <span data-feather="shopping-bag"></span>
                    Products
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="#">
                    <span data-feather="file-text"></span>
                    Posts
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/galleries*') ? 'active' : '' }}" href="#">
                    <span data-feather="image"></span>
                    Galleries
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/about*') ? 'active' : '' }}" href="#">
                    <span data-feather="info"></span>
                    About
                </a>
            </li>
        </ul>

        @can('superadmin')
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Administrator</span>
            </h6>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/users*') ? 'active' : '' }}" href="#">
                        <span data-feather="users"></span>
                        User Management
                    </a>
                </li>
            </ul>
        @endcan
    </div>
</nav>
