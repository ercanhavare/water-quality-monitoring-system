@extends('layouts.app')

@section('css')
    <style type="text/css">
        body {
            background-color: #126F91;
            background-image: url("images/turtle-3208324_1920-bg.jpg");
            background-attachment: fixed;
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
        }

        .text-center, .return-home{
            font-weight: bold;

        }

        .text-center:hover, .return-home:hover{
            text-decoration: none;
            font-weight: bold;
            color: #f8a73d;
        }
    </style>
@endsection

@section('content')
    <body>
    <div class="container" style="margin-top: 5%; opacity: 0.9; filter: Alpha(opacity=90); /* IE8 and earlier */">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="border: 2px solid #f8a73d;">
                    <div class="card-header"
                         style="border-bottom: 2px solid #f8a73d;">
                        <a href="{{url('/')}}" class="return-home">{{ __('Alagadi Turtle') }}</a>
                        <p class="float-right">Register here OR
                            <a href="{{route('login')}}" class="text-center">Sign in!</a>
                        </p></div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="full_name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control @error('full_name') is-invalid @enderror"
                                           name="full_name"
                                           value="{{ old('full_name') }}" required autocomplete="full_name" autofocus>

                                    @error('full_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="mobile_phone"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Mobile') }}</label>

                                <div class="col-md-6">
                                    <input id="mobile_phone" type="tel"
                                           class="form-control @error('mobile_phone') is-invalid @enderror"
                                           name="mobile_phone"
                                           required autocomplete="phone">

                                    @error('mobile_phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="mobile_phone"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                <div class="col-md-6">
                                    <input id="address" type="text"
                                           class="form-control @error('address') is-invalid @enderror" name="address"
                                           required autocomplete="address">

                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-outline-primary btn-block">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection
