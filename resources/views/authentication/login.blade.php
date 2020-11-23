<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>The Cartel</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
              integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!-- Style -->
        <style>
            body {
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
    <!-- Main content -->
        <main class="container">
            <section>
                <h5 class="text-center">Sign In</h5>
                <form method="post" action="/login">
                    {{ csrf_field() }}
                    <div class="col-5 offset-4">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" type="email" name="email" aria-describedby="emailHelpBlock">
                            <small id="emailHelpBlock">Please enter your email address. If you do not have an account, you can create one <a href="http://localhost:8000/user/register">here</a>.</small>
                          </div>
                        <br>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" name="password" aria-describedby="passwordHelpBlock">
                            <small id="passwordHelpBlock">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</small>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="checkboxLogIn" checked disabled>
                            <label for="checkboxLogIn" class="form-check-label">Stay logged in!</label>
                        </div>
                        <input class="btn btn-dark" type="submit" value="Log In">
                    </div>
                </form>
            </section>
        </main>

        <!-- The footer of the page -->
        <footer class="text-center fixed-bottom">
            <p>&copy; 2020 Norocel Petru Bogdan<p>
        </footer>
    </body>
</html>
