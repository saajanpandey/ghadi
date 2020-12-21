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

        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->first_name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->gender}}</td>
            <td>{{$user->phone_number}}</td>
            <td>{{$user->address}}</td>

            <td><a href="/users/{{$user->id}}/edit">Edit</a></td>

            <td>

            <form action="{{route('users.destroy',$user->id)}}" method="POST">
                @method('DELETE')
                @csrf

                <input type="submit" value="Delete">
            </form>

            {{-- @endforeach --}}

            </td>

        </tr>

    </table>
</body>
</html>
