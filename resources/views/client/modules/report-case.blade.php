@extends('client.layouts.main')
@section('page')
<link rel="stylesheet" href="{{ asset('css/vet-register-form.css') }}">

<style>
    /* Hide all steps initially */
    .form-step {
        display: none;
        opacity: 0;
        transform: translateX(50px);
        transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
    }

    /* Active step */
    .form-step.active {
        display: block;
        opacity: 1;
        transform: translateX(0);
    }

    /* Bouncy entrance animation */
    .form-step.bounce-in {
        animation: bounceIn 0.6s ease-out;
    }

    @keyframes bounceIn {
        0% {
            transform: scale(0.8);
            opacity: 0;
        }
        60% {
            transform: scale(1.05);
            opacity: 1;
        }
        100% {
            transform: scale(1);
        }
    }

    /* Bouncy exit animation */
    .form-step.bounce-out {
        animation: bounceOut 0.4s ease-in forwards;
    }

    @keyframes bounceOut {
        0% {
            transform: scale(1);
        }
        100% {
            transform: scale(0.8);
            opacity: 0;
        }
    }
</style>

<div class="container-fluid pt-5 pb-5">
    <div class="row justify-content-center">
        <div class="col-lg-4 content-col d-flex flex-column align-items-center justify-content-center text-center">
            <h1 class="hero-heading-black text-start" style="font-size: 64px;">REPORT ANIMAL FOR ADOPTION</h1>
            <p class="text-start" style="font-size: 24px;">Report an animal in need and contribute to our mission to save stray animals.</p>
        </div>

        <div class="col-lg-5 content-col d-flex flex-column  justify-content-center">
            <form id="vetRegistrationForm" method="POST" action="#">
                @csrf

                <!-- Step 1 -->
                <div class="form-step active">
                    <div class="mb-3 text-start">
                        <label class="form-label">Name of the animal</label>
                        <input type="text" name="clinic_name" class="form-control" required>
                        <div class="form-text">Enter your pet's name.</div>
                    </div>
                    <div class="mb-3 text-start">
                        <label class="form-label">Animal Type</label>
                        <input type="text" name="user_name" class="form-control" required>
                        <div class="form-text">Enter your animal type (cat,dog,bird).</div>
                    </div>
                    <div class="mb-3 text-start">
                        <label class="form-label">Your Address</label>
                        <input type="text" name="user_name" class="form-control" required>
                        <div class="form-text">Enter your address for us to verify.</div>
                    </div>
                    <button type="button" class="btn btn-teal rounded-pill px-3 next-btn">Next</button>
                </div>

                <!-- Step 2 -->
                <div class="form-step">
                    <div class="mb-3 text-start">
                        <label class="form-label">Case Description</label>
                        <input type="text" name="clinic_address" class="form-control large-input" required style="height: 80px;">
                        <div class="form-text">Explain why you are putting up this animal for adoption.</div>
                    </div>
                    <div class="mb-3 text-start">
                        <label class="form-label">Your Phone Number</label>
                        <input type="tel" name="phone" class="form-control" required>
                        <div class="form-text">Enter a valid contact number.</div>
                    </div>
                    <div class="upload-container">
                        <h2>Pet's Images</h2>
                        <p>Kindly upload three images of the animal.</p>

                        <label class="upload-box">
                            Upload +
                            <input type="file">
                        </label>

                        <label class="upload-box">
                            Upload +
                            <input type="file">
                        </label>

                        <label class="upload-box">
                            Upload +
                            <input type="file">
                        </label>
                    </div>
                    <button type="button" class="btn btn-secondary rounded-pill px-3 prev-btn">Previous</button>
                    <button type="button" class="btn btn-teal rounded-pill px-3 next-btn">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const steps = document.querySelectorAll(".form-step");
        const nextButtons = document.querySelectorAll(".next-btn");
        const prevButtons = document.querySelectorAll(".prev-btn");
        let currentStep = 0;

        function showStep(step) {
            // Hide all steps
            steps.forEach((stepDiv, index) => {
                stepDiv.classList.remove("active", "bounce-in", "bounce-out");
                if (index === step) {
                    stepDiv.classList.add("active", "bounce-in"); // Add animation
                }
            });
        }

        nextButtons.forEach((button, index) => {
            button.addEventListener("click", function() {
                if (index < steps.length - 1) {
                    steps[currentStep].classList.add("bounce-out"); // Apply exit animation
                    setTimeout(() => {
                        currentStep++;
                        showStep(currentStep);
                    }, 300); // Delay for smooth transition
                }
            });
        });

        prevButtons.forEach((button) => {
            button.addEventListener("click", function() {
                if (currentStep > 0) {
                    steps[currentStep].classList.add("bounce-out"); // Apply exit animation
                    setTimeout(() => {
                        currentStep--;
                        showStep(currentStep);
                    }, 300);
                }
            });
        });

        // Show the first step initially
        showStep(currentStep);
    });
</script>

@endsection
