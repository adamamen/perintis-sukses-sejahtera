<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('owner.dashboard') }}">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('owner.dashboard') }}">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ $type_menu == 'dashboard' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('owner.dashboard') }}">
                    <i class="fas fa-home"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="menu-header">Menu</li>
            <li class="nav-item dropdown {{ $type_menu === 'company' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Company</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('owner/product') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('owner.product') }}">Product</a>
                    </li>
                    <li class="{{ Request::is('owner/category') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('owner.category') }}">Category</a>
                    </li>
                    <li class="{{ Request::is('owner/brand') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('owner.brand') }}">Brand</a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
