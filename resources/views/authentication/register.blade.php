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
                    <label for="name" class="col-sm-2 col-form-label">*Name</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            class="form-control @error('name') bg-danger @enderror"
                            name="name" autofocus
                            value="{{old('name')}}"
                        >
                        @error("name")
                         <div class="font-weight-bold">{{$errors->first("name")}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="firstName" class="col-sm-4 col-form-label">*First Name</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            class="form-control @error('firstName') bg-danger @enderror"
                            name="firstName"
                            value="{{old('firstName')}}">
                        @error("firstName")
                        <div class="font-weight-bold">{{$errors->first("firstName")}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 col-form-label">*Email</label>
                    <div class="col-sm-10">
                        <input
                            type="email"
                            class="form-control @error('email') bg-danger @enderror"
                            name="email"
                            aria-describedby="emailHelpBlock"
                            value="{{old('email')}}">
                        <small id="emailHelpBlock" class="form-text text-muted">Please enter your email address.</small>
                        @error("email")
                        <div class="font-weight-bold">{{$errors->first("email")}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-2 col-form-label">*Password</label>
                    <div class="col-sm-10">
                        <input
                            type="password"
                            class="form-control @error('password') bg-danger @enderror"
                            name="password"
                            aria-describedby="passwordHelpBlock"
                            value="{{old('password')}}">
                        <small id="passwordHelpBlock" class="form-text text-muted">Your password must be 8-20 characters long, contain letters and numbers,
                            and must not contain spaces, special characters, or emoji.</small>
                        @error("password")
                        <div class="font-weight-bold">{{$errors->first("password")}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-2 col-form-label">*Address</label>
                    <div class="col-sm-10">
                        <input type="text"
                               name="address"
                               aria-describedby="addressHelpBlock"
                               class="form-control @error('address') bg-danger @enderror"
                               value="{{old('address')}}">
                        <small id="addressHelpBlock" class="form-text text-muted">Please enter the full address. The address may contain the following parts:
                            country, city, street, number, neighborhood, block, staircase, floor, etc.</small>
                        @error("address")
                        <div class="font-weight-bold">{{$errors->first("address")}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="date" class="col-sm-5 col-form-label">*Enter your birthday:</label>
                    <div class="col-sm-10">
                        <input
                            name="birthday"
                            type="date"
                            aria-describedby="dateHelpBlock"
                            class="form-control @error('birthday') bg-danger @enderror"
                            value="{{old('birthday')}}">
                        <small id="dateHelpBlock" class="form-text text-muted">You need to be over 18 to be able to create an account!</small>
                        @error("birthday")
                        <div class="font-weight-bold">{{$errors->first("birthday")}}</div>
                        @enderror
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
