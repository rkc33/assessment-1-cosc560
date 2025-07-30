@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
    <h2 class="mb-4">Edit Post</h2>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="title">Title</label>
        <input type="text" name="title" value="{{ $post->title }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="content">Content</label>
        <textarea name="content" class="form-control" rows="5" required>{{ $post->content }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Update Post</button>
</form>
@endsection
