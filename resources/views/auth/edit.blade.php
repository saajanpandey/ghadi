<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('user.update',$user->id)}}" method="post" enctype="multipart/form-data">

        @csrf
    First Name: <input type="text" name="first_name" id="" value="{{$user->first_name}}"><br>
       Last Name: <input type="text" name="last_name" id="" value="{{$user->last_name}}"><br>
       Gender:
       <select name="gender">
           <option>{{$user->gender}}</option>
           <option disabled value="">Please select an option</option>
           <option value="Male">Male</option>
           <option vale="Female">Female</option>
       </select>
        <br>
       Address: <input type="text" name="address" id="" value="{{$user->address}}"><br>
      Contact No.: <input type="text" name="phone" id="" value="{{$user->phone_number}}"><br>

       <input type="submit" value="Submit">
    </form>
</body>
</html>
