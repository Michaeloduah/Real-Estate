@extends('layouts.homepage')

@section('content')
    <form class="login-form" method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
        @csrf
        <label class="login-label" for="email">Email:</label><br>
        <input name="email" class="login-input" id="email" type="email" required><br>

        <label class="login-label" for="password">Password:</label><br>
        <input name="password" class="login-input" id="password" type="password" required><br>

        
        <button class="header-top-btn" type="submit">Login</button>
        <p class="author-name">
            <a href="{{ route('password.request') }}" style="width: fit-content">forgotten password?</a>
        </p>
        <p>Don't have an account <a class="section-subtitle" style="display: inline" href="{{ route('register') }}">create one</a></p>
    </form>
@endsection