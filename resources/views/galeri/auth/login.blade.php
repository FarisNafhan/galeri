@extends('layouts.app')

@section('title', 'login')
@section('content')
<div>
    <form action="{{ route('home') }}" method="post">
        @csrf
        <div>
            <input type="email" name="email" id="" placeholder="email">
        </div>
        <div>
            <input type="password" name="password" id="" placeholder="password">
        </div>
        <div>
            <a href="{{ route('register') }}">don't have account?</a>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</div>
@endsection