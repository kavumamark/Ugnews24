<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ugnews24-@yield('title')</title>
</head>
<body>
  <h1>Welcome to Ugnews24</h1>  
  @yield('heading')
  <hr>
  <ul>
      <li>Main Menu</li>
      <li><a href="/">Home</a></li>
      <li><a href="/about">About Us</a></li>
      <li><a href="/posts">Post Here</a></li>

  </ul>
  <hr>
  @yield('body')


  <hr>
  @copy kavuma technologies limited.inc


</body>
</html>

