@extends('layouts.app')

@section('title', $post->title)

@section('content')
<div class="card mb-4 shadow-sm">
    <div class="card-body">
        <h2 class="card-title">{{ $post->title }}</h2>
        <p class="card-text">{{ $post->content }}</p>
        <div class="mt-3">
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <a href="{{ route('posts.index') }}" class="btn btn-sm btn-secondary">Back</a>
        </div>
    </div>
</div>
@endsection
