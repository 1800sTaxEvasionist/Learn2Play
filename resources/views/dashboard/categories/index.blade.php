@extends('dashboard.layouts.main')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3 border-bottom">
    <h1 class="h2 text-light">Game Categories</h1>
</div>
@if (session()->has('success'))
    <div class="alert alert-success col-lg-6" role="alert">
        {{ session('success') }}
    </div>
@endif
<div class="table-responsive col-lg-6 mb-5">
    <div class="my-2">
        <a href="/dashboard/categories/create" class="button text-decoration-none">Create new category</a>
    </div>
    <table class="table table-sm text-light mt-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Game Title</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge"><span data-feather="edit"></span></a>
                        <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="trash-2"></span></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection