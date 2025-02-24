@extends('frontend.layout.master')
@section('title', 'contact')
@section('contact_active', 'active')
@section( 'content')

<div class="hero-wrap" style="background-image: url({{asset('frontend/images/bg_1.jpg);')}}">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                <div class="text">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">ទំព័រដើម</a></span> <span>ទំនាក់ទំនង</span></p>
                    <h1 class="mb-4 bread">ទាក់ទងមកយើងខ្ញុំ</h1>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
                <h2 class="h3">ព័ត៌មានទំនាក់ទំនង</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p><span>អាស័យដ្ឋាន:</span> អគារលេខ ៨៦A មហាវិថីសហព័ន្ធរុស្ស៊ី សង្កាត់ទឹកល្អក់១ ខណ្ឌទួលគោក រាជធានីភ្នំពេញ</p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p><span>លេខទូរស័ព្ទ:</span> <a href="tel://1234567920">	+855 12 888 999</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p><span>អ៊ីមែល:</span> <a href="mailto:info@yoursite.com">hotel@ST5.com</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p><span>គេហទំព័រ</span> <a href="#">ST5-HOTEL.com</a></p>
                </div>
            </div>
        </div>
        <div class="row block-9">
            <div class="col-md-12 order-md-last d-flex">
                <form action="#" class="bg-white p-5 contact-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>


@endsection
