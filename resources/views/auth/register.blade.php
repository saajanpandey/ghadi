{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('User Register') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}"  autocomplete="name" autofocus>--}}

{{--                                @error('first_name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}"  autocomplete="name" autofocus>--}}

{{--                                @error('last_name')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <select name="gender">--}}
{{--                            <option value="" disabled selected>Please select a gender</option>--}}
{{--                            <option value="Male">Male</option>--}}
{{--                            <option value="Female">Female</option>--}}
{{--                        </select>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}"  autocomplete="name" autofocus>--}}

{{--                                @error('address')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Contact No.') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}"  autocomplete="name" autofocus>--}}

{{--                                @error('contact')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">--}}

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
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
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
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('/css/app1.css')}}">
    <!-- <script src="js/app.js"></script> -->
</head>
<body>
<div class="container-log-reg">
    <div class="sidepage">
        <h1>Welcome to Ghadi</h1>
    </div>
    <form action="{{ route('register') }}" method="post" class="form">
        @csrf
        <div class="caa">
            <h2>Create an account</h2>
        </div>

        <div class="imgcontainer">
            <img src="{{asset('/images/profile.png')}}" alt="Avatar" class="avatar">
        </div>
        <div class="container-register1">
            <label class="form__label" for="first_name"><b>FirstName</b></label>
            <input class="form__input" type="text" placeholder="First Name" name="first_name" id="first_name" required>

            <label class="form__label" for="first_name"><b>LastName</b></label>
            <input class="form__input" type="text" placeholder="Last Name" name="last_name" id="last_name" required>

            <b class="gender">Gender</b>

            <input type="radio" id="male" name="gender" value="male" required>
            <label class="form__label" for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female" required>
            <label class="form__label" for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="other" required>
            <label class="form__label" for="other">Other</label><br>


            <label class="form__label" for="address"><b>Address</b></label>
            <input class="form__input" type="text" placeholder="Address" name="address" id="address" required>

            <label class="form__label" for="contact"><b>Enter your phone number:</b></label>
            <input class="form__input" type="tel" id="contact" name="contact"placeholder="98-****-***" required>

            <label class="form__label" for="ueail"><b>E-mail</b></label>
            <input class="form__input" type="text" placeholder="E-mail" name="email" id="email" required>

            <label class="form__label" for="password"><b>Password</b></label>
            <input class="form__input" type="password" placeholder="Password" name="password" id="password" required>

            <label class="form__label" for="password_confirmation"><b>Confirm Password</b></label>
            <input class="form__input" type="password" placeholder="Confirm Password" name="password_confirmation" id="password_confirmation" required>


            <div class="login">
                <button type="submit">Submit</button>
            </div>

        <div class="container-register2">
            <div class="ahaa"><span style="opacity:0.8;">Already have an account</span></div>
            <div class="login1"><a href="{{ route('login') }}">Login</a></div>
            <div class="btd"><a href="/">Back to Home</a></div>
        </div>
    </form>
</div>
</body>
</html>
