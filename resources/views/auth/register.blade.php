@extends('layouts.app')

@section('content')

<div class="card bg-pattern">

    <div class="card-body p-4">
        <div class="text-center w-75 m-auto">
            <a href="index.html">
                <span><img src="{{ asset('admin/assets/images/logo-light.png') }}" alt="" height="22"></span>
            </a>
            <p class="text-muted mb-4 mt-3">Don't have an account? Create your account, it takes less than a minute</p>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf
    
            <div class="form-group">
                <label for="fullname">{{ __('Full Nam') }}e</label>
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
    
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
    
            <div class="form-group">
                <label for="emailaddress">{{ __('Email address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
    
            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
    
            <div class="form-group">
                <label for="password">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
    
            <div class="form-group mb-0 text-center">
                <button class="btn btn-success btn-block" type="submit">{{ __('Sign Up') }} </button>
            </div>
            <div class="text-center">
                    <h5 class="mt-3 text-muted">Sign up using</h5>
                    <ul class="social-list list-inline mt-3 mb-0">
                        <li class="list-inline-item">
                            <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                        </li>
                    </ul>
                </div>
        </form>
    </div> <!-- end card-body -->
</div>
<!-- end card -->

<div class="row mt-3">
    <div class="col-12 text-center">
        <p class="text-white-50">Already have account?  <a href="pages-login.html" class="text-white ml-1"><b>Sign In</b></a></p>
    </div> <!-- end col -->
</div>
<!-- end row -->
    
@endsection
