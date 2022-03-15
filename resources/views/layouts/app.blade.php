<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>
    <body>
    <nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="{{url('/')}}">Leaderboard</a>
        </div>
        <ul class="nav navbar-nav">
        <li class="active"><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{route('club.list')}}">Clubs</a></li>
        <li><a href="{{route('player.list')}}">Players</a></li>
        <li><a href="{{route('game.list')}}">Games</a></li>
        </ul>
    </div>
    </nav>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>