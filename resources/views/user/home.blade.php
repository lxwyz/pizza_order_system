<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>This is User Page.</h1>

    <h3>{{Auth::user()->role}}</h3>
  <form action="{{route('logout')}}" method="post">
    @csrf
    <input type="submit" value="Logout"> <!-- button for logout -->
  </form>
</body>
</html>
