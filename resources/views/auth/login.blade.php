@extends('auth.layout')

@section('image', 'rocket')

@section('content')
    <form action="">
        @csrf
        <h2>Hi! Let’s sign in</h2>
        <div class="credentials">
            <p><div class="login-icon icon"></div><input type="text" name="username-email" placeholder='Enter username or email'></p>
            <p><div class="password-icon icon"></div><input type="password" name="password" placeholder='Enter password'></p>
            <div class="links">
                <a href="{{ route('home.signup') }}">First time here?</a>
                <a href="{{ route('home.restore') }}">Forgot Password?</a>
            </div>
        </div>
        <p><button type="submit">Sign In</button></p>
    </form>
@endsection