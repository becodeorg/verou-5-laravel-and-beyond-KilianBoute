@extends('layout')

@section('title')
    artists - index
@endsection

@section('content')
    <h2>Artists</h2>
    <ul>
        @foreach ($artists as $artist)
            <li>
                <h3><a href={{ route('artists-show', ['id' => $artist->id]) }}>{{ $artist->name }}</a></h3>
            </li>
        @endforeach
    </ul>
@endsection
