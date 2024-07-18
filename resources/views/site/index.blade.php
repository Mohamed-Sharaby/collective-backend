@extends('site.layouts.main')


@section('content')
    <!-- Start Banner -->
    <div class="banner">
        <div class="container">
            <div class="banner-content">
                <h1 class="typing-indicator" id="typing2"></h1>
                <h5 data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="2000" data-aos-offset="0">
                    COLLECTIVE25 IS MORE THAN JUST A CREATIVE AGENCY. </h5>
                <p data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="2500" data-aos-offset="0">
                    We are a group of passionate, creative individuals who value freedom and trust.<br>
                    Guided by our core principles and visionary team, we aim to redefine the traditional agency
                    model, ensuring client collaboration is enjoyable and smooth.
                </p>
            </div>
        </div>
        <ul class="marquee">
            <li>BRAND STRATEGY&nbsp;.&nbsp;</li>
            <li>BRANDING&nbsp;.&nbsp;</li>
            <li>DIGITAL MARKETING&nbsp;.&nbsp;</li>
            <li>RETAIL DESIGN&nbsp;.&nbsp;</li>
            <li>PACKAGING&nbsp;.&nbsp;</li>
            <li>BRAND ACTIVATIONS&nbsp;.&nbsp;</li>
            <li>POINT OF SALE SOLUTIONS&nbsp;.&nbsp;</li>
            <li>BRAND STRATEGY&nbsp;.&nbsp;</li>
            <li>BRANDING&nbsp;.&nbsp;</li>
            <li>DIGITAL MARKETING&nbsp;.&nbsp;</li>
            <li>RETAIL DESIGN&nbsp;.&nbsp;</li>
            <li>PACKAGING&nbsp;.&nbsp;</li>
            <li>BRAND ACTIVATIONS&nbsp;.&nbsp;</li>
            <li>POINT OF SALE SOLUTIONS&nbsp;.&nbsp;</li>
        </ul>
    </div>
    <!-- End Banner -->

    <!-- Start Content -->
    <div class="content">
        <section id="about_us" class="aboutus-wrap">
            <div class="progress-bar" id="progress-bar"></div>
            <div class="container-fluid">
                <div class="row aboutus-row">
                    <div class="col-md-6">
                        <div class="aboutus-img">
                            <img src="{{asset('site/images/collective/25-Light.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="aboutus-content">
                            <h2 id="headingTyping"></h2>
                            <p id="typing"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="services-wrap">
            <div class="overlay"></div>
            <div class="container">
                <div class="services-content">
                    <h2 data-aos="fade-up" data-aos-duration="600" data-aos-anchor-placement="center-bottom">{{$service->title}}
                    </h2>

                    <p data-aos="fade-up" data-aos-duration="600" data-aos-anchor-placement="center-bottom">
                        {{$service->body}}
                     </p>
                </div>
            </div>
        </section>

        <section class="vertical-slider-wrap">
            <div class="container">
                <ul class="vertical-slider">
                    @foreach($sliders as $slider)
                        <li>{{$slider->title}}</li>
                    @endforeach

                </ul>
            </div>
        </section>

        <section class="expertise-wrap">
            <div class="container">
                <div class="expertise-content">
                    <h2 data-aos="fade-up" data-aos-duration="600" data-aos-anchor-placement="bottom-bottom">Expertise
                    </h2>
                    <div class="accordion expertise-accordion accordion-flush" id="accordionFlushExample">
                        @foreach($experts as $index => $expert)
                        <div class="accordion-item" data-aos="fade-up" data-aos-duration="600"
                             data-aos-anchor-placement="center-bottom">
                            <button class="accordion-header accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#{{$expert->id}}" aria-expanded="false"
                                    aria-controls="{{$expert->id}}">
                                <span>0{{$index +1}}</span>
                                {{$expert->title}}
                            </button>
                            <div id="{{$expert->id}}" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>{{$expert->body}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>

        <section class="why-choose-wrap">
            <div class="container">
                <div class="expertise-content">
                    <h2 data-aos="fade-up" data-aos-duration="600" data-aos-anchor-placement="center-bottom">Why Choose
                        <span data-aos="fade-up" data-aos-duration="600">Collective25</span>
                    </h2>
                    <p data-aos="fade-up" data-aos-duration="600" data-aos-anchor-placement="center-bottom">We view our
                        clients as partners on a journey of success, collaborating closely to achieve shared goals and
                        objectives.</p>
                    <p data-aos="fade-up" data-aos-duration="600" data-aos-anchor-placement="center-bottom">We EMPOWER,
                        CREATE, INSPIRE, and we love it.</p>
                    <p data-aos="fade-up" data-aos-duration="600" data-aos-anchor-placement="center-bottom">What sets us
                        apart is our comprehensive knowledge and skill in the services we endorse.</p>
                </div>
            </div>
        </section>

        <section class="vision-together-wrap">
            <div class="container">
                <a href="{{route('site.contact')}}" class="vision-together-content" data-aos-anchor-placement="center-bottom"
                   data-aos="zoom-in" data-aos-duration="600">
                    <img src="{{asset('site/images/collective/25-Icon-orange.png')}}" class="w-60px mb-0" alt=""
                         data-no-retina="">
                    <h3>Let's actualize<br> your vision together.</h3>
                </a>
            </div>
        </section>
    </div>
    <!-- Start Content -->
    <footer>
        <div class="container-fluid">
            <div class="footer-content">
                <p>&copy; 2024 <a href="/">Collective25 FZ-LLC</a>. All Rights Reserved.</p>
                <img src="{{asset('site/images/collective/25-White.png')}}" alt="">
            </div>
        </div>
        <button class="scrollToTop" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                <path
                    d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"
                    fill="#ffffff"/>
            </svg>
        </button>
    </footer>
    <!-- End Footer -->

@endsection
