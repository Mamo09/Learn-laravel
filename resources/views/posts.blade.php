
@extends('layouts.main')

    @section('container')
    <h1 class="mb-5">Halaman Blog Post</h1>
        @foreach ($posts as $post)
        <article class="container mb-5">
            <h2>
                <a href="/posts/{{ $post->slug}}">{{ $post->judul }}</a>
            </h2>
            <p class="fw-bold">{{ $post->nama }}</p>
            <p>{{ $post->excerpt }}</p>
        </article> 

        
        @endforeach
    @endsection
