@extends('auth.layout')

@section('image', 'rubik')

@section('content')
    <form action="">
        @csrf
        <h2>Forgot your password?</h2>
        <div class="credentials">
            <p><div class="email-icon icon"></div><input type="email" name="username-email" placeholder='Enter username or email'></p>
        </div>
        <p><button type="submit">Submit</button></p>
    </form>
@endsection