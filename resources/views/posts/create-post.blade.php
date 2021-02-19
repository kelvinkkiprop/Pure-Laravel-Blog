@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h5 class="content-title">{{ __('Create Post') }}</h5>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('posts.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="title" class="col-form-label required">Title:</label>
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                                value="{{ old('title') }}" required autocomplete="title" autofocus>
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-form-label required">Description:</label>
                            <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description"
                            value="{{ old('description') }}" required autocomplete="description" rows="4" placeholder="Enter post description here..."
                                autofocus></textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ route('posts.index') }}" class="btn btn-dark">Cancel</a>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
