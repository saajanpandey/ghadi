{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Post Watches</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="row">--}}
{{--    <div class="col-md-4 col-md-offset-4 error">--}}
{{--        <ul>--}}
{{--            @foreach($errors->all() as $error)--}}
{{--                <li style="color: red">{{$error}}</li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<form action="{{route('ads.store')}}" method="post" enctype="multipart/form-data">--}}
{{--        @csrf--}}
{{--       Product Name: <input type="text" name="product_name" id=""><br>--}}
{{--       Product Price:<input type="text" name="product_price" id=""><br>--}}
{{--        Product Description:--}}
{{--    <input type="text" name="product_description">--}}
{{--    <br>--}}
{{--    <select name="categories[]" multiple >--}}
{{--        <option value="" disabled selected>Please select category</option>--}}
{{--        @foreach($categories as $category)--}}
{{--            <option value="{{$category->id}}">{{ $category->name }}</option>--}}
{{--        @endforeach--}}
{{--    </select>--}}
{{--    <br>--}}
{{--    <select name="brands" >--}}
{{--        <option value="" disabled selected>Please select Brand</option>--}}
{{--        @foreach($brands as $brand)--}}
{{--            <option value="{{$brand->name}}">{{ $brand->name }}</option>--}}
{{--        @endforeach--}}
{{--    </select>--}}
{{--    <br>--}}
{{--     <input type="file" name="image[]" id="" multiple><br>--}}
{{--       <input type="submit" value="Submit">--}}

{{--    </form>--}}
{{--</body>--}}
{{--</html>--}}


    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">


    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

    <link rel="stylesheet" href="/css/style.css">

</head>

<body>
<div class="site-wrapper">
    <!-- Sidebar -->
    <aside class="sidebar">
        <header>
            <a href="/admin">
                <span class="fa fa-heart"></span>
            </a>
        </header>
        <nav class="menu">
            <ul>
                <li><a href="/admin" class="menu-item">
                        <span class="menu-icon far fa-calendar"></span>
                        <span class="menu-label"> Dashboard </span>
                    </a>
                </li>
                <li><a href="/ads" class="menu-item">
                        <span class="menu-icon fa fa-shopping-bag"></span>
                        <span class="menu-label"> Products </span>
                    </a>
                </li>

                <li><a href="/ads/create" class="active menu-item">
                        <span class="menu-icon fas fa-plus-circle"></span>
                        <span class="menu-label"> Add </span>
                    </a>
                </li>
                <li><a href="/brand" class=" menu-item">
                        <span class="menu-icon fas fa-sign"></span>
                        <span class="menu-label"> Brands </span>
                    </a>
                </li>

                <li><a href="/category" class="menu-item">
                        <span class="menu-icon fas fa-list"></span>
                        <span class="menu-label"> Category </span>
                    </a>
                </li>

{{--                <li><a href="/home/history" class="menu-item">--}}
{{--                        <span class="menu-icon fas fa-history"></span>--}}
{{--                        <span class="menu-label"> History </span>--}}
{{--                    </a>--}}
{{--                </li>--}}
            </ul>
        </nav>
    </aside>
    <!-- End Sidebar -->
    <!-- Main  Warpper -->
    <main class="main-wrapper">
        <!-- Site Header -->
        <header class="site-header">
            <div class="searchbar">
{{--                <span class="fa fa-search"></span>--}}
{{--                <input type="text" name="" placeholder="Search..." id="">--}}
            </div>
            <div class="d-flex align-items-center">
{{--                <div class="notification-bell">--}}
{{--                    <span class="far fa-bell"> </span>--}}
{{--                </div>--}}
                <div class="user-info">
                    <span class="user-avatar"> AD </span>
                    <span class="user-name"> Admin </span>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                    Logout</a>
                </div>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </header>
        <!-- End Site Header -->



         <div class="create-form">

            <div class="form-group">

                <h1 style="margin-left: 15px;">Add New Product</h1>
                <br>

                <div class="row">
                        <div class="col-md-4 col-md-offset-4 error">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li style="color: red">{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                <form action="{{route('ads.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <label class="col-md-4 control-label" for="product_name"> Product Name</label>

                    <div class="col-md-4">

                        <input id="product_name" name="product_name" placeholder="Enter Product Name" class="form-control input-md" required="" type="text">

                    </div>

                    <br>
                    <br>
                    <br>

                    <label class="col-md-4 control-label" for="product_price"> Product Price (Rs.)</label>

                    <div class="col-md-4">

                        <input id="product_price" name="product_price" placeholder="Enter Product Price" class="form-control input-md " required="" type="text">
                    </div>

                    <br>
                    <br>
                    <br>
                    <div>
                        <label class="col-md-4 control-label" for="product_id" style="margin-right:15px;"> Product Category</label>

                        <select name="categories[]" multiple >

                            <option value="" disabled selected>Please select category</option>

                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{ $category->name }}</option>
                            @endforeach

                        </select>

                    </div>
                    <br>

                    <div>

                        <label class="col-md-4 control-label" for="product_id" style="margin-right:15px;"> Product Brand</label>

                        <select name="brands" >
                            <option value="" disabled selected>Please select Brand</option>
                            @foreach($brands as $brand)
                                <option value="{{$brand->name}}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                        <br>

                    </div>

                    <br>

                    <label class="col-md-4 control-label" for="product_id" style="margin-right:15px;"> Product Image</label>

                    <input type="file" name="image[]" id="" multiple><br>

                    <input type="submit" style="cursor: pointer; margin-left: 15px;" class="btn btn-success" value="Submit">

                </form>

            </div>
        </div>

    </main>

    <!-- End Main Wrapper -->
</div>


</body>

</html>

