@extends('layouts.app')

@section('content')
<div>
    <div>
        <form action="{{ route('addImage') }}" method="post">
            @csrf
            <div>
                <label for="judul">Judul:</label>
                <input type="text" name="judul" id="judul">
            </div>
            <div>
                <label for="deskripsi">Deskripsi</label>
                <input type="text" name="deskripsi" id="deskripsi">
            </div>
            <div>
                <input type="file" name="foto" accept="image/">
            </div>
            <div>
                <label for="album">Pilih Album:</label>
                <select name="" id="">
                    <option value=""></option>
                </select>
                <a href="{{ route('addAlbum') }}">Buat Album</a>
            </div>
            <div>
                <button type="submit">Add</button>
            </div>
        </form>
    </div>
    <div>
        <table class="tabel-foto">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Judul</th>
                    <th>Daskripsi</th>
                    <th>Album</th>
                    <th>Tanggal</th>
                    <th>-</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection