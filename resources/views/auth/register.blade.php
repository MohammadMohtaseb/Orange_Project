

<link rel="icon" href="{{ asset('assets/images/orange-logo.svg') }}" type="image/x-icon">

<style>
    .bg-black {
        background: white !important;
    }
    </style>
@extends('auth.master')

@section('content')
    <div class="col-md-6">
        <div class="authincation-content">
            <div class="row no-gutters">
                <div class="col-xl-12">
                    <div class="auth-form">
                        <div class="text-center mb-3">
                            <img width="120" src="{{ asset('assets/images/orange-logo.svg') }}" alt="">
                        </div>
                        <h4 class="text-center mb-4">Create Your Account</h4>
                        @if(Session::has('msg'))
                            <p class="text-danger text-center">{{Session::get('msg')}}</p>
                        @endif
                        <form action="{{route('register')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="mb-1"><strong style="color: orange">Name</strong></label>
                                <input type="text" name="name" class="form-control" style="color: orange !important;" value="{{ old('name') }}" required >
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="mb-1"><strong style="color: orange">Email</strong></label>
                                <input type="email" name="email" class="form-control" style="color: orange !important;" value="{{ old('email') }}" required>
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="mb-1"><strong style="color: orange">Password</strong></label>
                                <input type="password" name="password" class="form-control" style="color: orange !important;" required>
                                @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="mb-1"><strong style="color: orange">Confirm Password</strong></label>
                                <input type="password" name="password_confirmation" style="color: orange !important;" class="form-control" required>
                            </div>
                            <div class="text-center mt-4">
                                <p style="color: orange !important;">Already have an account ? <a href="{{ route('login') }}" style="color: orange; text-decoration: none; border-bottom: 1px solid orange;">Log In</a></p>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-block" style="background-color: orange; color: white;">Create Account</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
