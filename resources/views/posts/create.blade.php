@extends('posts.theme')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white p-3">Create Post</div>
            <div class="card-body">

                <a href="{{ route('posts.index') }}" class="btn btn-primary mb-3">Back</a>

                <form action="{{ route('posts.store') }}" method="POST">
                    @csrf

                    <div class="mt-2">
                        <label for="title">Title:</label>
                        <input type="text" name="title" id="title" class="form-control">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-2">
                        <label for="body">Body:</label>
                        <textarea name="body" id="body" class="form-control"></textarea>
                        @error('body')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-2">
                        <button class="btn btn-success">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection