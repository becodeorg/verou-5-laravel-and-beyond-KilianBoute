@extends('layout')

@section('title')
    HOME
@endsection

@section('content')
    @guest
        <h1>Home page</h1>
    @endguest
    @auth
        <p>Welcome, {{ auth()->user()->name }}</p>

        {{ count(auth()->user()->favorites()) > 0? 'Your favorites: ': 'No favorites yet.' }}
        <ul>
            @foreach (auth()->user()->favorites() as $favorite)
                <li> <a href="{{ route('albums-show', ['id' => $favorite->album->id]) }}">
                        {{ $favorite->album->name }} </a> </li>
            @endforeach
            <a href="{{ route('albums-index') }}">Add more</a>
        @endauth
    @endsection
