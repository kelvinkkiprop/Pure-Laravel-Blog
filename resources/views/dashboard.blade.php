@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="card p-3">
                                <h4><i class="fas fa-users" aria-hidden="true">&nbsp;</i>{{ $users }}</h4></h4>
                                <h6>Users</h6>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-3">
                                <h4><i class="fas fa-file" aria-hidden="true">&nbsp;</i>{{ $posts }}</h4></h4>
                                <h6>Posts</h6>
                            </div>
                        </div>
                    </div>

                    <p class="mt-5"><a class="btn btn-primary btn-block" href="{{ route('posts.index') }}">{{ __('Posts') }}</a></p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
