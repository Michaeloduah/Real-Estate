@extends('layouts.homepage')

@section('content')
    <form class="login-form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf
        
        <label class="login-label" for="fullname">Full Name:</label><br>
        <input name="fullname" class="login-input" id="fullname" type="text" required><br>

        <label class="login-label" for="username">Username:</label><br>
        <input name="username" class="login-input" id="username" type="text" required><br>

        <label class="login-label" for="email">Email Address:</label><br>
        <input name="email" class="login-input" id="email" type="email" required><br>

        <label class="login-label" for="phone">Phone Number:</label><br>
        <input name="phone" class="login-input" id="phone" type="number" required><br>

        <label class="login-label" for="address">Address:</label><br>
        <input name="address" class="login-input" id="address" type="text" required><br>

        <label class="login-label" for="password">Password:</label><br>
        <input name="password" class="login-input" id="password" type="password" required><br>

        <label class="login-label" for="confirm_password">Confirm Password:</label><br>
        <input name="confirm_password" class="login-input" id="confirm_password" type="password" required><br>

        <label class="login-label" for="image">Image:</label><br>
        <input name="image" class="login-input" id="image" type="file"><br>

        <label class="login-label" for="account_type">Account Type:</label><br>
        <select name="account_type" class="login-input" id="account_type" required>
            <option value="">Select Your Account Type</option>
            <option value="Client">Client Account</option>
            <option value="Agent">Agent Account</option>
        </select>

        <button class="header-top-btn" type="submit">Register</button>
    </form>
@endsection