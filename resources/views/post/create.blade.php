@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Post</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="caption" class="col-md-2 col-form-label text-md-right">Post Caption</label>

                                <div class="col-md-10">
                                    <input id="caption" type="text"
                                           class="form-control @error('caption') is-invalid @enderror"
                                           name="caption" value="{{ old('caption') }}"  autocomplete="caption" autofocus>

                                    @error('caption')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-2 col-form-label text-md-right">Post Image</label>

                                <div class="col-md-10">
                                    <input id="image" type="file" class="form-control-file" name="image">

                                    @error('image')
                                        <strong >{{$message}}</strong>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-2 ">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add post') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
