@extends("layout")

@section("content")
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
                    <small id="passwordHelpBlock" class="form-text text-muted">Your password must be 8-20 characters
                        long, contain letters and numbers,
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
                    <small id="addressHelpBlock" class="form-text text-muted">Please enter the full address. The address
                        may contain the following parts:
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
                    <small id="dateHelpBlock" class="form-text text-muted">You need to be over 18 to be able to create
                        an account!</small>
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
@endsection
