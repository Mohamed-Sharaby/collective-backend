@extends('site.layouts.main')


@section('content')
<!-- Start Content -->
<div class="content">
    <section class="contactus-wrap">
        <div class="container">
            <div class="contactus-content">
                <h2>CONTACT US</h2>
                <p>Whether you're looking to innovate, strategize, or simply
                    explore possibilities, we're here to collaborate. <br>
                    Reach out today</p>
                <div class="text-center mr-3 m-3">
                    @include('admin.layouts.status')
                </div>
                <form action="{{route('site-old.save')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" required name="name" value="{{old('name')}}">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" required name="email" value="{{old('email')}}">
                    </div>
                    <div class="form-group">
                        <label for="">Message</label>
                        <textarea class="form-control" name="message" required>{{old('message')}}</textarea>
                    </div>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
        <div class="contact-btm">
            <ul>
                <li><a href="tels:+971507443393">+971507443393</a></li>
                <li><a href="mailto:hello@collective-25.com">hello@collective-25.com</a></li>
                <li>P.O.Box 58516 Dubai</li>
            </ul>
            <img src="site/images/collective/25-Icon-orange.png" alt="">
        </div>
    </section>
</div>
<!-- Start Content -->
@endsection
