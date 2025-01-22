
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
                            <img width="120" src="{{ asset('assets/images/orange-logo.svg') }}" alt="Orange Logo">
                        </div>
                        <h4 class="text-center mb-4">!You can sign in only if you are an admin</h4>
                        @if(Session::has('msg'))
                            <p class="text-danger text-center">{{Session::get('msg')}}</p>
                        @endif
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="mb-1"><strong style="color: orange">Email</strong></label>
                                <input type="email" name="email" class="form-control" style="color: orange !important;">
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="mb-1"><strong style="color: orange">Password</strong></label>
                                <input type="password" name="password" class="form-control" style="color: orange !important;">
                                @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox ml-1">
                                        <input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
                                        <label class="custom-control-label" for="basic_checkbox_1" style="color: orange">Remember my preference</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <a href="{{ route('password.request') }}" style="color: orange; text-decoration: none; border-bottom: 1px solid orange;">Forgot Password?</a>
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <p style="color: orange !important;">Don't have an account? <a href="{{ route('register') }}" style="color: orange; text-decoration: none; border-bottom: 1px solid orange;">Sign Up</a></p>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-block" style="background-color: orange; color: white;">Sign Me In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
