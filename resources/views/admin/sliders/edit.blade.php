@extends('admin.layouts.layout')
@section('title','Edit Slide')


@section('content')

    <div class="page-content">

        <!-- start page title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="page-title">
                            <h4>Slides</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('admin.main')}}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{route('admin.sliders.index')}}">Sliders</a></li>
                                <li class="breadcrumb-item active">Edit Slide</li>
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

                                <h4 class="header-title">Edit  Slide
                                    <span class="badge bg-info">{{$slider->title}}</span>
                                </h4>


                                {!! Form::model($slider,['route'=>['admin.sliders.update',$slider->id],'method'=>'PUT','role'=>'form','class'=>'form-horizontal','files'=>true]) !!}
                                @include('admin.sliders.form')
                                {!!Form::close() !!}

                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div> <!-- container-fluid -->
    </div>

@endsection
