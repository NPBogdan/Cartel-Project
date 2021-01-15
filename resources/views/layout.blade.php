<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>The Cartel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!--Script-ul Google API -->
    <script type="text/javascript" src="{{asset('/js/app.js')}}" defer></script>
    <script
        type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBB0Tj2YoWLm7ozC9I9P_zkESQeRmCKDXw&libraries=places&v=weekly"
        defer></script>
    <!-- Style -->
    <style>
        /* Set the size of the div element that contains the map */
        #map {
            height: 400px;
            /* The height is 400 pixels */
            width: 100%;
            /* The width is the width of the web page */
        }
        body {
            font-family: 'Nunito', cursive;
            background-color: #f4f6ff;
        }
    </style>
</head>
<body>
    <!-- The header of the page -->
    <header class="mb-4 mt-4">
        <h2 class="text-center text-muted">The Cartel</h2>
    </header>
    <!-- The navbar -->
    <nav class="navbar navbar-dark bg-dark mb-5">
        <a class="text-light bg-dark ml-4" href="/">
            <h2>Home</h2>
        </a>
        <div class="text-right">
            <a href="https://www.google.com/">Google</a>
            <a href="/logout">Log Out</a>
        </div>
    </nav>
    <!-- Main content -->
    <main class="container">
        <section>
            @yield("content")
        </section>
    </main>

    <!-- The footer of the page -->
    <footer class="text-center bottom">
        <p>&copy; 2020 Norocel Petru Bogdan<p>
    </footer>
</body>
</html>
