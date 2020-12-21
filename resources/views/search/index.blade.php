<html>
<head>
    <title>Search</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

<form action="{{route('search')}}" method="GET" style="padding-left: 500px;padding-top: 20px; align-content: center">
    <input type="text" name="name" id="name"  placeholder="Product Name Or Brand"/>
    <button type="submit">Search</button>
</form>

<table class="table table-dark">
    <thead>
    <tr>

        <th scope="col">Product Name</th>
        <th scope="col">Price</th>
        <th scope="col">Brand</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($project as $item)
    <tr>

        <td>{{$item->product_name}}</td>
        <td>{{$item->product_price}}</td>
        <td>{{$item->product_brand}}</td>
        <td><a href="/home/cart/{{$item->id}}" class="btn btn-primary">Add to card</a>
        </td>

    </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>

