@extends("layout\app")



@section("title", $comic["title"])

@section("content")
    <div class="id_comic container">

        <img src="{{ $comic['thumb'] }}" alt="">
                    
        <div class="details">
            <h4>{{ $comic['title'] }}</h4>
            <p> <strong>Series:</strong> {{ $comic['series'] }}</p>
            <p> <strong>Type:</strong> {{ $comic['type'] }} </p>
            <p> <strong>Sale Date:</strong> {{ $comic['sale_date'] }} </p>
            <p> <strong>Price:</strong> {{ $comic['price'] }} </p>
        </div>
        
        
        <div class="description">
            <h4>Description:</h4>
            <p>{{ $comic['description'] }}</p>
        </div>
        
        <button><a href="#">Buy It</a></button>
        <button><a href="{{route('comics')}}">View Gallery</a></button>

        <div class="ad">
            <h4>Advertisment</h4>
            <img src="{{asset('img/adv.jpg')}}" alt="">
        </div>
                    
    </div>
@endsection