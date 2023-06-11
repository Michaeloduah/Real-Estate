@extends('layouts.homepage')

@section('content')
    <form class="login-form" method="POST" action="" enctype="multipart/form-data">
        @csrf
        <label class="login-label" for="email">Email:</label><br>
        <input name="email" class="login-input" id="email" type="email" required><br>

        <label class="login-label" for="password">Password:</label><br>
        <input name="password" class="login-input" id="password" type="password" required><br>

        <button class="btn" type="submit">Login</button>
    </form>
@endsection