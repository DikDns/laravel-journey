<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>About</title>
    </head>
    <body>

      <h1>About</h1>

      <ul>
        <li>Name: <?= $name ?></li>
        <li>Email: <?= $email ?></li>
      </ul>

      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/posts">Posts</a></li>
      </ul>

    </body>
</html>
