@extends('admin.layouts.layout')
@section('title','NexGame')

@section('content')


    <div class="page-content">

        <!-- start page title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-6">

                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="container-fluid">

            <div class="page-content-wrapper">

                <div class="row">

                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="{{route('admin.contacts.index')}}">
                                            <div class="text-center">
                                                <p class="font-size-16">Contacts</p>
                                                <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                        <span class="avatar-title rounded-circle bg-soft-primary">
                                                                <i class="mdi mdi-account-group text-primary font-size-20"></i>
                                                            </span>
                                                </div>
                                                <h5 class="font-size-22">{{\App\Models\Contact::count()}}</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>


                        </div>

                    </div>
                </div>



{{--                <div class="row">--}}
{{--                    <h3 class="text-dark">Drivers</h3>--}}
{{--                    <div class="table-responsive">--}}
{{--                        {{$dataTable->table(['class'=>'table table-striped table-bordered text-center dt-responsive nowrap'])}}--}}
{{--                    </div>--}}
{{--                </div>--}}



            </div>

        </div> <!-- container-fluid -->
    </div>


@endsection

{{--@include('admin.layouts.datatables_scripts' )--}}
