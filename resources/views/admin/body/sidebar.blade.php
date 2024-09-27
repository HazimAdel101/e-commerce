
<nav class="sidebar">
    <div class="sidebar-header">
        <a href="{{route('admin.dashboard')}}" class="sidebar-brand">
            Awesome<span>Store</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Manage</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="{{route('admin.users.index')}}" role="button"
                    aria-expanded="false" aria-controls="users">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Users</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#categories" role="button"
                    aria-expanded="false" aria-controls="categories">
                    <i class="link-icon" data-feather="categories"></i>
                    <span class="link-title">Categories</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#products" role="button"
                    aria-expanded="false" aria-controls="products">
                    <i class="link-icon" data-feather="products"></i>
                    <span class="link-title">Products</span>
                </a>
            </li>
        </ul>
    </div>
</nav>