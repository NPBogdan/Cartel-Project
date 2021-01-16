@extends("layout")

@section("content")
    <h5 class="text-center">Edit your post:</h5>
    <form method="POST" action="/post/{{$post->id}}">
        {{ csrf_field() }}
        @method('PUT')
        <div class="col-5 offset-4">
            <div class="form-group">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Crime name</label>
                    <input type="text" value="{{$post->crime_name}}" name="crime">
                </div>
            </div>
            <div class="form-group">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Contravention name:</label>
                    <input type="text" value="{{$post->contravention_name}}" name="contravention">
                </div>
            </div>
            <div class="col-5 offset-4">
                <input class="btn btn-warning" type="submit" value="Edit">
            </div>
        </div>
    </form>
@endsection
