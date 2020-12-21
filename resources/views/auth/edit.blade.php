{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Document</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--    <form action="{{route(u'ser.update',$user->id)}}" method="post" enctype="multipart/form-data">--}}

{{--        @csrf--}}
{{--    First Name: <input type="text" name="first_name" id="" value="{{$user->first_name}}"><br>--}}
{{--       Last Name: <input type="text" name="last_name" id="" value="{{$user->last_name}}"><br>--}}
{{--       Gender:--}}
{{--       <select name="gender">--}}
{{--           <option>{{$user->gender}}</option>--}}
{{--           <option disabled value="">Please select an option</option>--}}
{{--           <option value="Male">Male</option>--}}
{{--           <option vale="Female">Female</option>--}}
{{--       </select>--}}
{{--        <br>--}}
{{--       Address: <input type="text" name="address" id="" value="{{$user->address}}"><br>--}}
{{--      Contact No.: <input type="text" name="phone" id="" value="{{$user->phone_number}}"><br>--}}

{{--       <input type="submit" value="Submit">--}}
{{--    </form>--}}
{{--</body>--}}
{{--</html>--}}
    <!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <form action="{{route('user.update',$user->id)}}" method="post" class="form" enctype="multipart/form-data">
        @csrf
        <div class="caa">
            <h2>Create an account</h2>
        </div>

        <div class="imgcontainer">
            <img src="{{asset('/images/profile.png')}}" alt="Avatar" class="avatar">
        </div>
        <div class="container-register1">
            <label class="form__label" for="first_name"><b>FirstName</b></label>
            <input class="form__input" type="text" placeholder="First Name" name="first_name" id="first_name" required  value="{{$user->first_name}}">

            <label class="form__label" for="last_name"><b>LastName</b></label>
            <input class="form__input" type="text" placeholder="Last Name" name="last_name" id="last_name" required value="{{$user->last_name}}">

            <b class="gender">Gender</b>

{{--            <input type="radio" id="male" name="gender" value="male" required>--}}
{{--            <label class="form__label" for="male">Male</label><br>--}}
{{--            <input type="radio" id="female" name="gender" value="female" required>--}}
{{--            <label class="form__label" for="female">Female</label><br>--}}
{{--            <input type="radio" id="other" name="gender" value="other" required>--}}
{{--            <label class="form__label" for="other">Other</label><br>--}}
            <select name="gender" class="mdb-select md-form">
                           <option>{{$user->gender}}</option>
                           <option disabled value="">Please select an option</option>
                           <option value="Male">Male</option>
                           <option value="Female">Female</option>
                       </select>

            <br>
            <label class="form__label" for="address"><b>Address</b></label>
            <input class="form__input" type="text" placeholder="Address" name="address" id="address" required value="{{$user->address}}">

            <label class="form__label" for="contact"><b>Enter your phone number:</b></label>
            <input class="form__input" type="tel" id="contact" name="contact" placeholder="98-****-***" required value="{{$user->phone_number}}">



            <div class="login">
                <button type="submit">Submit</button>
            </div>
        </form>

</div>
</body>
</html>
