@extends('master')
@section('content')
    <div class="container my-5">
       
        @php
            $user = "admin";
            $user2 = "panutat";
            $arr = array("HOME","member", "about", "contact");
        @endphp
        <br>
        @if ( $user == "admin" && $user2 == "panutat")
            <h1>Admin Page</h1>
            <h1>ยินดีต้อนรับ {{ $user }}</h1>
            <a href="{{ url('/about') }}">Home</a>
            <a href="{{ url('/admin') }}">Admin</a>
            <a href="{{ route('mem') }}">Member</a>
            <a href="{{ route('about') }}">About</a>
            
            @foreach ($arr as $row)
                <li>{{ $row }}</li>
            @endforeach
        @else
            {{-- <h1>คุณไม่ใช่ Admin</h1> --}}
            <script>
                 alert('คุณไม่มีสิทธิ์หน้านี้');
                 window.location.href = '{{url("about")}}';
            </script>
        @endif

       
    </div>
@endsection