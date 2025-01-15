@extends('layouts.app')

@section('title', 'register')
@section('content')
<div>
    <form action="{{ route('register) }}" method="post">
        <div>
            <input type="username" name="username" id="" placeholder="username">
        </div>
        <div>
            <input type="email" name="email" id="" placeholder="email">
        </div>
        <div>
            <input type="password" name="password" id="" placeholder="password">
        </div>
        <div>
            <input type="telepon" name="telepon" id="" placeholder="telepon">
        </div>
        <div>
            <input type="alamat" name="alamat" id="" placeholder="alamat">
        </div>
        <div>
            <button type="submit">register</button>
        </div>
    </form>

</div>
@endsection