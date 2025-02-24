@extends('frontend.layout.master')
@section('title', 'about')
@section('about_active', 'active')
@section( 'content')


<div class="hero-wrap" style="background-image: url({{asset('frontend/images/bg_1.jpg);')}}">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                <div class="text">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">ទំព័រដើម</a></span> <span>អំពីពួកយើង</span></p>
                    <h1 class="mb-4 bread">អំពីពួកយើង</h1>
                </div>
            </div>
        </div>
    </div>
</div>

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

@endsection
