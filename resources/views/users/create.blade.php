<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ghadi</title>
</head>
<body>
    <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
        @csrf
       First Name: <input type="text" name="first_name" id=""><br>
       Last Name: <input type="text" name="last_name" id=""><br>
       Gender: <input type="radio" name="gender" value="Male" id="">Male
       <input type="radio" name="gender" value="Female">Female<br>
       Address: <input type="text" name="address" id=""><br>
       Email: <input type="email" name="email" id=""><br>
       Phone: <input type="text" name="phone" id=""><br>
       <input type="submit" value="Submit">
    </form>
</body>
</html>
