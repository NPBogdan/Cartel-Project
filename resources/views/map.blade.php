<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>The Cartel</title>

    <!--Script-ul Google API -->
    <script type="text/javascript" src="{{asset('/js/app.js')}}" defer></script>
    <script
        type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBB0Tj2YoWLm7ozC9I9P_zkESQeRmCKDXw&libraries=places&v=weekly" defer
    ></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style type="text/css">
        body {
            font-family: 'Nunito';
        }
        /* Set the size of the div element that contains the map */
        #map {
            height: 400px;
            /* The height is 400 pixels */
            width: 100%;
            /* The width is the width of the web page */
        }
    </style>
</head>
<body>
    <?php //Incercam sa respectam putin structura unei pagini de pe MDN ?>


    <div class="text-right">
        <a href="/">Home Page</a>
        <a href="/logout">Log Out</a>
    </div>


    <h3>Googe Maps</h3>
    <!--The div element for the map -->
    <div id="map"></div>

    <!--Address form -->
    @auth
        <form id="locationForm">
            <input type="text" id="locationName">
            <input type="submit">
        </form>
    @endauth

    <!--Some response dates-->
    <div id="formatedAddress"></div>
    <div id="position"></div>

</body>
</html>
