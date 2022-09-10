<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css"/>
</head>
<body>

<nav class="navbar navbar-expand-md bg-light shadow">
    <div class="container">
        <a href=""class="navbar-brand fw-bold">CRUD</a>
        <ul class="navbar-nav">
            <li><a class="nav-link" href="{{route('home')}}">Home</a></li>
            <li><a class="nav-link" href="{{route('add')}}">Add</a></li>
            <li><a class="nav-link" href="{{route('manage')}}">Manage</a></li>
        </ul>
    </div>
</nav>

@yield('body')
<script src="{{asset('/')}}js/bootstrap.js"></script>
</body>
</html>
