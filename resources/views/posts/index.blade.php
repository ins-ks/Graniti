@extends('dashboard')

@section('header')
    Blog Posts
@endsection

@section('content')
    <div class="container">
        <h1>Blog Posts</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create New Post</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Image</th> 
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>
                            @if ($post->image_path)
                                <img src="{{ asset('images/' . $post->image_path) }}" alt="Post Image" width="50" height="50">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('posts.edit', ['post' => $post]) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('posts.destroy', ['post' => $post]) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
