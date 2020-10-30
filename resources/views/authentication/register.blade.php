<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Cartel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>
<body>
<div class="container text-center">Salut</div>
    <form method="post" action="/user/register">
        {{ csrf_field() }}
        <label for="name">Name</label>
        <input type="text" class="text-primary" name="name">
        <br/>
        <label for="email">Email</label>
        <input type="email" class="text-primary" name="email">
        <br/>
        <label for="password">Parola</label>
        <input type="password" class="text-primary" name="password">
        <input type="submit" value="Register">
    </form>
</body>
</html>
