@extends('client.layouts.main')
@section('page')
<link rel="stylesheet" href="{{asset('css/login-signup.css')}}">
<div class="container panel pt-5 pb-5">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card login-cards d-flex flex-column align-items-center justify-content-center text-center" style="background-color: #6848BD;">
                <h1 class="hero-heading-white" style="font-size: 50px;">Already registered? <br> LOGIN NOW</h1>
                <div>
                    <a href="{{route('get-loginpage')}}" class="btn btn-teal rounded-pill px-3">login to your account</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 text-center">
            <div class="card field-cards d-flex flex-column align-items-center justify-content-center text-center shadow">
                <h1 class="hero-heading-black" style="font-size: 40px;">Register</h1>
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <form action="{{ route('register-user') }}" method="POST">
                    @csrf
                    <div class="mb-3 text-start">
                        <label for="username" class="form-label">User Name</label>
                        <input type="text" class="form-control" id="username" name="name" required>
                    </div>
                    <div class="mb-3 text-start">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3 text-start">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3 text-start">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                    </div>
                    <button type="submit" class="btn btn-teal rounded-pill px-3">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
