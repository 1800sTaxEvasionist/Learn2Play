@extends('dashboard.layouts.main')
@section('content')
<h1 class="mb-3 text-center text-light pt-5">{{ $title }}</h1>
<div class="container">
    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="shadow-lg input-group mb-3">
                    <input type="text" class="form-control bg-light" placeholder="Search" name="search" value="{{ request('search') }}">
                    <button class="button text-decoration-none border-0" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div class="container">
        @if ($posts->count())
            <div class="row">
                @foreach ($posts as $post)   
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 bg-dark text-light">
                            <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)">
                                <a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a>
                            </div>
                            <div class="shadow-lg" style="max-height: 200px; overflow: hidden;">
                                @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid shadow">
                                @elseif ($post->category->image)
                                    <img src="{{ asset('storage/' . $post->category->image) }}" class="card-img-top shadow" alt="{{ $post->category->name }}">
                                @else
                                    <img src="/img/alt_game_img.jpg" class="card-img-top shadow" alt="{{ $post->category->name }}">
                                @endif
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title ">{{ $post->title }}</h5>
                                <p>
                                    <small>
                                        By
                                        <strong>
                                            <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->username }}</a>
                                        </strong>
                                        · {{ $post->created_at->diffForHumans() }}
                                    </small>
                                </p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <div class="mt-auto">
                                    <a href="/posts/{{ $post->slug }}" class="button text-decoration-none">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center text-light fs-4">No post found.</p>
        @endif
    </div>
    <div class="container d-flex justify-content-end py-3">
        {{ $posts->links() }}
    </div>
</div>
@endsection