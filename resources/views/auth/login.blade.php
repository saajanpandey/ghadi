{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('User Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <!-- Main CSS-->
    <link rel="stylesheet" href="{{asset('/css/app1.css')}}" />
    <!-- <script src="js/app.js"></script> -->
</head>
<body>
<div class="container-log-reg">
    <div class="sidepage">
        <h1>Welcome to Ghadi</h1>
    </div>

    <form action="{{ route('login') }}" method="post" class="form">
        @csrf
        <div class="create-login">
            <h2>Login</h2></div>

        <div class="imgcontainer">
            <img src="{{asset('/images/profile.png')}} "alt="Avatar" class="avatar">
        </div>

                <ul>
                    @foreach($errors->all() as $error)
                        <li style="color: red">{{$error}}</li>
                    @endforeach
                </ul>

        <div class="container-login1">
            <label class="form__label" for="email"><b>Email</b></label>
            <input class="form__input " type="email" placeholder="Enter Email" name="email" id="email" required >

            <br>
            <label class="form__label" for="password"><b>Password</b></label>
            <input class="form__input " type="password" placeholder="Enter Password" name="password" id="password" required >

                                            @error('password')<span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                <br>
            <div class="login">
               <button type="submit" class="btn btn-primary">Login</button>
            </div>

            <div class="remember-me">
                <label class="form__label">
                    <input class= "form__input remember-me" type="checkbox"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Remember me
                </label>
            </div>
        </div>
        <div class="container-login2">
            <div class="dhaa"><span style="opacity:0.8;">Don't have an account</span></div>
            <div class="sign-up1"><a href="{{ route('register') }}">Sign up</a></div>
            <div class="btd"><a href="{{route('homepage')}}">Back to Home</a></div>
        </div>
    </form>
</div><!-- .container-log-reg ends-->


</body>
</html>
