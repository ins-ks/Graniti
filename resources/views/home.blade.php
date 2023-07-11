@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Welcome to the Blog</h1>
    <p>This is the home page of the blog.</p>
    <div class="row my-5">
        <div class="col-md-6">
            <img src="{{ asset('images/d.jpg') }}" alt="Logo" width="100" height="100" class="d-inline-block align-top mr-2">
        </div>
        <div class="col-md-6">
            <h2>About Us</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto laborum perspiciatis expedita voluptatem repudiandae consequuntur...</p>
        </div>
    </div>
    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-6">
                <div class="card mb-4">
                    @if ($post->image_path)
                        <div style="width: 100%; height: 400px; overflow: hidden;">
                            <img src="{{ asset('images/' . $post->image_path) }}" style="width: 100%; height: 100%;" alt="Post Image">
                        </div>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->body }}</p>
                        <p class="card-text">Author: {{ $post->user->name }}</p>
                        <p class="card-text">Category: {{ $post->category->name }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
