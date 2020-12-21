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
                <li><a href="/ads" class=" menu-item">
                        <span class="menu-icon fa fa-shopping-bag"></i></span>
                        <span class="menu-label"> Products </span>
                    </a>
                </li>

                <li><a href="/ads/create" class="menu-item">
                        <span class="menu-icon fas fa-plus-circle"></span>
                        <span class="menu-label"> Add </span>
                    </a>
                </li>
                <li><a href="/brand" class="active menu-item">
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
                    document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </header>
        <!-- End Site Header -->



        <div class="show-data">

            <table class="table">

                <tr>
                    <td><h2>Our Brands</h2></td>
                    <td style="float: right; margin-top: 10px;"><i><a href="/brand/create">Add a new brand...</a></i></td>
                </tr>

                <tr>
                    <th >Brand ID</th>
                    <th >Brand Name</th>
                    <th>Action</th>
                </tr>
                @foreach($brands as $brand)
                    <tr>
                        <td>{{$brand->id}}</td>
                        <td>{{$brand->name}}</td>
                        <td><a href="/brand/delete/{{$brand->id}}">Delete Brand</a></td>
                    </tr>
                @endforeach


            </table>

        </div>

    </main>

    <!-- End Main Wrapper -->
</div>
</body>

</html>
