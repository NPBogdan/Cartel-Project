<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Cartel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Red+Rose:wght@700&display=swap"
          rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #f4f6ff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
            display: inline;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
            font-family: 'Red Rose', cursive;
        }

        .links > a {
            color: #1b262c;
            padding: 0 25px;
            font-size: 27px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }


        /* Style all font awesome icons */
        .fa {
            padding: 18px;
            font-size: 30px;
            width: 55px;
            text-align: center;
            text-decoration: none;
            border-radius: 100%;

        }

        /* Add a hover effect if you want */
        .fa:hover {
            opacity: 0.6;
        }

        /* Set a specific color for each brand */

        /* Facebook */
        .fa-facebook {
            background: #3B5998;
            color: white;
        }

        .fa-twitch {
            background: #6441a5;
            color: white;
        }

        .fa-youtube {
            background: #FF0000;
            color: white;
        }

        .fa-github {
            background: #24292e;
            color: white;
        }
    </style>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="flex-center position-ref full-height ">
    <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}">Home</a>
        @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @endauth
    </div>
    <div class="content">
        <div class="title m-b-md">
            The Cartel
        </div>

        <h3>See how it's there!</h3>

        <a href="https://github.com/NPBogdan/the_cartel" class="fa fa-github .mx-auto"></a>
        <a href="https://www.facebook.com/" class="fa fa-facebook .mx-auto"></a>
        <a href="https://www.youtube.com" class="fa fa-youtube .mx-auto"></a>
        <a href="https://www.twitch.tv" class="fa fa-twitch .mx-auto"></a>

    </div>
</div>

<footer class="text-center fixed-bottom">
    <p>&copy; 2020 Norocel Petru Bogdan
    <p>
</footer>
</body>
</html>
