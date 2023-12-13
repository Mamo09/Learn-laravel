@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->judul }}</h2>
        <p>By. {{ $post->nama }} in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        <p>{!! $post->isi !!}</p>
    </article>
    <a href="/blog"> back to posts</a>
@endsection