@extends("layout")

@section("content")
        <h5 class="text-center">Sign In</h5>
        <form method="post" action="/login">
            {{ csrf_field() }}
            <div class="col-5 offset-4">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control @error('email') bg-danger @enderror" type="email" name="email"
                           aria-describedby="emailHelpBlock">
                    @error("email")
                    <div class="font-weight-bold">{{$errors->first("email")}}</div>
                    @enderror
                    <small id="emailHelpBlock">Please enter your email address. If you do not have an account, you can
                        create one <a href="http://localhost:8000/user/register">here</a>.</small>
                </div>
                <br>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control @error('password') bg-danger @enderror" type="password" name="password"
                           aria-describedby="passwordHelpBlock">
                    <small id="passwordHelpBlock">Your password must be 8-20 characters long, contain letters and
                        numbers, and must not contain spaces, special characters, or emoji.</small>
                    @error("password")
                    <div class="font-weight-bold">{{$errors->first("password")}}</div>
                    @enderror
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe" checked>
                    <label for="rememberMe" class="form-check-label">Stay logged in!</label>
                </div>
                <input class="btn btn-dark" type="submit" value="Log In">
            </div>
        </form>
@endsection
