<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">

            <!-- LOGO -->
            <div class="navbar-brand-box" style="background-color: black;">
                <a href="{{route('admin.main')}}" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{asset('site/images/collective/25Icon.png')}}" alt="" height="22">
                        </span>
                    <span class="logo-lg">
                            <img src="{{asset('site/images/collective/25Icon.png')}}" alt="" height="40">
                        </span>
                </a>

                <a href="{{route('admin.main')}}" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{asset('site/images/collective/25Icon.png')}}" alt="" height="22">
                        </span>
                    <span class="logo-lg">
                            <img src="{{asset('site/images/collective/25Icon.png')}}" alt="" height="40">
                        </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect"
                    id="vertical-menu-btn">
                <i class="mdi mdi-menu"></i>
            </button>

        </div>

        <!-- Search input -->
        <div class="search-wrap" id="search-wrap">
            <div class="search-bar">
                <input class="search-input form-control" placeholder="Search"/>
                <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                    <i class="mdi mdi-close-circle"></i>
                </a>
            </div>
        </div>

        <div class="d-flex">

            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="mdi mdi-fullscreen"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    <img class="rounded-circle header-profile-user"
                         src="{{(auth()->user()->image ?? '') ? auth()->user()->image : asset('admin/assets/images/users/avatar-7.jpg')}}"
                         alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1">{{auth()->user()->name ?? ''}}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>

            </div>

{{--            <div class="dropdown d-inline-block">--}}
{{--                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">--}}
{{--                    <i class="mdi mdi-cog-outline font-size-20"></i>--}}
{{--                </button>--}}
{{--            </div>--}}

        </div>
    </div>
</header>
