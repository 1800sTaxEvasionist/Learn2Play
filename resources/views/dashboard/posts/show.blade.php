@extends('dashboard.layouts.main')
@section('content')
<div class="container text-light">
    <div class="row my-4">
        <div class="col-lg-8">
            <h1 class="mb-4">{{ $post->title }}</h1>
            <a href="/dashboard/posts" class="button text-decoration-none"><span data-feather="arrow-left"></span> Back to all my posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="button text-decoration-none"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="button-delete border-0" onclick="return confirm('Are you sure?')"><span data-feather="trash-2"></span> Delete</button>
            </form>
            <div class="shadow-lg mt-4" style="max-width: 500px; overflow: hidden;">
                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid shadow">
                @elseif ($post->category->image)
                    <img src="{{ asset('storage/' . $post->category->image) }}" class="card-img-top shadow" alt="{{ $post->category->name }}">
                @else
                    <img src="/img/alt_game_img.jpg" class="card-img-top shadow" alt="{{ $post->category->name }}">
                @endif
            </div>
            <article class="my-3 fs-5">{!! $post->body !!}</article>
        </div>
    </div>
</div>
@endsection