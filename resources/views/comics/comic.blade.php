@extends("layout\app")

@php
    $uri = $_SERVER["REQUEST_URI"];
    $id = $uri[strlen($uri) - 1];
    $comic = $comics[$id];
@endphp

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
            <h4>Description</h4>
            <p>{{ $comic['description'] }}</p>
        </div>
                    
    </div>
@endsection