@extends('layout')

@section('title')
    artists - {{ $artist->name }}
@endsection

@section('content')
    <h2>{{ $artist->name }}</h2>
    <p>{{ $artist->description }} </p>
    <img src="{{ $artist->image }}">
    <ul>
        @foreach ($albums as $album)
            <li> <a href="{{ route('albums-show', ['id' => $album->id]) }}">
                    {{ $album->name }} </a> </li>
        @endforeach
    </ul>
@endsection
