@extends('client.layouts.main')
@section('page')
<!-- Fancybox CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
<!-- LightSlider CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.min.css">
<link rel="stylesheet" href="{{asset('css/vet-details.css')}}">
{{-- Clinic header --}}
<div class="container-fluid">
    <div class="row pt-5 pb-5">
        <div class="col-lg-7">
            <div class="col-lg-7 mx-auto">
                <div class="vrmedia-gallery">
                    <ul id="ecommerce-gallery" class="ecommerce-gallery">
                        <!-- Images will be appended here by JavaScript -->
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <h1 class="hero-heading-black" style="font-size: 64px;">Zen Clinic <img src="{{asset('icons/verified.png')}}" width="40" alt="Badge"></h1>
            <h4>Trusted by clients since 2007</h4>
            <div class="col-lg-10">
                <p>We are dedicated to providing exceptional healthcare services with a focus on compassionate, patient-centered care.</p>
                <p class="mt-3">Our team of experienced doctors and healthcare professionals is committed to ensuring that every patient receives personalized treatment in a warm and welcoming environment.</p>
                <h4>Achivements</h4>
                <div class="row pb-5">
                    <div class="col">
                        <img src="{{asset('icons/fav-icon.png')}}" width="80" alt="">
                    </div>
                    <div class="col">
                        <img src="{{asset('icons/griffin-icon.png')}}" width="80" alt="">
                    </div>
                    <div class="col">
                        <img src="{{asset('icons/heart-paw-icon.png')}}" width="80" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="height: 10vh; background-color:#3e2285;"></div>

</div>
{{-- Clinic details section --}}
<div class="container-fluid clinic-details-section" >
    <h1 class="hero-heading-white text-center pt-5" style="font-size: 64px;">ZEN CLINIC OFFERS</h1>
    <div class="row justify-content-center px-5 pb-5">
        <div class="col-lg-8">
            <h1 class="hero-heading-white pt-5" style="font-size: 35px;">GENERAL TREATMENT :</h1>
            <p class="text-white" >We are dedicated to providing exceptional healthcare services with a focus on compassionate, patient-centered care.  Our team of experienced doctors and healthcare professionals is committed to ensuring that every patient receives personalized treatment in a warm and welcoming environment.</p>
            <h4 class="text-white">charges: 1000 pkr/hr</h4>
        </div>
        <div class="col-lg-8">
            <h1 class="hero-heading-white pt-5" style="font-size: 35px;">GROOMING & CARE :</h1>
            <p class="text-white" >We are dedicated to providing exceptional healthcare services with a focus on compassionate, patient-centered care.  Our team of experienced doctors and healthcare professionals is committed to ensuring that every patient receives personalized treatment in a warm and welcoming environment.</p>
            <h4 class="text-white">charges: 1000 pkr/hr</h4>
        </div>
        <div class="col-lg-8">
            <h1 class="hero-heading-white pt-5" style="font-size: 35px;">vaccination & medical check: </h1>
            <p class="text-white" >We are dedicated to providing exceptional healthcare services with a focus on compassionate, patient-centered care.  Our team of experienced doctors and healthcare professionals is committed to ensuring that every patient receives personalized treatment in a warm and welcoming environment.</p>
            <h4 class="text-white">charges: 1000 pkr/hr</h4>
        </div>
        <div class="col-lg-8">
            <h1 class="hero-heading-white pt-5 pb-3" style="font-size: 35px;">pets for adoption: </h1>
            <div class="row">
                <div class="col-lg-4">
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
                <div class="col-lg-4">
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
                <div class="col-lg-4">
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
</div>
{{-- Clinic booking section --}}
<div class="container clinic-booking-section pb-5">
    <h1 class="hero-heading-black text-center pt-5" style="font-size: 64px;">Book an appointment</h1>
    <div class="row align-items-center justify-content-center">
        <div class="col-lg-5">
            <div class="col-lg-8">
                <h1>CONTACT</h1>
                <p>Address xyz , street xyz, block xyz , apartment xyz, city xyz, postal xyz</p>
                <div class="row">
                    <div class="col-lg-5">
                        <p>+92 123456789</p>
                        <p>+92 123456789</p>
                    </div>
                    <div class="col-lg-5 mx-auto">
                        <img src="{{asset('icons/calendar.png')}}" width="40" alt="">
                        <p>Open 24/7</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <img src="{{asset('images/map-dummyy.png')}}" class="img-fluid" alt="">
        </div>
    </div>
</div>




<!-- Pass Image Data from Blade to JavaScript -->
<script>
    const ads = [
        { file_name: "{{ asset('images/gallery-1.png') }}" },
        { file_name: "{{ asset('images/gallery-2.png') }}" },
        { file_name: "{{ asset('images/gallery-3.png') }}" }
    ];
</script>

<!-- jQuery, Fancybox & LightSlider Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"></script>

<script>
    $(document).ready(function () {
        const gallery = $("#ecommerce-gallery");

        // Append Images Dynamically
        ads.forEach(ad => {
            gallery.append(`
                <li data-thumb="${ad.file_name}">
                    <a data-fancybox="gallery" href="${ad.file_name}">
                        <img class="img-fluid thumbnail-image" src="${ad.file_name}" alt="Gallery Image">
                    </a>
                </li>
            `);
        });

        // Initialize LightSlider with Thumbnails
        gallery.lightSlider({
            gallery: true,      // Enables thumbnails
            item: 1,            // Show one main image at a time
            loop: true,
            thumbItem: 3,       // Number of thumbnails to show
            thumbMargin: 10,    // Spacing between thumbnails
            slideMargin: 0,
            enableDrag: true
        });
    });
</script>
@endsection
