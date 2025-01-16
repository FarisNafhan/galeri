@extends('layouts.app')

@section('content')
    <div>
        <form action="{{ route('addAlbum') }}" method="post">
            @csrf
            <div>
                <label for="nama">Nama album</label>
                <input type="text" name="nama" id="nama">
            </div>
            <div>
                <label for="deskripsi">Deskripsi</label>
                <input type="text" name="deskripsi" id="deskripsi">
            </div>
            <div>
                <button type="submit">Add</button>
            </div>
        </form>
    </div>
@endsection()
