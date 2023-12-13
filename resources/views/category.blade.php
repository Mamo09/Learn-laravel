
@extends('layouts.main')

    @section('container')
        <h1 class="mb-5">Post Category : {{ $category }}</h1>
        @foreach ($posts as $post)
        <article class="container mb-5">
            <h2>
                <a href="/posts/{{ $post->slug}}">{{ $post->judul }}</a>
            </h2>
            <p class="fw-bold">{{ $post->nama }}</p>
            <p>{{ $post->excerpt }}</p> 
        </article> 
        @endforeach
        <a class="mb-5" href="/categories">Lihat semua Category</a>
    @endsection 