@extends('client.layouts.main')
@section('page')
<link rel="stylesheet" href="{{asset('css/home.css')}}">

{{-- Landing Section --}}
<div class="container-fluid landingpage position-relative" >
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 class="hero-heading px-4 pt-5 pt-md-0">BE THEIR <span class="text-teal">HERO</span></h1>
                <h2 class="hero-subtitle px-4">From Shelters to Loving Homes, <br>Help Us Save More Pets.</h2>
                <div>
                    <a class="btn btn-teal rounded-pill text-white px-4 py-2 mx-3" href="#">DONATE</a>
                </div>
            </div>
            <div class="col-6 col-lg-6">
                <img src="{{asset('images/hero-img.png')}}" class="img-fluid pt-5 text-center" alt="">
            </div>
        </div>
    </div>


        {{-- Overlapping Boxes Section --}}
        <div class="row  position-absolute w-100 d-none d-md-flex" style="bottom: -280px;"> <!-- Adjust bottom value for overlap -->
            <div class="col-md-3 text-center mx-3 shadow rounded-4 p-4" style="background-color: #EDEFF0;">
                <img src="{{asset('images/dogo-adoption.png')}}"  width="200" alt="Skipper">
                <h4 class="text-dark">SKIPPERS</h4>
                <p class="text-muted">Consectetur adipiscing elit, sed do eiusmod tempor.</p>
                <a class="btn btn-teal rounded-pill text-white px-4 py-2 mx-3" href="#">Adopt Me</a>
            </div>
            <div class="col-md-3 text-center mx-3 shadow rounded-4 text-white  p-4" style="background-color: #28146E;">
                <img src="{{asset('images/cat-adoption.png')}}"  width="200" alt="Skipper">
                <h2>SAVE A LIFE</h2>
                <p class="text-white">Consectetur adipiscing elit, sed do eiusmod tempor.</p>
                <div>
                    <a href="{{route('get-reportcasepage')}}" class="btn btn-light rounded-pill px-3">REPORT A CASE</a>
                </div>
            </div>
        </div>
    </div>


{{-- Divider --}}
<div class="divider d-none d-md-flex" style="height: 40vh;"></div>

{{-- Petcare Section --}}
<div class="container-fluid petcaresection py-5">
    <h1 class="text-center hero-heading-black mb-3">PET CARE</h1>
    <p class="text-center mb-5" style="font-size: 24px;">
        Connect with the best veterinary<br> professionals - Your pets deserve the best.
    </p>
    <div class="container vetcontainer">
        <div class="row justify-content-center">
            <!-- Left Side Card -->
            <div class="col-lg-3 mb-4">
                <div class="card text-white text-center shadow verified-card">
                    <div class="card-body">
                        <div class="badge-icon mb-3">
                            <img src="{{asset('icons/verified.png')}}" width="70" alt="Badge">
                        </div>
                        <h4 class="mb-3">TOP VERIFIED VETS</h4>
                        <p>Vets on our platform are verified professionals that adhere to lawful medical practices.</p>
                        <a href="#" class="mt-3 text-white" style="font-size: 20px;">READ MORE</a>
                    </div>
                </div>
            </div>

            <!-- Vet Profile Cards -->
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card text-center shadow profile-card pb-3">
                            <img src="{{asset('icons/avatar-dummy.png')}}" class="rounded-circle mx-auto mt-3" alt="Vet" width="80">
                            <div class="card-body">
                                <h5 class="card-title">ZEN CLINIC <span><img src="{{asset('icons/verified.png')}}" width="20" alt="Badge"></span></h5>
                                <p class="star-rating">★★★★★</p>
                                <p class="card-text">“Vets on our platform are verified professionals that adhere to lawful medical practices.”</p>
                                <a href="{{route('get-find-vetspage')}}" class="btn btn-dark">BOOK AN APPOINTMENT</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card text-center shadow profile-card">
                            <img src="{{asset('icons/avatar-dummy.png')}}" class="rounded-circle mx-auto mt-3" alt="Vet" width="80">
                            <div class="card-body">
                                <h5 class="card-title">VET DR. ALI RAZA <span><img src="{{asset('icons/verified.png')}}" width="20" alt="Badge"></span></h5>
                                <p class="star-rating">★★★★★</p>
                                <p class="card-text">“Vets on our platform are verified professionals that adhere to lawful medical practices.”</p>
                                <a href="{{route('get-find-vetspage')}}" class="btn btn-dark">BOOK AN APPOINTMENT</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card text-center shadow profile-card">
                            <img src="{{asset('icons/avatar-dummy.png')}}" class="rounded-circle mx-auto mt-3" alt="Vet" width="80">
                            <div class="card-body">
                                <h5 class="card-title">KURWA CLINIC <span><img src="{{asset('icons/verified.png')}}" width="20" alt="Badge"></span></h5>
                                <p class="star-rating">★★★★★</p>
                                <p class="card-text">“Vets on our platform are verified professionals that adhere to lawful medical practices.”</p>
                                <a href="{{route('get-find-vetspage')}}" class="btn btn-dark">BOOK AN APPOINTMENT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- View More Button -->
        <div class="text-center mt-4">
            <a class="btn btn-teal rounded-pill text-white px-4 py-2 mx-3" href="{{route('get-find-vetspage')}}">VIEW MORE</a>
        </div>
    </div>
