@extends('client.layouts.main')
@section('page')
<link rel="stylesheet" href="{{asset('css/login-signup.css')}}">
<div class="container panel pt-5 pb-5">
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="card login-cards d-flex flex-column align-items-center justify-content-center text-center" style="background-color: #6848BD;">
                <h1 class="hero-heading-white" style="font-size: 50px;">NOT A USER? <br> REGISTER NOW</h1>
                <div>
                    <a href="{{route('get-registerpage')}}" class="btn btn-teal rounded-pill px-3">Register as a user</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 text-center">
            <div class="card field-cards d-flex flex-column align-items-center justify-content-center text-center shadow">
                <h1 class="hero-heading-black" style="font-size: 40px;">Login</h1>
                <form>
                    <div class="mb-3 text-start">
                      <label for="exampleInputEmail1" class="form-label">User Name</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">Enter your user name or email address.</div>
                    </div>
                    <div class="mb-3 text-start">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check text-start">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Remember me?</label>
                    </div>
                    <button type="submit" class="btn btn-teal rounded-pill px-3">Login</button>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection
