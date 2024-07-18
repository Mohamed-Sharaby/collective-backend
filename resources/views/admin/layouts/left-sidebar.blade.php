<div class="vertical-menu">

    <div data-simplebar class="h-100">


        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{route('admin.main')}}" class="waves-effect">
                        <i class="dripicons-home"></i>
                        {{--                        <span class="badge rounded-pill bg-info float-end">3</span>--}}
                        <span>Dashboard</span>
                    </a>
                </li>


                <li>
                    <a href="{{route('admin.admins.index')}}" class=" waves-effect">
                        <i class="mdi mdi-account-group"></i>
                        <span>Admins</span>
                    </a>
                </li>


                {{--                <li>--}}
                {{--                    <a href="{{route('admin.abouts.index')}}" class=" waves-effect">--}}
                {{--                        <i class="mdi mdi-cart-plus"></i>--}}
                {{--                        <span>About Us</span>--}}
                {{--                    </a>--}}
                {{--                </li> --}}

                <li>
                    <a href="{{route('admin.services.index')}}" class=" waves-effect">
                        <i class="mdi mdi-segment"></i>
                        <span>Services</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.sliders.index')}}" class=" waves-effect">
                        <i class="mdi mdi-scooter"></i>
                        <span>Vertical Slider</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.experts.index')}}" class=" waves-effect">
                        <i class="mdi mdi-exclamation"></i>
                        <span>Expertise</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.contacts.index')}}" class=" waves-effect">
                        <i class="mdi mdi-email-variant"></i>
                        <span>Contacts</span>
                    </a>
                </li>


            </ul>
        </div>


    </div>
</div>
