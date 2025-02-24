@extends('frontend.layout.master')
@section('title', 'Home')
@section('home_active', 'active')
@section( 'content')



<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image:url({{asset('frontend/images/bg_1.jpg);')}}">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-12 ftco-animate text-center">
                    <div class="text mb-5 pb-3">
                        <h1 class="mb-3">សូមស្វាគមន៍មកកាន់ Deluxe</h1>
                        <h2>សណ្ឋាគារ &amp; រីសត</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image:url({{asset('frontend/images/bg_2.jpg);')}}">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-12 ftco-animate text-center">
                    <div class="text mb-5 pb-3">
                        <h1 class="mb-3">រីករាយជាមួយបទពិសោធន៍ដ៏ប្រណិត</h1>
                        <h2>ចូលរួមជាមួយយើង</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-booking">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="#" class="booking-form">
                    <div class="row">
                        <div class="col-md d-flex">
                            <div class="form-group p-4 align-self-stretch d-flex align-items-end">
                                <div class="wrap">
                                    <label for="#">Check-in Date</label>
                                    <input type="text" class="form-control checkin_date" placeholder="Check-in date">
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex">
                            <div class="form-group p-4 align-self-stretch d-flex align-items-end">
                                <div class="wrap">
                                    <label for="#">Check-out Date</label>
                                    <input type="text" class="form-control checkout_date" placeholder="Check-out date">
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex">
                            <div class="form-group p-4 align-self-stretch d-flex align-items-end">
                                <div class="wrap">
                                    <label for="#">ចំនួនបន្ទប់</label>
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                            <select name="" id="" class="form-control">
                                                <option value="">1 បន្ទប់</option>
                                                <option value="">2 បន្ទប់</option>
                                                <option value="">3 បន្ទប់</option>
                                                <option value="">4 បន្ទប់</option>
                                                <option value="">5 បន្ទប់</option>
                                                <option value="">6 បន្ទប់</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex">
                            <div class="form-group p-4 align-self-stretch d-flex align-items-end">
                                <div class="wrap">
                                    <label for="#">ប្រភេទបន្ទប់</label>
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                            <select name="" id="" class="form-control">
                                                <option value="">បន្ទប់​ ធម្មតា</option>
                                                <option value="">បន្ទប់គ្រួសារ</option>
                                                <option value="">បន្ទប់ Deluxe</option>
                                                <option value="">បន្ទប់ Classic</option>
                                                <option value="">បន្ទប់ Superior</option>
                                                <option value="">បន្ទប់ Luxury</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex">
                            <div class="form-group d-flex align-self-stretch">
                                <input type="submit" value="ស្វែងរក" class="btn btn-primary py-3 px-4 align-self-stretch">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section ftc-no-pb ftc-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{asset('frontend/images/bg_2.jpg);')}}">
                <a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
                    <span class="icon-play"></span>
                </a>
            </div>
            <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
                <div class="heading-section heading-section-wo-line pt-md-5 pl-md-5 mb-5">
                    <div class="ml-md-0">
                        <span class="subheading">សូមស្វាគមន៍មកកាន់សណ្ឋាគារ Deluxe</span>
                        <h2 class="mb-4">សូមស្វាគមន៍មកកាន់សណ្ឋាគាររបស់យើង</h2>
                    </div>
                </div>
                <div class="pb-md-5">
                    <p>នៅតាមផ្លូវនាងបានជួបច្បាប់ចម្លងមួយ។ ច្បាប់ចម្លងនេះបានព្រមាន អត្ថបទពិការភ្នែកតូចថា កន្លែងដែលវាមកពី វានឹងត្រូវបានសរសេរឡើងវិញមួយពាន់ដង ហើយអ្វីគ្រប់យ៉ាងដែលនៅសេសសល់ពីប្រភពដើមរបស់វានឹងក្លាយជាពាក្យ "និង" ហើយអត្ថបទពិការភ្នែកតូចគួរតែត្រលប់មកវិញ ហើយត្រលប់ទៅវាវិញ។ ប្រទេសដែលមានសុវត្ថិភាព។ ប៉ុន្តែគ្មានអ្វីដែលច្បាប់ចម្លងបាននិយាយអាចបញ្ចុះបញ្ចូលនាងទេ ហើយដូច្នេះវាមិនចំណាយពេលយូរទេ រហូតដល់អ្នកសរសេរចម្លងដ៏ឆ្កួតលីលាមួយចំនួនបានស្ទាក់ចាប់នាង ធ្វើឱ្យនាងស្រវឹងជាមួយ Longe និង Parole ហើយអូសនាងចូលទៅក្នុងទីភ្នាក់ងាររបស់ពួកគេ ដែលជាកន្លែងដែលពួកគេបានធ្វើបាបនាងសម្រាប់ពួកគេ។</p>
                    <p>នៅពេលដែលនាងទៅដល់ភ្នំទីមួយនៃភ្នំ Italic នាងបានឃើញទិដ្ឋភាពចុងក្រោយនៅលើមេឃនៃស្រុកកំណើតរបស់នាង Bookmarksgrove ដែលជាចំណងជើងនៃភូមិអក្ខរក្រម និងខ្សែបន្ទាត់នៃផ្លូវផ្ទាល់របស់នាងគឺ Line Lane ។ គួរឲ្យអាណិតណាស់ សំណួរដែលសួរឡើងលើថ្ពាល់របស់នាង បន្ទាប់មកនាងបានបន្តដំណើររបស់នាង។</p>
                    <ul class="ftco-social d-flex">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services py-4 d-block text-center">
                    <div class="d-flex justify-content-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-reception-bell"></span>
                        </div>
                    </div>
                    <div class="media-body p-2 mt-2">
                        <h3 class="heading mb-3">24/7 Front Desk</h3>
                        <p>បុគ្គលិកដែលខិតខំប្រឹងប្រែងរបស់យើង ធានានូវភាពងាយស្រួលរបស់អ្នកគ្រប់ពេលវេលា មិនថាថ្ងៃ ឬយប់</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services py-4 d-block text-center">
                    <div class="d-flex justify-content-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-serving-dish"></span>
                        </div>
                    </div>
                    <div class="media-body p-2 mt-2">
                        <h3 class="heading mb-3">Restaurant Bar</h3>
                        <p>អាហារល្អគឺជាមូលដ្ឋានគ្រឹះនៃសុភមង្គលពិតប្រាកដ។</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-sel Searchf-stretch ftco-animate">
                <div class="media block-6 services py-4 d-block text-center">
                    <div class="d-flex justify-content-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-car"></span>
                        </div>
                    </div>
                    <div class="media-body p-2 mt-2">
                        <h3 class="heading mb-3">Transfer Services</h3>
                        <p>សេវាកម្មចុះពីអាកាសយានដ្ឋានដែលផ្តល់ជូនរថយន្ត 4 កៅអី រថយន្ត 7 កៅអី និងរថយន្ត 16 កៅអី</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services py-4 d-block text-center">
                    <div class="d-flex justify-content-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-spa"></span>
                        </div>
                    </div>
                    <div class="media-body p-2 mt-2">
                        <h3 class="heading mb-3">Spa Suites</h3>
                        <p>សណ្ឋាគារ​ដែល​ផ្តល់​ស្ប៉ា​អនុញ្ញាត​ឱ្យ​ភ្ញៀវ​ស្វែង​យល់ និង​ទទួល​បាន​បទពិសោធន៍​ពី​ការ​ព្យាបាល និង​ផលិតផល​ឯកទេស</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Done with Database --}}
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2 class="mb-4">បន្ទប់របស់យើង</h2>
            </div>
        </div>
        <div class="row">

            @foreach($roomtypes as $key => $value)
            <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                <div class="room">
                    <a href="{{url('/rooms')}}" class="img d-flex justify-content-center align-items-center" style="background-image: url({{asset('frontend/images/room-1.jpg);')}}">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search2"></span>
                        </div>
                    </a>
                    <div class="text p-3 text-center">
                        <h3 class="mb-3"><a href="rooms.html">{{$value->roomType_name}}</a></h3>
                        <p><span class="price mr-2">{{$value->roomType_price}}</span> <span class="per">per night</span></p>
                        <hr>
                        <p class="pt-1"><a href="room-single.html" class="btn-custom">View Room Details <span class="icon-long-arrow-right"></span></a></p>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</section>
{{-- Done with Database --}}
<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url({{asset('frontend/images/bg_1.jpg);')}}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="{{$guests}}">0</strong>
                                <span>Happy Guests</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="{{$rooms}}">0</strong>
                                <span>Rooms</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="{{$staffs}}">0</strong>
                                <span>Staffs</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="{{$feedbacks}}">0</strong>
                                <span>Feedbacks</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Done with Database --}}
