@extends('layouts.app')
@section('content')
<div class="auth-page">
    <h1>Create Account</h1>
    <form method="POST" action="/register">
        @csrf 
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>

        <button type="submit">
            Register
        </button>
      </form>
    </div>
@endsection



