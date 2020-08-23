<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
    <title>Todos</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Todos App</a>
        <button class="navbar-toggler" type="button"><span class="navbar-toggler-icon"></span></button>

        <div class="navbar navbar-collapse ">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a href="/todos">todos<span class="sr-only">(current)</span></a></li>
            </ul>
            <br>
            <ul class="navbar-nav mr-2">
                <li class="nav-item active"><a href="/new-todo">Create todo<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="container">

        @yield('content')

    </div>

</body>

</html>