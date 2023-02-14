@extends('layouts.auth')
@section('content')
<div class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="card bg-dark" style="width: 80%; max-width: 900px; height: auto">
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-lg-8 py-3">
                    <main class="form-registration w-100 m-auto">
                        <h1 class="mb-5 text-center">
                            <a href="/"><img style="width: 100%; max-width: 100px; height: auto;" src="/img/Learn2Play_Logo_2.png" alt=""></a>
                        </h1>
                        <h1 class="h3 mb-3 fw-normal text-center text-light">Register</h1>
                        <form action="/register" method="post" class="text-dark">
                            @csrf
                            <div class="form-floating">
                                <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                                <label for="name">Name</label>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                                <label for="username">Username</label>
                                @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                                <label for="email">Email address</label>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                                <label for="password">Password</label>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button class="w-100 button border-0 mt-3" type="submit">Register</button>
                            <small class="d-block text-center text-light mt-3">Alredy registered? <a href="/login">Login here!</a></small>
                        </form>
                    </main>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection