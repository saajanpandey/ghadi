<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>    {{Auth::user()->first_name}}</h1>
    <table>
        <tr>
            <th>Product Name</th>
            <th>Price</th>
            <th>images</th>
        </tr>

        @foreach ($user->ads as $cart)
        <tr>
        <td>{{$cart->product_name}}</td>
        <td>{{$cart->product_price}}</td>

            @foreach ($cart->images as $image)
                <td><img src="/storage/cover_image/{{$image->imagelocation}}" alt="" style="width:200px;"></td>
             @endforeach
             <td>
        <form action="{{route('cart.destroy',[$cart->id])}}" method="POST">
        @method('DELETE')
        @csrf

            <input type="submit" value="Purchase">

        </form>
    </td>
            </tr>
        @endforeach


    </table>
</body>
</html>
