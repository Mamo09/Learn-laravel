@extends('layouts.main')

@section('container')
    <h1>Halaman about</h1>
    <h2>{{ $nama }}</h2>
    <h5>{{ $umur }}</h5>
    <p>{{ $alamat }}</p>
    <img src="img/{{ $gambar }}" alt="{{ $nama }}" width="200" class="img-thumbnail rounded-circle">
@endsection

