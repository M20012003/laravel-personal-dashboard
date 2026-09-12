@extends('layouts.app')
@section('content')
<h1>Log in</h1>
<form action="/login" method="POST">
    @csrf 
    <div>
        <label>Email</label>
        <input type="email" name="email">
    </div>

    <div>
        <label>Password</label>
        <input type="password" name="password">
    </div>

    <button type="submit">
        Login 
    </button>
   </form>
@endsection


