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

        span a {
            font-weight: bold;
        }

        span a:hover {
            color: #f8a73d;
            font-weight: bold;
            text-decoration: none;
        }

        .register-link a, .return-home{
            font-weight: bold;
        }

        .register-link a:hover, .return-home:hover{
            text-decoration: none;
            font-weight: bold;
            color: #f8a73d;
        }
    </style>
@endsection
@section('content')
    <body>
    <div class="container" style="margin-top: 10%; opacity: 0.9; filter: Alpha(opacity=90); /* IE8 and earlier */">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card"
                     style="border: 2px solid #f8a73d;">
                    <div class="card-header"
                         style="border-bottom: 2px solid #f8a73d;">
                        <a href="{{url('/')}}" class="return-home">{{ __('Alagadi Turtle') }}</a>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                           required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            {{--<div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>--}}

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-outline-primary btn-block">
                                        {{ __('Login') }}
                                    </button>

                                    {{--  @if (Route::has('password.request'))
                                          <a class="btn btn-link" href="{{ route('password.request') }}">
                                              {{ __('Forgot Your Password?') }}
                                          </a>
                                      @endif--}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <p class="mt-3 mb-0 register-link">
                                        New user?<br>
                                        <a href="{{route('register')}}" class="text-center">Sign up for the first
                                            time</a>
                                    </p>
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
