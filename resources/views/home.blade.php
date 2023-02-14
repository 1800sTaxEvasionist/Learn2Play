@extends('dashboard.layouts.main')
@section('home')
@auth
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-7 col-md-8 mx-auto">
                <h1 class="fw-light text-light">Good to see you again, {{ auth()->user()->username }}</h1>
                <p class="lead text-muted mb-4">What a fine day is it today! Welcome back to Learn2Play where we post guides and walkthrough of a game from any platform. So, What brings you here today?</p>
                <p>
                    <a href="/dashboard" class="button text-decoration-none">Go to your dashboard</a>
                    <a href="/posts" class="button text-decoration-none">Search all posts</a>
                </p>
            </div>
        </div>
    </section>
@else
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light text-light">Welcome to Learn2Play!</h1>
                <p class="lead text-muted mb-4">Where we post guides and walkthrough of a game from any platform. Take your time to scroll through countless guides which may help you up your game!</p>
                <p>
                    <a href="/login" class="button text-decoration-none">Login</a>
                    <a href="/register" class="button text-decoration-none">Register</a>
                </p>
            </div>
        </div>
    </section>
@endauth
<div class="album py-5 mx-0 border-top">
    @if ($posts->count())
        <div class="container">
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
                                @else
                                    <img src="{{ asset('storage/' . $post->category->image) }}" class="card-img-top shadow" alt="{{ $post->category->name }}">
                                @endif
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $post->title }}</h5>
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
        </div>
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif
    <div class="d-flex justify-content-center mt-4">
        <a class="button text-decoration-none" href="/posts">View More</a>
    </div>
</div>
@endsection