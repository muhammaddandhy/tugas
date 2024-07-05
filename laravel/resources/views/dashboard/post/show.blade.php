@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <a href="/dashboard/post" class="btn btn-success"> <span data-feather="arrow-left"></span> Kembali ke Dashboard</a>
            <a href="" class="btn btn-warnig"> <span data-feather="edit"></span> Edit</a>
            <a href="" class="btn btn-danger"> <span data-feather="X-circle"></span> Delete</a>
            <img src="https://images.unsplash.com/photo-1461988320302-91bde64fc8e4?ixid=2yJhcHBfaWQiOjEyMDd9&w=1500&dpr=2" height="100" width="1000" alt="{{ $post->category->name }}" class="img-fluid mt-3">

            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
            <a href="/post" class="d-block mt-3">Kembali</a>
        </div>
    </div>
</div>
@endsection