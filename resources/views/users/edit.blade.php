<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('users.update',$user->id)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
    First Name: <input type="text" name="first_name" id="" value="{{$user->first_name}}"><br>
       Last Name: <input type="text" name="last_name" id="" value="{{$user->last_name}}"><br>
       Gender: <input type="radio" name="gender" value="Male" id="">Male
       <input type="radio" name="gender" value="Female">Female</br>
       Address: <input type="text" name="address" id="" value="{{$user->address}}"><br>
       Email: <input type="email" name="email" id="" value="{{$user->email}}"><br>
       Phone: <input type="text" name="phone" id="" value="{{$user->phone}}"><br>
       <input type="submit" value="Submit">
    </form>
</body>
</html>
