@extends('layouts.auth')
@section('content')
<div class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="card bg-dark" style="width: 80%; max-width: 900px; height: auto">
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-lg-8 py-3">
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <h1 class="mb-5 text-center">
                        <a href="/"><img style="width: 100%; max-width: 100px; height: auto;" src="/img/Learn2Play_Logo_2.png" alt=""></a>
                    </h1>
                    <main class="form-signin w-100 m-auto text-light">
                        <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
                        <form action="/login" method="post">
                            @csrf
                            <div class="form-floating text-dark">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                                <label for="email">Email address</label>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating text-dark">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                                <label for="password">Password</label>
                            </div>
                            <button class="w-100 button border-0 mt-3" type="submit">Login</button>
                            <small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now!</a></small>
                        </form>
                    </main>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection