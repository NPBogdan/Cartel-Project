<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>The Cartel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

<main>
    <div class="text-center">
        <form method="post" action="/login">
            {{ csrf_field() }}
            <label for="email">Email</label>
            <input type="email" class="text-primary" name="email">
            <br>
            <label for="password">Parola</label>
            <input type="password" class="text-primary" name="password">
            <input type="submit" value="Log In">
        </form>
    </div>
</main>

</body>
</html>
