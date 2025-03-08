@extends('client.layouts.main')
@section('page')
<link rel="stylesheet" href="{{asset('css/home.css')}}">

{{-- Landing Section --}}
<div class="container-fluid landingpage position-relative" >
    <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
            <h1 class="hero-heading px-4">BE THEIR <span class="text-teal">HERO</span></h1>
            <h2 class="hero-subtitle px-4">From Shelters to Loving Homes, <br>Help Us Save More Pets.</h2>
            <div>
                <a class="btn btn-teal rounded-pill text-white px-4 py-2 mx-3" href="#">DONATE</a>
            </div>
        </div>
        <div class="col-lg-5">
            <img src="{{asset('images/hero-img.png')}}" class="img-fluid pt-5" alt="">
        </div>
    </div>

    {{-- Overlapping Boxes Section --}}
    <div class="row  position-absolute w-100" style="bottom: -280px;"> <!-- Adjust bottom value for overlap -->
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
                <a href="#" class="btn btn-light rounded-pill px-3">REPORT A CASE</a>
            </div>
        </div>
    </div>
</div>

{{-- Divider --}}
<div class="divider" style="height: 50vh;"></div>

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
                                <a href="#" class="btn btn-dark">BOOK AN APPOINTMENT</a>
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
                                <a href="#" class="btn btn-dark">BOOK AN APPOINTMENT</a>
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
                                <a href="#" class="btn btn-dark">BOOK AN APPOINTMENT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- View More Button -->
        <div class="text-center mt-4">
            <a class="btn btn-teal rounded-pill text-white px-4 py-2 mx-3" href="#">VIEW MORE</a>
        </div>
    </div>
</div>

@endsection
