<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Collective25</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="author" content="Collective">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta name="description" content="Collective">
    <!-- favicon icon -->
    @include('site.layouts.styles')

</head>

<body data-mobile-nav-style="classic" class="custom-cursor">
<!-- start cursor -->
<div class="cursor-page-inner">
    <div class="circle-cursor circle-cursor-inner"></div>
    <div class="circle-cursor circle-cursor-outer"></div>
</div>
<!-- end cursor -->
<!-- start header -->
<header>
    <!-- start navigation -->
    <nav class="navbar navbar-expand-lg header-transparent bg-medium-black  disable-fixed border-bottom border-color-transparent-white-light">
        <div class="container">
            <div class="col-auto">
                <a class="navbar-brand" href="{{route('site.index')}}">
                    <img src="{{asset('site/images/collective/logo.png')}}" data-at2x="images/demo-lawyer-logo-white@2x.png" alt="" class="default-logo">
                    <!-- <img src="images/demo-lawyer-logo-black.png" data-at2x="images/demo-lawyer-logo-black@2x.png" alt="" class="alt-logo">
                    <img src="images/demo-lawyer-logo-black.png" data-at2x="images/demo-lawyer-logo-black@2x.png" alt="" class="mobile-logo"> -->
                </a>
            </div>
            <div class="col-auto menu-order left-nav ps-60px lg-ps-20px md-ps-15px">
                <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end ms-auto" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{route('site.index')}}" class="nav-link">SERVICES</a></li>
                        <li class="nav-item"><a href="{{route('site.index')}}" class="nav-link">ABOUT US</a></li>
                        <li class="nav-item"><a href="{{route('site.contact')}}" class="nav-link">LETS TALK</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </nav>
    <!-- end navigation -->
</header>

<!-- Button trigger modal -->

@yield('content')

<!-- end section -->
<!-- start footer -->
<footer class="bg-section-gray py-0">



    <!-- start footer border -->

    <!-- end footer border -->
    <div class="container footer-bottom pt-25px pb-25px">
        <div class="row align-items-center">
            <!-- start footer menu -->
            <div class="col text-center text-lg-start sm-pb-10px">
                <p>hello@collective-25.com</p>
            </div>
            <!-- end footer menu -->
            <!-- start copyright -->
            <div class="col text-center text-lg-end last-paragraph-no-margin">
                <p> +971 50 744 3393</p>
            </div>
            <!-- end copyright -->
        </div>
        <div class="row align-items-center">
            <!-- start footer menu -->
            <div class="col text-center text-lg-start sm-pb-10px">
                <p>&copy;2024 Collective25 FZLLC. All rights reserved.</p>
            </div>
            <!-- end footer menu -->
            <!-- start copyright -->
            <div class="col text-center text-lg-end last-paragraph-no-margin">
                <p> Powered by <a href="https://nexeon.ae/" target="_blank" class="text-decoration-line-bottom text-white">nexeon</a></p>
            </div>
            <!-- end copyright -->
        </div>
    </div>
</footer>
<!-- end footer -->
<!-- start scroll progress -->
<div class="scroll-progress d-none d-xxl-block">
    <a href="#" class="scroll-top" aria-label="scroll">
        <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
    </a>
</div>
<!-- end scroll progress -->
<!-- javascript libraries -->
@include('site.layouts.scripts')

</body>

</html>