</div>

{{-- App Section --}}
<div class="container-fluid app-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="hero-heading-white px-4 pt-5">GET <span class="text-teal">MORE</span><br>WITH OUR APP.</h1>
                <p class="main-text text-white px-4" >Connect with vets anytime anywhere with our mobile app. Download the app now on PlayStore.</p>
                <div class="row px-4 pt-4">
                    <div class="col d-inline">
                        <img class="source-icons" src="{{asset('icons/playstore-big.png')}}" alt="">
                        <img class="source-icons" src="{{asset('icons/apple-big.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{asset('images/app-mockup.png')}}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</div>

{{-- Case Studies Section --}}
<div class="container-fluid case-studies-section py-5">
    <div class="container">
        <div class="row">
            <h1 class="hero-heading-black px-4">ALL LIVES MATTER</h1>
            <div class="col-lg-12 px-4">
                <p class="main-text">Read about out latest efforts and how we spend<br> your donation money to make an impact for the<br> good cause.</p>
                <a class="btn btn-teal rounded-pill text-white px-4 py-2 " href="{{route('get-casestudiespage')}}">CHECK OUT OUR CASE STUDIES</a>
                <div class="row">
                    <div class="col-lg-4 pt-3">
                        <div class="case-study-card card w-80 shadow-lg rounded-lg overflow-hidden">
                            <img src="{{asset('images/case-study-dummy1.png')}}" alt="Pet Clinic" class="case-study-image w-full h-48 object-cover border-0">
                            <div class="p-4">
                            <h3 class="text-xl font-semibold mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                            <p class="text-gray-600 mb-4">Read about out latest efforts and how we spend your donation money to make an impact for the good cause.</p>
                            <a class="btn btn-teal rounded-pill text-white px-4 py-2  mb-4" href="#">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 pt-3">
                        <div class="case-study-card card w-80 shadow-lg rounded-lg overflow-hidden">
                            <img src="{{asset('images/case-study-dummy2.png')}}" alt="Pet Clinic" class="case-study-image w-full h-48 object-cover">
                            <div class="p-4">
                            <h3 class="text-xl font-semibold mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                            <p class="text-gray-600 mb-4">Read about out latest efforts and how we spend your donation money to make an impact for the good cause.</p>
                            <a class="btn btn-teal rounded-pill text-white px-4 py-2  mb-4" href="#">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Testimonials Section --}}
<div class="container testimonials-section py-5">
    <div class="row text-center">
        <h1 class="hero-heading-black pt-5">TESTIMONIALS</h1>
        <p style="font-size: 24px;">What people say about us.</p>
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card text-center shadow profile-card">
                        <img src="{{asset('icons/avatar-dummy.png')}}" class="rounded-circle mx-auto mt-3" alt="Vet" width="80">
                        <div class="card-body">
                            <h5 class="card-title">VET DR. ALI RAZA <span><img src="{{asset('icons/verified.png')}}" width="20" alt="Badge"></span></h5>
                            <p class="card-text">“Vets on our platform are verified professionals that adhere to lawful medical practices.”</p>
                            <p class="star-rating">★★★★★</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card text-center shadow profile-card">
                        <img src="{{asset('icons/avatar-dummy.png')}}" class="rounded-circle mx-auto mt-3" alt="Vet" width="80">
                        <div class="card-body">
                            <h5 class="card-title">VET DR. ALI RAZA <span><img src="{{asset('icons/verified.png')}}" width="20" alt="Badge"></span></h5>
                            <p class="card-text">“Vets on our platform are verified professionals that adhere to lawful medical practices.”</p>
                            <p class="star-rating">★★★★★</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card text-center shadow profile-card">
                        <img src="{{asset('icons/avatar-dummy.png')}}" class="rounded-circle mx-auto mt-3" alt="Vet" width="80">
                        <div class="card-body">
                            <h5 class="card-title">VET DR. ALI RAZA <span><img src="{{asset('icons/verified.png')}}" width="20" alt="Badge"></span></h5>
                            <p class="card-text">“Vets on our platform are verified professionals that adhere to lawful medical practices.”</p>
                            <p class="star-rating">★★★★★</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- Make a Difference Section --}}
<div class="container-fluid  difference-section py-5">
    <div class="container">
        <div class="row px-4">
            <div class="col-lg-6">
                <h1 class="hero-heading-white pt-3">You Make a Difference.</h1>
                <p class="text-white" style="font-size: 24px;">With your contributions and funding we are able to provide care & shelter to animals in need.</p>
            </div>
            <div class="col-lg-6 text-center">
                <img class="img-fluid pb-3" src="{{asset('icons/pet-care-logo.png')}}" alt="">
                <h1 class="text-white">10k+ animals<br><span class="text-teal"> saved. </span></h1>
            </div>
        </div>
        <div class="row px-4 pt-5 mt-5">
            <div class="col-lg-4 text-center">
                <h1 class="text-white">500 +<br>VETENERIANS</h1>
            </div>
            <div class="col-lg-4 text-center">
                <h1 class="text-white">2k +<br>ANIMALS TREATED</h1>
            </div>
            <div class="col-lg-4 text-center">
                <h1 class="text-white">10K +<br>ANIMALS SAVED</h1>
            </div>
        </div>
    </div>
</div>

@endsection
