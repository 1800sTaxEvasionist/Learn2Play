@foreach ($comments as $comment)
    <div class="display-comment border-bottom pt-2">
        <small>
        <strong>
            <a href="/posts?author={{ $comment->users->username }}" class="text-decoration-none">{{ $comment->users->username }}</a>
        </strong>
        <small>
            · {{ $comment->created_at->diffForHumans() }}
        </small>
        <p>{{ $comment->body }}</p>
        </small>
    </div>
@endforeach