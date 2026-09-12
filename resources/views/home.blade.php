@extends('layouts.app')
@section('content')
    <div class="hero">
        <p class="hero-lable">
            My Personal Dashbord
</p>
<h1>
    Welcome to my World 🌸
</h1>
 <p class="user-name">
    Hi Dear {{ $name }} 💞
 </p>
 <p class="country-name">
    {{ $country }} is really beautiful.
 </p>
<p class="hero-description">
    This is my personal space where I organize my goals,
    tasks, and learning journey.
</p>
@if (Auth::check())
  <p>
    You're logged in!
  </p>
  @else
  <a href="/login">
    login
  </a>
  <a href="/register">
    Register 
  </a>
  @endif
  



<a href="/tasks" class="hero-button">
    View My Tasks →
</a>
</div>
@endsection
