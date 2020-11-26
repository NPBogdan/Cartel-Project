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
    </nav>
    <!-- The main content of the page -->
    <main class="container">
        <h4 class="text-center">Register</h4>
        <form method="post" action="/user/register">
            {{ csrf_field() }}
            <div class="col-5 offset-4">
                <div class="form-group">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="firstName" class="col-sm-4 col-form-label">First Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="firstName">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelpBlock" required>
                        <small id="emailHelpBlock" class="form-text text-muted">Please enter your email address.</small>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" aria-describedby="passwordHelpBlock" required>
                        <small id="passwordHelpBlock" class="form-text text-muted">Your password must be 8-20 characters long, contain letters and numbers,
                            and must not contain spaces, special characters, or emoji.</small>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" name="address" aria-describedby="addressHelpBlock" class="form-control">
                        <small id="addressHelpBlock" class="form-text text-muted">Please enter the full address. The address may contain the following parts:
                            country, city, street, number, neighborhood, block, staircase, floor, etc.</small>
                    </div>
                </div>
                <div class="form-group">
                    <label for="date" class="col-sm-4 col-form-label">Enter your age:</label>
                    <div class="col-sm-10">
                        <input name="date" type="date" aria-describedby="dateHelpBlock" class="form-control" required>
                        <small id="dateHelpBlock" class="form-text text-muted">You need to be over 18 to be able to create an account!</small>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="submit" value="Register" class="btn btn-dark">
                        <input type="reset" value="Clean the fields" class="btn btn-info">
                    </div>
                </div>
            </div>
        </form>
    </main>
    <!-- The footer of the page -->
    <footer class="text-center">
        <p>&copy; 2020 Norocel Petru Bogdan
        <p>
    </footer>
</body>
</html>
