@extends('layout.app')

@section('title', 'Comics')

@section('content')
    <div class="container">
            @foreach ($comics as $comic)
            
            <a href="" class="card">
                
                    <img src="{{ $comic['thumb'] }}" alt="">
                
                    <div class="details">
                        <h4>{{ $comic['title'] }}</h4>
                        <p> <strong>Series:</strong> {{ $comic['series'] }}</p>
                        <p> <strong>Type:</strong> {{ $comic['type'] }} </p>
                        <p> <strong>Sale Date:</strong> {{ $comic['sale_date'] }} </p>
                        <p> <strong>Price:</strong> {{ $comic['price'] }} </p>
                    </div>
                    <!-- <div class="description">
                        <h4>Description</h4>
                        <p>{{ $comic['description'] }}</p>

                    </div> -->
                </a>
            @endforeach
            <button class="button">Load More</button>
    </div>


@endsection
