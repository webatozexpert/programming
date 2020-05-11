@extends('admin.master')
@section('content')

    <!--Slider Start-->
    <section class="container-fluid">
        <div class="row">

            <div class="col-12 pl-0 pr-0">
                <div class="owl-carousel">
                    @foreach($slides as $slide)
                    <div class="item">
                        <img src="{{asset('/')}}{{$slide->slide_image}}" alt="">
                        <div class="slide-caption">
                            <h2>{{ $slide->slide_title }}</h2>
                            <p>{{ $slide->slide_descrition }}</p>

                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!--Slider End-->
@endsection
