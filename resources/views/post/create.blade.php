@extends("layout")

@section("content")
    <h3>Googe Maps</h3>
    <!--The div element for the map -->
    <div id="map"></div>
    <!--Address form -->
    <form id="locationForm">
        <input type="text" id="locationName" aria-describedby="inputDescription" value="{{old('locationName')}}">
        <small id="inputDescription">Search for a city!</small>
        <br>
        <input type="submit" value="Search">
    </form>

    <!-- The main content of the page -->
    <main class="container">
        <form method="post" action="/post">
            {{ csrf_field() }}
            <div class="col-5 offset-4">
                <div class="form-group">
                    <label for="name" class="col-sm-2 col-form-label">City:</label>
                    <div class="col-sm-10">
                        <input
                            id="city"
                            type="text"
                            class="form-control"
                            name="city" autofocus
                            value="{{old('city')}}"
                        >
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-2 col-form-label">Contravention:</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            class="form-control"
                            name="contravention" autofocus
                            value="{{old('contravention')}}"
                        >
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-2 col-form-label">Misdemeanour:</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            class="form-control"
                            name="misdemeanour" autofocus
                            value="{{old('misdemeanour')}}"
                        >
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="submit" value="Post" class="btn btn-dark">
                        <input type="reset" value="Clean the fields" class="btn btn-info">
                    </div>
                </div>
            </div>
        </form>
    </main>
@endsection
