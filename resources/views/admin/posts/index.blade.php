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
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-{{ $post->id }}">
                    <i class="fas fa-trash fa-xs fa-fw"></i>
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="delete-{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="modelTitle-{{ $post->id }}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Delete: {{ $post->title }} ?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure that you want to definitely delete this post?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <form action="{{ route('admin.posts.destroy', ['post'=> $post->slug]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash fa-lg fa-fw"></i> Delete </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection