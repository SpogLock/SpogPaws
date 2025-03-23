<nav class="navbar navbar-expand-lg bg-white py-2">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="{{asset('images/logo.png')}}" alt="Logo" style="height: 40px;" class="me-2">
        </a>

        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu"
            aria-controls="mobileMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Regular Navbar for Desktop -->
        <div class="collapse navbar-collapse d-none d-lg-flex" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item px-3 py-2">
                    <a class="nav-link text-dark" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item dropdown px-3 py-2">
                    <a class="nav-link dropdown-toggle text-dark" href="#" id="vetsDropdown" role="button"
                        data-bs-toggle="dropdown">
                        For Vets
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('get-vets-registerpage')}}">Become a vet</a></li>
                        <li><a class="dropdown-item" href="#">Support</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown px-3 py-2">
                    <a class="nav-link dropdown-toggle text-dark" href="#" id="petOwnerDropdown" role="button"
                        data-bs-toggle="dropdown">
                        For Pet Owners
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('get-find-vetspage')}}">Connect to vet</a></li>
                        <li><a class="dropdown-item" href="{{route('get-adoptionpage')}}">Adopt a pet</a></li>
                        <li><a class="dropdown-item" href="{{route('get-reportcasepage')}}">Report adoption</a></li>
                    </ul>
                </li>
                <li class="nav-item px-3 py-2">
                    <a class="nav-link text-dark" href="{{route('get-casestudiespage')}}">Case Studies</a>
                </li>
                <!-- OWN A PET Button with Border Separator -->
                <li class="nav-item px-3 py-2">
                    <a class="btn btn-teal rounded-pill text-white px-4 py-2 w-100 text-center"
                        href="{{route('get-adoptionpage')}}">OWN A PET</a>
                </li>
                <!-- Border Between "OWN A PET" & "Login" -->
                <li class="nav-item  d-none d-lg-block border-start"></li>
                <!-- User Login Section -->
                @php $user = session('user'); @endphp
                @if(!$user)
                <li class="nav-item px-3 py-2">
                    <a class="nav-link text-dark" href="{{ route('get-loginpage') }}">
                        <i class="bi bi-person-circle fs-4 d-block"></i>
                        <div class="small">Login</div>
                    </a>
                </li>
                @else
                <li class="nav-item dropdown px-3 py-2">
                    <a class="nav-link dropdown-toggle text-dark" href="#" id="userDropdown" role="button"
                        data-bs-toggle="dropdown">
                        Hello, {{ $user['name'] }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('get-accountManagmentpage') }}">Manage Account</a></li>
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

        <!-- Offcanvas Menu for Mobile -->
        <div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="mobileMenu">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav">
                    <li class="nav-item py-2 border-top mt-2 pt-3">
                        <a class="btn btn-teal rounded-pill text-white px-4 py-2 w-100"
                            href="{{route('get-adoptionpage')}}">OWN A PET</a>
                    </li>
                    <li class="nav-item py-2">
                        <a class="nav-link text-dark" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item dropdown py-2">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="vetsDropdownMobile" role="button"
                            data-bs-toggle="dropdown">
                            For Vets
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('get-vets-registerpage')}}">Become a vet</a></li>
                            <li><a class="dropdown-item" href="#">Support</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown py-2">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="petOwnerDropdownMobile" role="button"
                            data-bs-toggle="dropdown">
                            For Pet Owners
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('get-find-vetspage')}}">Connect to vet</a></li>
                            <li><a class="dropdown-item" href="{{route('get-adoptionpage')}}">Adopt a pet</a></li>
                            <li><a class="dropdown-item" href="{{route('get-reportcasepage')}}">Report adoption</a></li>
                        </ul>
                    </li>
                    <li class="nav-item py-2">
                        <a class="nav-link text-dark" href="{{route('get-casestudiespage')}}">Case Studies</a>
                    </li>
                    <!-- User Login Section -->
                    @if(!$user)
                    <li class="nav-item py-2">
                        <a class="nav-link text-dark" href="{{ route('get-loginpage') }}">
                            <i class="bi bi-person-circle fs-4 d-block"></i>
                            <div class="small">Login</div>
                        </a>
                    </li>
                    @else
                    <li class="nav-item dropdown py-2">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="userDropdownMobile" role="button"
                            data-bs-toggle="dropdown">
                            Account
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('get-accountManagmentpage') }}">Manage Account</a></li>
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
    </div>
</nav>
