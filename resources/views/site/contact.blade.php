@extends('site.layouts.main')

@section('content')
    <!-- Modal -->

    <!-- end header -->
    <!-- start banner slider -->
    <section class="bg-section-gray border-bottom border-color-dark-gray lg-pt-10 xs-pt-30">


        <div class="container">
            <div class="row g-0">
                <div class="col-10 col-xl-10 col-lg-9 ">
                    <h4 class="d-inline-block  text-orange mb-8 ls-minus-1px">Let’s Talk</h4>
                    <p class="box fs-15">Whether you're looking to innovate, strategize, or simply explore
                        possibilities, we're here to collaborate. <br><br>Reach out today</p>

                    @include('admin.layouts.status')

                    <form action="{{route('site.save')}}" method="post">
                        @csrf
                        <label class="text-dark-gray mb-10px fw-500">Name</label>
                        <input class="mb-20px bg-very-light-gray form-control required" type="text" name="name">
                        <label class="text-dark-gray mb-10px fw-500">Email</label>
                        <input class="mb-20px bg-very-light-gray form-control required" type="email" name="email">
                        <label class="text-dark-gray mb-10px fw-500">Message</label>
                        <textarea class="form-control" cols="40" rows="3" name="message"></textarea>

                        <button class="btn btn-large btn-rounded btn-dark-gray btn-box-shadow submit w-100 mb-20px"
                                style="background-color: #FF644E;" type="submit">Submit
                        </button>

                        <div class="form-results mt-20px d-none"></div>

                    </form>


                </div>
            </div>
        </div>

    </section>

@endsection
