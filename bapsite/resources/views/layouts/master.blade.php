<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('main.css') }}" />
</head>
<body>

    <header>
        @section('header')
        De Header
        @show
    </header>

    <nav>
        <ul>
            <li><a href="{{ route('homepage') }}">Home</a></li>
            <li><a href="{{ route('homepage'['name' => 'henkie']) }}">Home</a></li>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
    
    </footer>

</body>
</html>