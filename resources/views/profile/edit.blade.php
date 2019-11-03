@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="/profile/{{$user->id}}" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h1>Edit Profile</h1>
                    </div>
                    <div class="form-group row">
                        <label for="caption" class="col-md-3 col-form-label text-md-left">Title</label>

                        <div class="col-md-10">
                            <input id="title" type="text"
                                   class="form-control @error('title') is-invalid @enderror"
                                   name="title" value="{{ old('title') ?? $user->profile->title}}" autocomplete="title" autofocus>

                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="caption" class="col-md-3 col-form-label text-md-left">Description</label>

                        <div class="col-md-10">
                            <input id="description" type="text"
                                   class="form-control @error('description') is-invalid @enderror"
                                   name="description" value="{{ old('description') ?? $user->profile->description }}" autocomplete="description" autofocus>

                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="caption" class="col-md-3 col-form-label text-md-left">URL</label>

                        <div class="col-md-10">
                            <input id="url" type="text"
                                   class="form-control @error('url') is-invalid @enderror"
                                   name="url" value="{{ old('url') ?? $user->profile->url}}" autocomplete="url" autofocus>

                            @error('url')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-md-3 col-form-label text-md-left">Post Image</label>

                        <div class="col-md-10">
                            <input id="image" type="file" class="form-control-file" name="image" >

                            @error('image')
                            <strong>{{$message}}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Save Profile') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>


@endsection
