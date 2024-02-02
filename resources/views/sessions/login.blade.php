@extends('layout')

@section('title')
    Register
@endsection

@section('content')
    <form action="{{ route('login') }}" method="post">
        @csrf

        <div class="container">

            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Name" name="name" id="name" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="password" required>

            <button type="submit" class="loginbtn">Log in</button>

            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
    </form>
@endsection
