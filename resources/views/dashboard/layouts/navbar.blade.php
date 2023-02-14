<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark shadow-lg">
    <div class="container">
        <a class="me-3" href="/"><img style="width: 100%; max-width: 40px; height: auto;" src="/img/Learn2Play_Logo_1.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('posts') ? 'active' : '' }}" href="/posts">Posts</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Games
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            @foreach ($categories->sortBy('name') as $category)
                                <a class="dropdown-item" href="/posts?category={{ $category->slug }}">{{ $category->name }}</a>
                            @endforeach
                            <li><hr class="dropdown-divider" style="border-color: #f8f9fa;"></li>
                            <a class="text-center dropdown-item" href="/games">More games</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ auth()->user()->username }}
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/dashboard/posts/create"><i class="bi bi-file-post"></i> Create Post</a>
                        </li>
                        @can('admin')
                            <li><hr class="dropdown-divider" style="border-color: #f8f9fa;"></li>
                            <li>
                                <a class="dropdown-item" href="/dashboard/categories"><i class="bi bi-controller"></i> Manage Game</a>
                            </li>
                        @endcan
                        <li><hr class="dropdown-divider" style="border-color: #f8f9fa;"></li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>