<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Collective25</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="author" content="Collective">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta name="description" content="Collective">

    @include('site.layouts.styles')

</head>

<body data-mobile-nav-style="classic" class="custom-cursor">
<!-- Start Header -->
<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="{{route('site.index')}}">
                <img src="{{asset('site/images/collective/logo.png')}}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="{{route('site.index')}}#services" class="nav-link">SERVICES</a></li>
                    <li class="nav-item"><a href="{{route('site.index')}}#about_us" class="nav-link">ABOUT US</a></li>
                    <li class="nav-item"><a href="{{route('site.contact')}}" class="nav-link">LETS TALK</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- End Header -->

@yield('content')
<!-- Start Footer -->


@include('site.layouts.scripts')
</body>

</html>
