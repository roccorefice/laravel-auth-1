@extends('layouts.dashboard')

@section('title')
Admim - Post
@endsection

@section('content')
<div class="jumbotron">
    <h1 class="display-4">{{$post->title}}</h1>
    <a class="btn btn-primary btn-lg" href="{{ route('admin.posts.edit', ['post'=> $post->slug]) }}">Edit Post</a>
</div>

<p class="lead">{{ $post->body }}</p>
@endsection