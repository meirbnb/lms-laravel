@extends('auth.layout')

@section('image', 'rocket')

@section('content')
    <form action="">
        @csrf
        <h2>Hi! Let’s sign up</h2>
        <div class="credentials">
            <p><div class="login-icon icon"></div><input type="text" name="username" placeholder='Enter username'></p>
            <p><div class="email-icon icon"></div><input type="text" name="email" placeholder='Enter email'></p>
            <p><div class="password-icon icon"></div><input type="password" name="password" placeholder='Enter password'></p>
        </div>
        <p><button>Sign Up</button></p>
    </form>
@endsection