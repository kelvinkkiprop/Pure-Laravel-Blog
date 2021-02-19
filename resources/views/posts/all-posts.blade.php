@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Posts') }}</div>

                <div class="card-body">
                    <a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm text-right">Create Post</a>

                    <h1>Posts</h1>

                    @if($posts->count()>0)
                        @foreach ($posts as $post)
                            <div class="card p-2 mt-3">
                                <h2>{{ $post->title }}</h2>
                                <p>{{ $post->description }}</p>
                                <p>
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-dark btn-sm mr-1">Edit</a>
                                    <button data-toggle="modal" data-target="#deletePostModal{{$post->id}}" class="btn btn-danger btn-sm">Delete</button>

                                    <!-----------------------------DeletePostModal---------------------------------->
                                    <div class="modal fade" id="deletePostModal{{$post->id}}">
                                        <form method="POST" action="{{ route('posts.destroy',  $post->id) }}">
                                            @csrf
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-danger text-white">
                                                    </div>
                                                    <div class="modal-body">
                                                        <p class="text-center"><i class="fas fa-exclamation-triangle fa-4x"></i></p>
                                                        <p class="text-center"><strong>Want to delete post?</strong></p>
                                                    </div>
                                                    <div class="modal-footer bg-dark">
                                                        <button type="button" class="pull-left btn btn-secondary btn-sm" data-dismiss="modal">No</button>
                                                        <button type="submit" class="btn btn-danger btn-sm">@method('delete')Yes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-----------------------------./DeletePostModal---------------------------------->
                                </p>
                            </div>
                        @endforeach
                    @else
                        <p class="p-5 text-center text-muted">No posts found</p>
                    @endif

                    <p class="mt-1 text-center">
                        {{ $posts->links() }}
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
