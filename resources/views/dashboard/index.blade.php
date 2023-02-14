@extends('dashboard.layouts.main')
@section('content')
<div class="d-flex my-4">
  <div class="text-light">
    <table>
      <tbody>
        <tr>
          <td class="align-middle">
            <h1>{{ auth()->user()->name }}</h1>
            <h5>
              {{ auth()->user()->username }} · Created {{ auth()->user()->created_at->diffInDays() }}
              @if (auth()->user()->created_at->diffInDays() <= 1) day @else days @endif
              ago on {{ auth()->user()->created_at->format('d M Y') }}
            </h5>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<div class="border-top mb-5">
  @if ($posts->count())
    <div class="table-responsive mt-4 col-lg-10">
      <table class="table table-sm text-light">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Game Title</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td>
                        <a href="/dashboard/posts/{{ $post->slug }}" class="badge"><span data-feather="eye"></span></a>
                        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge"><span data-feather="edit"></span></a>
                        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
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
  @else
      <p class="text-center text-light fs-4 mt-4">You haven't posted anything yet.</p>
      <div class="d-flex justify-content-center"><a class="button text-decoration-none" href="/dashboard/posts/create">Create your own now!</a></div>
  @endif
</div>
@endsection