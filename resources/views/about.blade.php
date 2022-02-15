@extends('master')
@section('content')
    <div class="container my-5">
        <h1>About Page</h1>
        {{ $address }}<br>
        {{ $tel }}<br>
        {{ $email }}<br>
        {{ $success }}<br>
        {{ $error }}<br>
        <a href="{{ url('/about') }}">Home</a>
        <a href="{{ url('/admin') }}">Admin</a>
        <a href="{{ route('mem') }}">Member</a>
        <a href="{{ route('about') }}">About</a>
    </div>
@endsection