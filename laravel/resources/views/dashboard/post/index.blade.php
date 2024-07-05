@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dokumen ku</h1>
</div>

@if(session()->has('success'))
    <div class="alert alert-primary" role="alert">
    {{ sesion('success') }}
    </div>
@endif

<div class="table-responsive col-lg-10">
    <a href="/dashboard/post/create" class="btn btn-primary mb-3">Tambahkan Dokumen Baru</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $post->title }}</td>
              <td>{{ $post->category->iteration }}</td>
              <td>
                <a href="/dashboard/post/{{ $post->slug }}" class="btn bg-info"><span data-feather="eye"></span></a>
                <a href="" class="btn bg-warnig"><span data-feather="edit"></span></a>
                <a href="" class="btn bg-danger"><span data-feather="x-circle"></span></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

@endsection