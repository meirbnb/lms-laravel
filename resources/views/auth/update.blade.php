@extends('auth.layout')

@section('image', 'atoms')

@section('content')
    <form action="">
        @csrf
        <h2>Enter new password</h2>
        <div class="credentials">
            <p><div class="password-icon icon"></div><input type="password" name="new-password" placeholder='Enter password'></p>
            <p><div class="password-icon icon"></div><input type="password" name="new-password-confirmation" placeholder='Enter password again'></p>
        </div>
        <p><button type="submit">Save Password</button></p>
    </form>
@endsection