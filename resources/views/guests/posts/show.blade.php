@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="card my-4">
                <div class="card-header"> 
                    <h1>{{ $post->title }}</h1>
                </div>

                <div class="card-body">
                    <p class="lead"> {{ $post->body }} </p>
                </div>
            </div>
           
        </div>
    </div>

@endsection
