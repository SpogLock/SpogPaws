@extends('client.layouts.main')
@section('page')
    <style>
        .profile-container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border: solid 1px #000;
        }

        .sidebar {
            background: #20e2c6;
            color: white;
            border-radius: 10px;
            padding: 20px;
            height: 100%;
            border: solid 1px #000;
        }

        .sidebar a {
            color: #000;
            text-decoration: none;
            display: block;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 5px;
            cursor: pointer;
        }

        .sidebar a.active,
        .sidebar a:hover {
            background: #000;
            color: #fff;
        }

        .form-control {
            border-radius: 8px;
        }

        .floating-tabs {
            display: none;
            /* Hidden on desktop */
            overflow-x: auto;
            white-space: nowrap;
            background: #fff;
            padding: 10px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;

        }

        .floating-tabs a {
            display: inline-block;
            padding: 10px 15px;
            color: #000;
            font-weight: bold;
            text-decoration: none;
            border-bottom: 2px solid transparent;
        }

        .floating-tabs a.active {
            border-bottom: 2px solid #3aa698;
            color: #3aa698;
        }

        @media (max-width: 768px) {
            .sidebar {
                display: none;
            }

            /* Hide sidebar on mobile */
            .floating-tabs {
                display: flex;
            }

            .profile-container {
                margin-top: 50px;
            }
        }
    </style>

    <div class="container my-3">
        <div class="row">
            <!-- Sidebar (Desktop) -->
            <div class="col-md-3 d-none d-md-block">
                <div class="sidebar">
                    <h3 class="text-center pb-5 pt-2" style="color: #000;">Account Management</h3>
                    <div class="managment-options">
                        <a href="#" class="tab-link active" data-target="personal-info">Personal Info</a>
                        <a href="#" class="tab-link" data-target="email-password">Emails & Password</a>
                        <a href="#" class="tab-link" data-target="notifications">Notifications</a>
                        <a href="#" class="tab-link" data-target="become-vet">Become a Vet</a>
                        <a href="#" class="tab-link" data-target="manage-ads">Manage Ads</a>
                        <a href="#" class="tab-link" data-target="report-case">Report a Case</a>
                        <a href="#" class="tab-link" data-target="adoption-policy">Adoption Policy</a>
                        <a href="#" class="tab-link" data-target="terms">Terms & Conditions</a>
                    </div>
                </div>
            </div>

            <div class="floating-tabs">
                <a href="#" class="tab-link active" data-target="personal-info">Personal Info</a>
                <a href="#" class="tab-link" data-target="email-password">Emails & Password</a>
                <a href="#" class="tab-link" data-target="notifications">Notifications</a>
                <a href="#" class="tab-link" data-target="become-vet">Become a Vet</a>
                <a href="#" class="tab-link" data-target="manage-ads">Manage Ads</a>
                <a href="#" class="tab-link" data-target="report-case">Report a Case</a>
                <a href="#" class="tab-link" data-target="adoption-policy">Adoption Policy</a>
                <a href="#" class="tab-link" data-target="terms">Terms & Conditions</a>
            </div>

            <!-- Content Section -->
            <div class="col-md-9">
                <div class="profile-container">
                    <div id="personal-info" class="tab-content active">
                        <h3 class="mb-3">Personal Information</h3>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ route('update-personal-info') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <!-- Profile Picture (Just for UI, Not Used in Backend) -->
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Profile Picture</label>
                                    <input type="file" class="form-control" name="profile_picture" disabled>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">User Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="John"
                                        value="{{ Session::get('user')['name'] ?? '' }}">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-teal">Save Changes</button>
                        </form>
                    </div>
                    <div id="email-password" class="tab-content" style="display: none;">
                        <h3 class="mb-3">Emails & Password</h3>
                        <form action="update-password" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Your Email (Cannot be changed)</label>
                                    <input type="email" class="form-control text-secondary bg-light" name="email"
                                        value="{{ Session::get('user')['email'] ?? '' }}" disabled>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Current Password</label>
                                    <input type="password" class="form-control" name="current_password">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">New Password</label>
                                    <input type="password" class="form-control" name="new_password">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" name="new_password_confirmation">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-teal">Update</button>
                        </form>
                    </div>
                    <div id="notifications" class="tab-content" style="display: none;">
                        <h3 class="mb-3">Notifications</h3>
                        <p>Manage your notification preferences here.</p>
                    </div>
                    <div id="become-vet" class="tab-content" style="display: none;">
                        <h3 class="mb-3">Become a Vet</h3>
                        <p>Apply to become a vet by filling out the required information.</p>
                    </div>
                    <div id="manage-ads" class="tab-content" style="display: none;">
                        <h3 class="mb-3">Manage Ads</h3>
                        <p>Manage and edit your posted ads here.</p>
                    </div>
                    <div id="report-case" class="tab-content" style="display: none;">
                        <h3 class="mb-3">Report a Case</h3>
                        <p>Report any issues related to pet adoption.</p>
                    </div>
                    <div id="adoption-policy" class="tab-content" style="display: none;">
                        <h3 class="mb-3">Adoption Policy</h3>
                        <p>Read the adoption policy before applying for pet adoption.</p>
                    </div>
                    <div id="terms" class="tab-content" style="display: none;">
                        <h3 class="mb-3">Terms & Conditions</h3>
                        <p>Make sure to read the terms and conditions before using the platform.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const tabLinks = document.querySelectorAll(".tab-link");
            const tabContents = document.querySelectorAll(".tab-content");

            // Retrieve the last active tab from localStorage
            let activeTab = localStorage.getItem("activeTab") || "personal-info";

            // Function to activate the selected tab
            function activateTab(target) {
                tabLinks.forEach(tab => tab.classList.remove("active"));
                tabContents.forEach(content => content.style.display = "none");

                document.querySelector(`[data-target='${target}']`).classList.add("active");
                document.getElementById(target).style.display = "block";

                // Store active tab in localStorage
                localStorage.setItem("activeTab", target);
            }

            // Set the active tab on page load
            activateTab(activeTab);

            // Event listener for tab clicks
            tabLinks.forEach(link => {
                link.addEventListener("click", function(e) {
                    e.preventDefault();
                    let target = this.getAttribute("data-target");
                    activateTab(target);
                });
            });
        });
    </script>
@endsection
