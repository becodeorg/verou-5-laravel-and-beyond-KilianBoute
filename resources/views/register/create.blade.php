@extends('layout')

@section('title')
    Register
@endsection

@section('content')
    <form action="{{ route('register-store') }}" method="post">
        @csrf

        <div class="container">

            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Name" name="name" id="name" required>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="password" required>
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="password_confirmation"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="password_confirmation" id="password_confirmation"
                required>
            @error('password_confirmation')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <hr>

            <button type="submit" class="registerbtn">Register</button>
        </div>

        <div class="container signin">
            <p>Already have an account? <a href=" {{ route('login-show') }}">Sign in</a>.</p>
        </div>

    </form>
@endsection
