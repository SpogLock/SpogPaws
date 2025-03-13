@extends('client.layouts.main')
@section('page')
<link rel="stylesheet" href="{{asset('css/find-a-vet.css')}}">
    <div class="container-fluid purple-header pb-5">
        <h1 class="hero-heading-white text-center pt-5 pb-2" style="font-size: 64px;">find vets near you?</h1>
        <h1 class="text-white text-center pb-3">connect with<br> veterinary experts near you?</h1>
        <div class="search-container mb-5">
            <div class="input-group">
                <i class="fa-solid fa-house"></i>
                <input type="text" placeholder="Start typing your city name...">
            </div>
            <div class="dropdown-group ps-3">
                <i class="fa-solid fa-paw"></i>
                <select>
                    <option>Dog</option>
                    <option>Cat</option>
                    <option>Bird</option>
                </select>
            </div>
            <button class="search-btn">SEARCH</button>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row" style="height: 10vh; background-color:#3e2285;"></div>
        <div class="container">
            <div class="row pb-5">
                <a class="pt-5 " style="color: #000" href="#"><img src="{{asset('icons/filter-icon.png')}}" alt="" class="pe-3">Filter</a>
                <h1 class="hero-heading-black pt-3 pb-3 text-center" style="font-size: 64px;">Veterinary experts</h1>
                <div class="col-lg-4 pb-3">
                    <div class="card text-center shadow profile-card pb-3">
                        <img src="{{asset('icons/avatar-dummy.png')}}" class="rounded-circle mx-auto mt-3" alt="Vet" width="80">
                        <div class="card-body">
                            <h5 class="card-title">ZEN CLINIC <span><img src="{{asset('icons/verified.png')}}" width="20" alt="Badge"></span></h5>
                            <p class="star-rating">★★★★★</p>
                            <p class="card-text">“Vets on our platform are verified professionals that adhere to lawful medical practices.”</p>
                            <a href="{{route('get-vets-detailpage')}}" class="btn btn-dark">Check Details</a>
                            <p class="pt-3">PKR 2999/hr</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-3">
                    <div class="card text-center shadow profile-card pb-3">
                        <img src="{{asset('icons/avatar-dummy.png')}}" class="rounded-circle mx-auto mt-3" alt="Vet" width="80">
                        <div class="card-body">
                            <h5 class="card-title">ZEN CLINIC <span><img src="{{asset('icons/verified.png')}}" width="20" alt="Badge"></span></h5>
                            <p class="star-rating">★★★★★</p>
                            <p class="card-text">“Vets on our platform are verified professionals that adhere to lawful medical practices.”</p>
                            <a href="{{route('get-vets-detailpage')}}" class="btn btn-dark">Check Details</a>
                            <p class="pt-3">PKR 2999/hr</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-3">
                    <div class="card text-center shadow profile-card pb-3">
                        <img src="{{asset('icons/avatar-dummy.png')}}" class="rounded-circle mx-auto mt-3" alt="Vet" width="80">
                        <div class="card-body">
                            <h5 class="card-title">ZEN CLINIC <span><img src="{{asset('icons/verified.png')}}" width="20" alt="Badge"></span></h5>
                            <p class="star-rating">★★★★★</p>
                            <p class="card-text">“Vets on our platform are verified professionals that adhere to lawful medical practices.”</p>
                            <a href="{{route('get-vets-detailpage')}}" class="btn btn-dark">Check Details</a>
                            <p class="pt-3">PKR 2999/hr</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-3">
                    <div class="card text-center shadow profile-card pb-3">
                        <img src="{{asset('icons/avatar-dummy.png')}}" class="rounded-circle mx-auto mt-3" alt="Vet" width="80">
                        <div class="card-body">
                            <h5 class="card-title">ZEN CLINIC <span><img src="{{asset('icons/verified.png')}}" width="20" alt="Badge"></span></h5>
                            <p class="star-rating">★★★★★</p>
                            <p class="card-text">“Vets on our platform are verified professionals that adhere to lawful medical practices.”</p>
                            <a href="{{route('get-vets-detailpage')}}" class="btn btn-dark">Check Details</a>
                            <p class="pt-3">PKR 2999/hr</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-3">
                    <div class="card text-center shadow profile-card pb-3">
                        <img src="{{asset('icons/avatar-dummy.png')}}" class="rounded-circle mx-auto mt-3" alt="Vet" width="80">
                        <div class="card-body">
                            <h5 class="card-title">ZEN CLINIC <span><img src="{{asset('icons/verified.png')}}" width="20" alt="Badge"></span></h5>
                            <p class="star-rating">★★★★★</p>
                            <p class="card-text">“Vets on our platform are verified professionals that adhere to lawful medical practices.”</p>
                            <a href="{{route('get-vets-detailpage')}}" class="btn btn-dark">Check Details</a>
                            <p class="pt-3">PKR 2999/hr</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pb-3">
                    <div class="card text-center shadow profile-card pb-3">
                        <img src="{{asset('icons/avatar-dummy.png')}}" class="rounded-circle mx-auto mt-3" alt="Vet" width="80">
                        <div class="card-body">
                            <h5 class="card-title">ZEN CLINIC <span><img src="{{asset('icons/verified.png')}}" width="20" alt="Badge"></span></h5>
                            <p class="star-rating">★★★★★</p>
                            <p class="card-text">“Vets on our platform are verified professionals that adhere to lawful medical practices.”</p>
                            <a href="{{route('get-vets-detailpage')}}" class="btn btn-dark">Check Details</a>
                            <p class="pt-3">PKR 2999/hr</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
