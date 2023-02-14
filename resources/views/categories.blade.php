@extends('dashboard.layouts.main')
@section('content')
<div class="py-5">
    <h1 class="mb-3 text-center text-light">{{ $title }}</h1>
    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/games">
                <div class="shadow-lg input-group mb-3">
                    <input type="text" class="form-control bg-light" placeholder="Search" name="search" value="{{ request('search') }}">
                    <button class="button border-0" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        @if ($categories->count())
            @foreach ($categories as $category)
                <div class="col-md-4 mb-4">
                    <a href="/posts?category={{ $category->slug }}">
                        <div class="card text-bg-dark">
                            <div style="max-height: 500px; max-width: 500px; overflow: hidden;">
                                @if ($category->image)
                                    <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" class="img-fluid">
                                @else
                                    <img src="/img/alt_game_img.jpg" class="card-img-top" alt="{{ $category->name }}">
                                @endif
                            </div>
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
                            </div>
                        </div>
                    </a> 
                </div>     
            @endforeach
        @else
            <p class="text-center text-light fs-4">No such game found.</p>
        @endif
    </div>
    <div class="container d-flex justify-content-end py-3">
        {{ $categories->links() }}
    </div>
</div>
@endsection