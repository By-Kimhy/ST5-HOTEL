@extends('frontend.layout.master')
@section('title', 'room')
@section('room_active', 'active')
@section( 'content')

<div class="hero-wrap" style="background-image: url({{asset('frontend/images/bg_1.jpg);')}}">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                <div class="text">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">ទំព័រដើម</a></span> <span>បន្ទប់</span></p>
                    <h1 class="mb-4 bread">បន្ទប់</h1>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">

                    @foreach($roomtypes as $key => $value)
                    <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                        <div class="room">
                            <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url({{url('frontend/images/room-2.jpg);')}}">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3 text-center">
                                <h3 class="mb-3"><a href="rooms-single.html">{{$value->roomType_name}}</a></h3>
                                <p><span class="price mr-2">{{$value->roomType_price}}</span> <span class="per">per night</span></p>
                                <ul class="list">
                                    <li><span>Max:</span> {{$value->roomType_Capacity}} Persons</li>
                                    <li><span>Size:</span> 45 m2</li>
                                    <li><span>View:</span> {{$value->roomType_Description}}</li>
                                    <li><span>Bed:</span> {{$value->roomType_bed}}</li>
                                </ul>
                                <hr>
                                <p class="pt-1"><a href="room-single.html" class="btn-custom">Book Now <span class="icon-long-arrow-right"></span></a></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
