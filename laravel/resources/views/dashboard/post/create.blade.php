@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Buat postingan baru</h1>
</div>
<div class="col-lg-8">
    <form method="post" action="/dashboard/post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" name="category">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <input type="paragraph" class="form-control" id="body" name="body">
        </div>
        <button type="submit" class="btn btn-primary">Create Dokumen</button>
    </form>
</div>

<script>
    const title = document.querySelector('#title')
    const slug = document.querySelector('#slug')

    title.addEventListener('change', function() {
        fetch('/dashboard/post/checkSlug?title=' + title.value)
            .then(Response => response.json)
            .then(data => slug.value = data.slug)
    });
</script>
@endsection