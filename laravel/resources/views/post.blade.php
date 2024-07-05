@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/post">
                @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                <input type="hidden" name="category" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="cari" value="{{ request('cari') }}">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($post->count())
    <div class="card mb-3">
        <img src="https://images.unsplash.com/photo-1461988320302-91bde64fc8e4?ixid=2yJhcHBfaWQiOjEyMDd9&w=1500&dpr=2" width="1200" height="400" class="card-img-top" alt="{{ $post[0]->category->name }}">
        <div class="card-body text-center">
            <h3 class="card-title"><a href="/post/{{ $post[0]->slug }}" class="text-decoration-none text-dark">{{ $post[0]->title }}</a></h3>

            <p>
                <small class="text-muted">
                    By. <a href="/post?author={{ $post[0]->author->username }}" class="text-decoration-none">{{ $post[0]->author->name }}</a> in <a href="/post?category={{ $post[0]->category->slug }}" class="text-decoration-none">{{ $post[0]->category->name }}</a> {{ $post[0]->created_at->diffForHumans() }}
                </small>
            <p>

            <p class="card-text">{{ $post[0] ->excerpt}}.</p>

            <a href="/post/{{ $post[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>

        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($post->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.2)"><a href="/post?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                    <img src="https://images.unsplash.com/photo-1461988320302-91bde64fc8e4?ixid=2yJhcHBfaWQiOjEyMDd9&w=1500&dpr=2" class="card-img-top" alt="{{ $post->category->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p>
                            <small class="text-muted">
                                By. <a href="/post?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                            </small>
                        <p>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    @else
    <p class="text-center fs-4">Postingan Masih Kosong.</p>
    @endif

@endsection