{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">Dashboard</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}



{{--                        {{$users->first_name}}--}}
{{--                        {{$users->last_name}}--}}
{{--                        {{$users->address}}--}}
{{--                        {{$users->gender}}--}}
{{--                        {{$users->email}}--}}
{{--                        {{$users->phone_number}}--}}

{{--                    <a href="/home/edit/{{$users->id}}">Edit</a>--}}

{{--                    <a href="/home/delete/{{$users->id}}">Delete Your Account</a>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}

<html>
<head>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="{{asset('/css/profile.css')}}" >
</head>
<body>
<div class="container" style="align:center">
    <div class="row profile">
        <div class="col-md-3">
            <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="https://static.change.org/profile-img/default-user-profile.svg" class="img-responsive" alt="">
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        {{$users->first_name}} {{$users->last_name}}
                    </div>
                    <div class="profile-usertitle-job">

                    </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->

                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul class="nav">

                        <li>
                            <a href="/home/edit/{{$users->id}}">
                                <i class="glyphicon glyphicon-user"></i>
                                Edit Profile </a>
                        </li>
                        <li>
                            <a href="/home/delete/{{$users->id}}">
                                <i class="glyphicon glyphicon-flag"></i>
                                Delete Profile</a>
                        </li>
                    </ul>
                </div>
                <!-- END MENU -->
            </div>
        </div>
        <div class="col-md-9">
            <div class="profile-content " >
                Address: {{$users->address}}<br/>
               Gender: {{$users->gender}}<br/>
                Email Address:{{$users->email}}<br/>
                Contact No.:{{$users->phone_number}}<br/>
            </div>
        </div>
    </div>
</div>

<br>
<br>
</body>
</html>
