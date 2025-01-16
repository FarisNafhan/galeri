@extends('layouts.app')

@section('content')
<div>
    <form action="{{ route('log_in') }}" method="post">
        @csrf
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="email" autocomplete="off">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="password" autocomplete="off">
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