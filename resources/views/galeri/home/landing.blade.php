@extends('layouts.app')

@section('title', 'login')
@section('content')
<div>
    <div>
        <a href="{{ route('login') }}"><button>Login</button></a>
    </div>
    <div>
        <a href="{{ route('register') }}"><button>register</button></a>
    </div>
</div>

@endsection