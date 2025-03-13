@extends('client.layouts.main')
@section('page')
<link rel="stylesheet" href="{{asset('css/case-studies-menu.css')}}">
<div class="container-fluid purple-header pb-5">
    <h1 class="hero-heading-white text-center pt-5 pb-2" style="font-size: 64px;">OUR SUCCESS STORIES</h1>
    <h1 class="text-white text-center pb-3">Discover how you can make an impact.</h1>
</div>
<div class="container-fluid case-study-cards pb-5">
    <div class="row" style="height: 10vh; background-color:#3e2285;"></div>
        <div class="container">
            <div class="row">
            <a class="pt-5 " style="color: #000" href="#"><img src="{{asset('icons/filter-icon.png')}}" alt="" class="pe-3">Filter</a>
            <h1 class="hero-heading-black text-center pt-5 pb-2" style="font-size: 64px;">our case studies</h1>
            <div class="col-lg-4 pt-3 text-center">
                <div class="case-study-card card w-80 shadow-lg rounded-lg overflow-hidden">
                    <img src="{{asset('images/case-study-dummy1.png')}}" alt="Pet Clinic" class="case-study-image w-full h-48 object-cover border-0">
                    <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                    <p class="text-gray-600 mb-4">Read about out latest efforts and how we spend your donation money to make an impact for the good cause.</p>
                    <a class="btn btn-teal rounded-pill text-white px-4 py-2  mb-4" href="#">READ MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pt-3 text-center">
                <div class="case-study-card card w-80 shadow-lg rounded-lg overflow-hidden">
                    <img src="{{asset('images/case-study-dummy1.png')}}" alt="Pet Clinic" class="case-study-image w-full h-48 object-cover border-0">
                    <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                    <p class="text-gray-600 mb-4">Read about out latest efforts and how we spend your donation money to make an impact for the good cause.</p>
                    <a class="btn btn-teal rounded-pill text-white px-4 py-2  mb-4" href="#">READ MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pt-3 text-center">
                <div class="case-study-card card w-80 shadow-lg rounded-lg overflow-hidden">
                    <img src="{{asset('images/case-study-dummy1.png')}}" alt="Pet Clinic" class="case-study-image w-full h-48 object-cover border-0">
                    <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                    <p class="text-gray-600 mb-4">Read about out latest efforts and how we spend your donation money to make an impact for the good cause.</p>
                    <a class="btn btn-teal rounded-pill text-white px-4 py-2  mb-4" href="#">READ MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pt-3 text-center">
                <div class="case-study-card card w-80 shadow-lg rounded-lg overflow-hidden">
                    <img src="{{asset('images/case-study-dummy1.png')}}" alt="Pet Clinic" class="case-study-image w-full h-48 object-cover border-0">
                    <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                    <p class="text-gray-600 mb-4">Read about out latest efforts and how we spend your donation money to make an impact for the good cause.</p>
                    <a class="btn btn-teal rounded-pill text-white px-4 py-2  mb-4" href="#">READ MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pt-3 text-center">
                <div class="case-study-card card w-80 shadow-lg rounded-lg overflow-hidden">
                    <img src="{{asset('images/case-study-dummy1.png')}}" alt="Pet Clinic" class="case-study-image w-full h-48 object-cover border-0">
                    <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                    <p class="text-gray-600 mb-4">Read about out latest efforts and how we spend your donation money to make an impact for the good cause.</p>
                    <a class="btn btn-teal rounded-pill text-white px-4 py-2  mb-4" href="#">READ MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pt-3 text-center">
                <div class="case-study-card card w-80 shadow-lg rounded-lg overflow-hidden">
                    <img src="{{asset('images/case-study-dummy1.png')}}" alt="Pet Clinic" class="case-study-image w-full h-48 object-cover border-0">
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
@endsection
