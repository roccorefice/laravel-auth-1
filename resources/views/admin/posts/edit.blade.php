@extends('layouts.dashboard')

@section('title')
Admin Edit Post
@endsection

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Edit: {{$post->title}}</h1>
    </div>
    
    @include('partials.errors')

    <form action="{{ route('admin.posts.update', ['post'=> $post->slug]) }}" method="post">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Title" required value="{{ $post->title }}">
        </div>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" name="body" id="body" rows="3" required>{{ $post->body }}</textarea>
        </div>
        @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-primary">Save</button>
    </form>

    

@endsection