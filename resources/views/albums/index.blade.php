@extends('layout')

@section('title')
    albums - index
@endsection

@section('content')
    <h2>Albums</h2>
    <ul>
        @foreach ($albums as $album)
            <li>
                <h3>{{ $album->name }}</h3>
                <h4>By: {{ $album->artist->name }}</h4>
                <p>{{ $album->description }} </p>
                <img src="{{ $album->image }}">
            </li>
        @endforeach
    </ul>
@endsection
