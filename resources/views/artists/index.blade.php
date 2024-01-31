@extends('layout')

@section('title')
    artists - index
@endsection

@section('content')
    <h2>Artists</h2>
    <ul>
        @foreach ($artists as $artist)
            <li>
                <h3>{{ $artist->name }}</h3>
                <p>{{ $artist->description }} </p>
                <img src="{{ $artist->image }}">
            </li>
        @endforeach
    </ul>
@endsection
