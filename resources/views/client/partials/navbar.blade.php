<nav class="navbar navbar-expand-lg bg-white py-2">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="{{asset('images/logo.png')}}" alt="Logo" style="height: 40px;" class="me-2">
        </a>

        <!-- Toggle button for mobile view -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item pe-4">
                    <a class="nav-link text-dark" href="/">Home</a>
                </li>
                <li class="nav-item pe-4 dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" id="vetsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        For Vets
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="vetsDropdown">
                        <li><a class="dropdown-item" href="{{route('get-vets-registerpage')}}">Become a vet</a></li>
                        <li><a class="dropdown-item" href="#">Support</a></li>
                    </ul>
                </li>
                <li class="nav-item pe-4 dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" id="petOwnerDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        For Pet Owners
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="petOwnerDropdown">
                        <li><a class="dropdown-item" href="{{route('get-find-vetspage')}}">Connect to vet</a></li>
                        <li><a class="dropdown-item" href="{{route('get-adoptionpage')}}">Adopt a pet</a></li>
                        <li><a class="dropdown-item" href="{{route('get-reportcasepage')}}">Report adoption</a></li>

                    </ul>
                </li>
                <li class="nav-item pe-4">
                    <a class="nav-link text-dark" href="{{route('get-casestudiespage')}}">Case Studies</a>
                </li>
                <li class="nav-item pe-4">
                    <a class="btn btn-teal rounded-pill text-white px-4 py-2 mx-3" href="{{route('get-adoptionpage')}}">OWN A PET</a>
                </li>
                @php
                $user = session('user'); // Retrieve user from session
            @endphp

            @if(!$user)
                <!-- Show login if not logged in -->
                <li class="nav-item border-start ps-4 text-center">
                    <a class="nav-link text-dark" href="{{ route('get-loginpage') }}">
                        <i class="bi bi-person-circle fs-4 d-block"></i>
                        <div class="small">Login</div>
                    </a>
                </li>
            @else
                <!-- Show username and dropdown when user is logged in -->
                <li class="nav-item dropdown border-start ps-4">
                    <a class="nav-link dropdown-toggle text-dark" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Hello, {{ $user['name'] }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="userDropdown">
                        <li>
                            <a class="dropdown-item" href="{{ route('logout-user') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout-user') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
            </ul>
        </div>
    </div>
</nav>
