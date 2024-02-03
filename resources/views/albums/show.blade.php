@extends('layout')

@section('title')
    albums - {{ $album->name }}
@endsection

@section('content')
    <h2>{{ $album->name }}</h2>
    <h3><a href={{ route('artists-show', ['id' => $album->artist_id]) }}>
            By: {{ $artist->name }} </a> </h3>
    <p>*{{ $album->favorite_count() }}*</p>
    <p>{{ $album->description }} </p>
    <img src="{{ $album->image }}">
@endsection
