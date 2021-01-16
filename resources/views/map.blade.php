@extends("layout")

@section("content")
    <h3>Googe Maps</h3>
    <!--The div element for the map -->
    <div id="map"></div>
    <!--Address form -->
    @auth
        <form id="locationForm">
            <input type="text" id="locationName">
            <input type="submit">
        </form>
        <!--Some response dates-->
        <div id="formatedAddress"></div>
        <div id="position"></div>
        <!--Add you post-->
        <a class="btn btn-primary" href="post/create">Create a new post!</a>
        <!-- Show all user posts -->
        <ul class="list-group">
            @foreach($posts as $post)
                <li class="list-group-item col-4 p-1">
                    <h6 class="display-6">{{Auth::user()->email}}</h6>
                    <h6 class="display-6">Created at : {{$post->created_at}}</h6>
                </li>
                <li class="list-group-item col-4">{{$post->id}}</li>
                <li class="list-group-item col-4">{{$post->contravention_name}}</li>
                <li class="list-group-item col-4">{{$post->crime_name}}</li>
                <li class="list-group-item col-4 mb-4 p-1">
                    <div class="container">
                        <div class="row">
                            <!-- Edit -->
                            <a href="/post/{{$post->id}}/edit" class="col-3 btn btn-info list-group-item-action">Edit</a>
                            <!-- Delete -->
                            <div class="col-3 btn btn-warning list-group-item-action">
                                <form action="/post/{{$post->id}}" method="POST" class="form">
                                    {{ csrf_field() }}
                                    @method('DELETE')
                                    <input class="btn" type="submit" value="Delete">
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    @endauth
@endsection
