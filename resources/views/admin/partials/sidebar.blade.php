<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ Route('admin.dashboard') }}">
                    <div class="brand-logo"></div>
                    <h4 class="brand-text mb-0">{{ env('APP_NAME') }}</h4>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                        class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                        class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                        data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" navigation-header"><span>Main</span></li>

            <li class="{{ (Route::currentRouteName() == 'admin.dashboard' ) ? 'active' : '' }} nav-item">
                <a href="{{ Route('admin.dashboard') }}">
                    <i class="feather icon-home"></i><span class="menu-title">Dashboard</span>
                </a>
            </li>

            <li class=" navigation-header"><span>Users</span></li>

            <li class="{{ (Route::currentRouteName() == 'admin.user-list' ) ? 'active' : '' }} nav-item">
                <a href="{{ Route('admin.user-list') }}">
                    <i class="feather icon-users"></i><span class="menu-title">Users</span>
                </a>
            </li>

            <li class=" navigation-header"><span>Categories</span></li>

            <li class="{{ (Route::currentRouteName() == 'admin.main-categories.index' ) ? 'active' : '' }} nav-item">
                <a href="{{ Route('admin.main-categories.index') }}">
                    <i class="feather icon-menu"></i><span class="menu-title">Main Categories</span>
                </a>
            </li>

            <li class="{{ (Route::currentRouteName() == 'admin.sub-categories.index' ) ? 'active' : '' }} nav-item">
                <a href="{{ Route('admin.sub-categories.index') }}">
                    <i class="feather icon-feather"></i><span class="menu-title">Sub Categories</span>
                </a>
            </li>

            {{-- countires list --}}
            <li class=" navigation-header"><span>Countires</span></li>
            <li class="{{ (Route::currentRouteName() == 'admin.countries.index' ) ? 'active' : '' }} nav-item">
                <a href="{{ Route('admin.countries.index') }}">
                    <i class="feather icon-feather"></i><span class="menu-title">Countires</span>
                </a>
            </li>
            <li class="{{ (Route::currentRouteName() == 'admin.country-banks.index' ) ? 'active' : '' }} nav-item">
                <a href="{{ Route('admin.country-banks.index') }}">
                    <i class="feather icon-feather"></i><span class="menu-title">Country Bank</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
