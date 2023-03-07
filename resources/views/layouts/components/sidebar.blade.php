<aside id="layout-menu" class="layout-menu menu-vertical menu text-white" style="background-color:#bf0000;color:#fff;">
    <div class="app-brand demo">
        <a href="home" class="app-brand-link">
            <img src="{{ asset('logo-spmifeb-putih.png') }}" class="img-fluid me-3" width="150px">
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ Route::is('home') ? 'active' : '' }}">
            <a href="{{ route('home') }}" class="menu-link text-white">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        @include('layouts.components.menu.penjaminan-mutu')
        @include('layouts.components.menu.paper-ilmiah')
        @can('admin')
        @include('layouts.components.menu.informasi')
        @endcan

    </ul>
</aside>
<!-- / Menu -->
