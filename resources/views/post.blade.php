@extends('dashboard.layouts.main')
@section('content')
<div class="row justify-content-center pt-4">
    <div class="col-md-11 text-light mb-5">
        <h1 class="mb-3">{{ $post->title }}</h1>
        <p>By
            <strong>
                <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->username }}</a>
            </strong>
            in
            <strong>
                <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
            </strong>
            · {{ $post->created_at->diffForHumans() }} 
        </p>
        <div class="shadow-lg">
            <div style="max-width: 500px; overflow: hidden;">
                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                @elseif ($post->category->image)
                    <img src="{{ asset('storage/' . $post->category->image) }}" class="card-img-top shadow" alt="{{ $post->category->name }}">
                @else
                    <img src="/img/alt_game_img.jpg" class="card-img-top shadow" alt="{{ $post->category->name }}">
                @endif
            </div>
        </div>
        <article class="mt-3 pb-5 fs-5">{!! $post->body !!}</article>
        <div class="album pb-5 mx-0 border-top">
            @include('comments', ['comments' => $post->comments, 'post_id' => $post->id])
        </div>
        @auth
            <h4>Leave a Comment</h4>
            <form method="post" action="{{ route('comments.store') }}">
                @csrf
                <div class="form-group">
                    <textarea class="form-control" name="body"></textarea>
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                </div>
                <div class="form-group mt-3">
                    <input type="submit" class="button border-0 align-item" value="Add Comment">
                </div>
            </form>
        @else
            <div class="d-flex justify-content-center">
                <a class="button text-decoration-none" href="/login">Login to leave a comment</a>
            </div>
        @endauth
    </div>
</div>
@endsection