@extends('layouts.guest')

@section('content')
<!-- Outer Row -->
<div class="row justify-content-center">

    <h1 class="text-center mt-4 font-weight-bolder font-size-large text-white">NOESATRIP</h1>

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-4">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">{{ __('Selamat Datang!') }}</h1>
                            </div>
                            <form action="{{ route('login') }}" method="post" class="user">
                                @csrf

                                <div class="form-group">
                                    <input type="email" name="email" value="{{ old('email') }}" style="font-size: medium;" class="form-control form-control-user @error('email') is-invalid @enderror" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="{{ __('Email Address') }}" required autofocus>
                                </div>
                                @error('email')
                                <div class="form-group custom-control">
                                    <label class="">{{ $message }}</label>
                                </div>
                                @enderror

                                <div class="form-group">
                                    <input type="password" name="password" style="font-size: medium;" class="form-control form-control-user @error('password') is-invalid @enderror" id="exampleInputPassword" placeholder="{{ __('Password') }}" required>
                                </div>
                                @error('password')
                                <div class="form-group custom-control">
                                    <label class="">{{ $message }}</label>
                                </div>
                                @enderror

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" name="remember" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">{{ __('Remember Me') }}</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-user btn-block" style="background-color: #3252DF; color: #fff;">
                                    {{ __('Login') }}
                                </button>
                            </form>
                            <hr>
                            @if (Route::has('password.request'))
                            <div class="text-center">
                                <a class="small" href="{{ route('password.request') }}">{{ __('Forgot Password?') }}</a>
                            </div>
                            @endif
                            @if (Route::has('register'))
                            <div class="text-center">
                                <a class="small" href="{{ route('register') }}">{{ __('Create New Account!') }}</a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection