@extends('layout.app')

@section('title', 'Comics')

@section('content')
    <div class="container">
            @foreach ($comics_book as $book)
                <div class="card">
                    <img src="{{ $book['thumb'] }}" alt="">
                    <div class="details">
                        <h4>{{ $book['title'] }}</h4>
                        <p> <strong>Series:</strong> {{ $book['series'] }}</p>
                        <p> <strong>Type:</strong> {{ $book['type'] }} </p>
                        <p> <strong>Sale Date:</strong> {{ $book['sale_date'] }} </p>
                        <p> <strong>Price:</strong> {{ $book['price'] }} </p>
                    </div>
                    <!-- <div class="description">
                        <h4>Description</h4>
                        <p>{{ $book['description'] }}</p>


                    </div> -->
                </div>
            @endforeach
    </div>

@endsection
