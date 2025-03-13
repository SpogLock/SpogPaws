@extends('client.layouts.main')
@section('page')
<link rel="stylesheet" href="{{asset('css/case-studies-menu.css')}}">
<div class="container-fluid purple-header pb-5">
    <h1 class="hero-heading-white text-center pt-5 pb-2" style="font-size: 64px;">give us a home</h1>
    <h1 class="text-white text-center pb-3">open your arms to these animals.</h1>
</div>
<div class="container-fluid case-study-cards pb-5">
    <div class="row" style="height: 10vh; background-color:#3e2285;"></div>
        <div class="container">
            <div class="row">
            <a class="pt-5 " style="color: #000" href="#"><img src="{{asset('icons/filter-icon.png')}}" alt="" class="pe-3">Filter</a>
            <h1 class="hero-heading-black text-center pt-5 pb-2" style="font-size: 64px;">Pets for adoption</h1>
            <div class="col-lg-4 pt-5">
                <div class="case-study-card card w-80 shadow-lg rounded-lg overflow-hidden">
                    <img src="{{asset('images/dog.png')}}" alt="Pet Clinic" class="case-study-image w-full h-48 object-cover border-0">
                    <div class="p-4">
                      <h3 class="text-xl font-semibold  text-center">SKIBBIDY CAT & DOG</h3>
                      <div class="text-center">
                        <a class="btn btn-teal rounded-pill text-white" href="#">READ MORE</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pt-5">
                <div class="case-study-card card w-80 shadow-lg rounded-lg overflow-hidden">
                    <img src="{{asset('images/cat.png')}}" alt="Pet Clinic" class="case-study-image w-full h-48 object-cover border-0">
                    <div class="p-4">
                      <h3 class="text-xl font-semibold  text-center">Fat orange cat</h3>
                      <div class="text-center">
                        <a class="btn btn-teal rounded-pill text-white" href="#">READ MORE</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pt-5">
                <div class="case-study-card card w-80 shadow-lg rounded-lg overflow-hidden">
                    <img src="{{asset('images/cat2.png')}}" alt="Pet Clinic" class="case-study-image w-full h-48 object-cover border-0">
                    <div class="p-4">
                      <h3 class="text-xl font-semibold  text-center">small kitten thing</h3>
                      <div class="text-center">
                        <a class="btn btn-teal rounded-pill text-white" href="#">READ MORE</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pt-5">
                <div class="case-study-card card w-80 shadow-lg rounded-lg overflow-hidden">
                    <img src="{{asset('images/cat.png')}}" alt="Pet Clinic" class="case-study-image w-full h-48 object-cover border-0">
                    <div class="p-4">
                      <h3 class="text-xl font-semibold  text-center">SKIBBIDY CAT & DOG</h3>
                      <div class="text-center">
                        <a class="btn btn-teal rounded-pill text-white" href="#">READ MORE</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pt-5">
                <div class="case-study-card card w-80 shadow-lg rounded-lg overflow-hidden">
                    <img src="{{asset('images/dog.png')}}" alt="Pet Clinic" class="case-study-image w-full h-48 object-cover border-0">
                    <div class="p-4">
                      <h3 class="text-xl font-semibold  text-center">Fat orange cat</h3>
                      <div class="text-center">
                        <a class="btn btn-teal rounded-pill text-white" href="#">READ MORE</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pt-5">
                <div class="case-study-card card w-80 shadow-lg rounded-lg overflow-hidden">
                    <img src="{{asset('images/cat2.png')}}" alt="Pet Clinic" class="case-study-image w-full h-48 object-cover border-0">
                    <div class="p-4">
                      <h3 class="text-xl font-semibold  text-center">small kitten thing</h3>
                      <div class="text-center">
                        <a class="btn btn-teal rounded-pill text-white" href="#">READ MORE</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
