@extends('layouts.dashboard')

@section('title')
Admim - Posts
@endsection

@section('content')

<div class="jumbotron">
    <h1 class="display-4">All Posts</h1>
    <a class="btn btn-primary btn-lg" href="{{ route('admin.posts.create') }}">Write a post</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Slug</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td scope="row">{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->slug }}</td>
            <td class="d-flex justify-content-between">
                <a href="{{ route('admin.posts.show', ['post'=> $post->slug]) }}" class="btn btn-primary"> <i class="fas fa-eye fa-xs fa-fw"></i> </a>
                <a href="{{ route('admin.posts.edit', ['post'=> $post->slug]) }}" class="btn btn-secondary"> <i class="fas fa-pen fa-xs fa-fw"></i> </a>
                <a href="#" class="btn btn-danger"> <i class="fas fa-trash fa-xs fa-fw"></i> </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection