<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ghadi</title>
</head>
<body>
    <table>
        <tr>
            <th>User ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Address</th>
        </tr>

        @foreach ($users as $user)

        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->first_name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->gender}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->address}}</td>
            <td><a href="{{ URL::to('/users/' . $user->id) }}">Show Detail</a></td>

        </tr>

        @endforeach

    </table>
</body>
</html>
