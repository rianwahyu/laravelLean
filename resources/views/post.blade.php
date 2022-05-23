@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>

        <p>By, Rian Wahyu in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {{-- <h5>{{ $post->author }}</h5> --}}
        {{-- <p>{{ $post["body"] }}</p> --}}

        {!! $post->body !!}
    </article>



    <a href="/blog">Back to Post</a>
@endsection