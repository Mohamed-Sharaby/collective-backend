@extends('admin.layouts.layout')
@section('title','Edit Services')


@section('content')

    <div class="page-content">

        <!-- start page title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="page-title">
                            <h4>Admins</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('admin.main')}}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{route('admin.services.index')}}">About Us</a></li>
                                <li class="breadcrumb-item active">Edit Services</li>
                            </ol>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="container-fluid">

            <div class="page-content-wrapper">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="header-title">Edit  Services

                                </h4>


                                {!! Form::model($service,['route'=>['admin.services.update',$service->id],'method'=>'PUT','role'=>'form','class'=>'form-horizontal','files'=>true]) !!}


                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="title" class="form-label"> Title</label>
                                                            {!! Form::text('title',null,[
                                                        'class' =>'form-control '.($errors->has('title') ? ' is-invalid' : null),
                                                        'placeholder'=> 'Title' ,'required'
                                                        ]) !!}
                                                            @error('title')
                                                            <div class="invalid-feedback" style="color: #ef1010">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror

                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="body" class="form-label"> Description</label>
                                                            <textarea name="body" id="body" cols="30" rows="4"
                                                                      required    class="form-control {{$errors->has('body') ? 'is-invalid' : null}}">{{$service->body}}</textarea>
                                                            @error('body')
                                                            <div class="invalid-feedback" style="color: #ef1010">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="d-grid gap-2 mt-3">
                                                    <button class="btn btn-success btn-block" type="submit">Save</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>



                                {!!Form::close() !!}

                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div> <!-- container-fluid -->
    </div>

@endsection
