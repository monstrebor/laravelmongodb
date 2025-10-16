@extends('posts.theme')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white p-3">Edit Post</div>
            <div class="card-body">

                <a href="{{ route('posts.index') }}" class="btn btn-primary mb-3">Back</a>

                <form action="{{ route('posts.update', $post->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mt-2">
                        <label for="title">Title:</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-2">
                        <label for="body">Body:</label>
                        <textarea name="body" id="body" class="form-control">{{ $post->body }}</textarea>
                        @error('body')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-2">
                        <button class="btn btn-success">update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection