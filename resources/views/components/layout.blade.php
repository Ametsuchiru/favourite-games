<!DOCTYPE html>
<html>
  <head>
    <title>{{ $title }}</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet"/>
  </head>
  <body>
    <nav>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/create">Add a New Game</a></li>
      </ul>
    </nav>
    {{ $slot }}
  </body>
</html>