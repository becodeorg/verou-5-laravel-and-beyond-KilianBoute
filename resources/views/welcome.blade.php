@extends('layout')

@section('title')
    HOME
@endsection

@section('content')
    <h1>Home page</h1>
    @auth
        <p>Welcome, {{ auth()->user()->name }}</p>
    @endauth
@endsection