<section class="ftco-section testimony-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 ftco-animate">
                <div class="row ftco-animate">
                    <div class="col-md-12">
                        <div class="carousel-testimony owl-carousel ftco-owl">

                            @foreach($feedback as $key => $value)
                                <div class="item">
                                    <div class="testimony-wrap py-4 pb-5">
                                        <div class="user-img mb-4" style="background-image: url({{asset('frontend/images/person_1.jpg)')}}">
                                            <span class="quote d-flex align-items-center justify-content-center">
                                                <i class="icon-quote-left"></i>
                                            </span>
                                        </div>
                                        <div class="text text-center">
                                            <p class="mb-4">{{$value->f_comment}}</p>
                                            <p class="name">{{$value->g_name}}</p>
                                            <span class="position">Guests</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="instagram">
    <div class="container-fluid">
        <div class="row no-gutters justify-content-center pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2><span>Instagram</span></h2>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-sm-12 col-md ftco-animate">
                <a href="{{asset('frontend/images/insta-1.jpg')}}" class="insta-img image-popup" style="background-image: url({{asset('frontend/images/insta-1.jpg);')}}">
                    <div class="icon d-flex justify-content-center">
                        <span class="icon-instagram align-self-center"></span>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md ftco-animate">
                <a href="{{asset('frontend/images/insta-2.jpg')}}" class="insta-img image-popup" style="background-image: url({{asset('frontend/images/insta-2.jpg);')}}">
                    <div class="icon d-flex justify-content-center">
                        <span class="icon-instagram align-self-center"></span>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md ftco-animate">
                <a href="{{asset('frontend/images/insta-3.jpg')}}" class="insta-img image-popup" style="background-image: url({{asset('frontend/images/insta-3.jpg);')}}">
                    <div class="icon d-flex justify-content-center">
                        <span class="icon-instagram align-self-center"></span>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md ftco-animate">
                <a href="{{asset('frontend/images/insta-4.jpg')}}" class="insta-img image-popup" style="background-image: url({{asset('frontend/images/insta-4.jpg);')}}">
                    <div class="icon d-flex justify-content-center">
                        <span class="icon-instagram align-self-center"></span>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md ftco-animate">
                <a href="{{asset('frontend/images/insta-5.jpg')}}" class="insta-img image-popup" style="background-image: url({{asset('frontend/images/insta-5.jpg);')}}">
                    <div class="icon d-flex justify-content-center">
                        <span class="icon-instagram align-self-center"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
