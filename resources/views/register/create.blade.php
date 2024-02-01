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


            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="password" required>

            <label for="repeat_password"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="repeat_password" id="repeat_password" required>
            <hr>

            <button type="submit" class="registerbtn">Register</button>
        </div>

        <div class="container signin">
            <p>Already have an account? <a href="#">Sign in</a>.</p>
        </div>

    </form>
@endsection
