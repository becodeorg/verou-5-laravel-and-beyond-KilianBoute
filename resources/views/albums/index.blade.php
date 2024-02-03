@extends('layout')

@section('title')
    albums - index
@endsection

@section('content')
    <h2>Albums</h2>
    <ul>
        @foreach ($albums as $album)
            <li>
                <h3><a href="{{ route('albums-show', ['id' => $album->id]) }}">{{ $album->name }}</a></h3>
                <h4><a
                        href="{{ route('artists-show', ['id' => $album->artist->id]) }}By: {{ $album->artist->name }}</a></h4>
                <p>*{{ $album->favorite_count() }}*</p>
                <p>{{ $album->description }} </p>
                <img src="{{ $album->image }}">
            </li>
        @endforeach
    </ul>
@endsection
