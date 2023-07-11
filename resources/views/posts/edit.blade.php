@extends('dashboard')

@section('header')
    Blog Posts Edit
@endsection

@section('content')
    <div class="container">
        <h1>Edit Post</h1>
        <form action="{{ route('posts.update', ['post' => $post]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" name="body" rows="3" required>{{ $post->body }}</textarea>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control" id="category" name="category_id" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id === $post->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="image">Current Image</label>
                @if ($post->image_path)
                    <div>
                        <img src="{{ asset('images/' . $post->image_path) }}" alt="Post Image" width="100">
                    </div>
                @else
                    <p>No image available.</p>
                @endif
            </div>
            <div class="form-group">
                <label for="new_image">New Image</label>
                <input type="file" class="form-control-file" id="new_image" name="new_image">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
