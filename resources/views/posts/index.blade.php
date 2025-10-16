@extends('posts.theme')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white p-3">Laravel MongoDB App</div>
            <div class="card-body">

                @session('success')
                    <div class="alert alert-success">
                        {{ $value }}
                    </div>
                @endsession

                <a href="{{ route('posts.create') }}" class="btn btn-success mb-3">Create Post</a>

                <table class="table table-bordered table-stripped">
                    <thead>
                        <tr>
                            <th width="300px">ID</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th width="250px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->body }}</td>
                                <td>
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-sm">Edit</a>

                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection