@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <p>By. <a href="/post?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/post?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

            <img src="https://images.unsplash.com/photo-1461988320302-91bde64fc8e4?ixid=2yJhcHBfaWQiOjEyMDd9&w=1500&dpr=2" height="100" width="1000" alt="{{ $post->category->name }}" class="img-fluid">
            
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
            <a href="/post" class="d-block mt-3">Kembali</a>
        </div>
    </div>
</div>



@endsection