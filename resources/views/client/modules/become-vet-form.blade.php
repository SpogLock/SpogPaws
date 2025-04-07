@extends('client.layouts.main')
@section('page')
<link rel="stylesheet" href="{{ asset('css/vet-register-form.css') }}">
<div class="container-fluid pt-5 pb-5">
    <div class="row justify-content-center">
        <div class="col-lg-4 content-col d-flex flex-column align-items-center justify-content-center text-center">
            <h1 class="hero-heading-black text-start" style="font-size: 64px;">REGISTER AS A VETERINARIAN</h1>
            <p class="text-start" style="font-size: 24px;">Provide us with your valuable skills and contribute to our mission to save stray animals.</p>
        </div>

        <div class="col-lg-6 p-5 content-col d-flex flex-column  justify-content-center">
            <div class="container">
                <form id="vetRegistrationForm" action="{{ route('create-clinic') }}" method="POST">
                    @csrf
                    <!-- Step 1 -->
                    <div class="form-step active">
                        <h2>Professional Certificates</h2>
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="mb-3 text-start">
                                    <label class="form-label">Clinic Name</label>
                                    <input type="text" name="clinic_name" class="form-control" required>
                                    <div class="form-text">Enter your clinic name.</div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="mb-3 text-start">
                                    <label class="form-label">Clinic Address</label>
                                    <input type="text" name="clinic_address" class="form-control" required>
                                    <div class="form-text">Enter the full address of your clinic.</div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="mb-3 text-start">
                                    <label class="form-label">About Clinic</label>
                                    <input type="text-area" name="about" class="form-control" required>
                                    <div class="form-text">Describe your clinic services & specialities.</div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="mb-3 text-start">
                                    <label class="form-label">Phone Number</label>
                                    <input type="tel" name="phone_number" class="form-control" required>
                                    <div class="form-text">Enter a valid contact number.</div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-teal rounded-pill px-3 next-btn">Next</button>
                    </div>

                    <!-- Step 2 -->
                    <div class="form-step">
                        <div class="upload-container">
                            <h2>Professional Certificates</h2>
                            <p>Kindly upload three professional certificates that prove your professional experience.</p>

                            <label class="upload-box">
                                Upload +
                                <input type="file" disabled>
                            </label>

                            <label class="upload-box">
                                Upload +
                                <input type="file" disabled>
                            </label>

                            <label class="upload-box" >
                                Upload +
                                <input type="file" disabled>
                            </label>
                        </div>
                        <button type="button" class="btn btn-secondary rounded-pill px-3 prev-btn">Previous</button>
                        <button type="button" class="btn btn-teal rounded-pill px-3 next-btn">Next</button>
                    </div>

                    <!-- Step 3 -->
                    <div class="form-step">
                        <div class="upload-container">
                            <h2>Clinic Images</h2>
                            <p>Kindly upload four images of your clinic or workspace.</p>

                            <label class="upload-box">
                                Upload +
                                <input type="file" disabled>
                            </label>

                            <label class="upload-box">
                                Upload +
                                <input type="file" disabled>
                            </label>

                            <label class="upload-box">
                                Upload +
                                <input type="file" disabled>
                            </label>

                            <label class="upload-box">
                                Upload +
                                <input type="file" disabled>
                            </label>
                        </div>
                        <button type="button" class="btn btn-secondary rounded-pill px-3 ">Previous</button>
                        <button type="submit" class="btn btn-teal rounded-pill px-3">Submit</button>
                    </div>
                </form>
            </div>
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
        steps.forEach((stepDiv, index) => {
            stepDiv.classList.remove("active", "bounce-in", "bounce-out");
            if (index === step) {
                stepDiv.classList.add("active", "bounce-in"); // Show the step with animation
            }
        });
    }

    nextButtons.forEach((button, index) => {
        button.addEventListener("click", function() {
            if (currentStep < steps.length - 1) {
                steps[currentStep].classList.add("bounce-out"); // Apply exit animation
                setTimeout(() => {
                    currentStep++;
                    showStep(currentStep);
                }, 300); // Wait for animation before changing step
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
