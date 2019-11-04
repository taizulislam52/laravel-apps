@extends('layouts.app')

@section('content')
    <div class="container">
        @auth
            <div class="d-flex justify-content-end">
                <div class="mr-2">

                        <img src="{{auth()->user()->profile->profileImage()}}" alt="" class="rounded-circle" style="height: 50px">
                </div>
                <div>
                    <p class="mb-0">
                        <a href="/profile/{{auth()->user()->username}}"> {{auth()->user()->username}}</a>

                    </p>
                    <p class="mt-1">{{auth()->user()->name}}</p>
                </div>
            </div>
            @endauth
        @foreach($posts as $post)
            <div class="row pb-3">
                <div class="col-5 offset-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex">
                            <div class="mr-2">
                                <img src="/storage/{{$post->user->profile->image}}" alt="" class="mh-100 rounded-circle" style="height: 50px">
                            </div>
                            <div>
                                <p class="mb-0 "><span class="font-weight-bold"><a href="/profile/{{$post->user->username}}"
                                                                                   style="color: #003569;">{{$post->user->username}}</a></span></p>
                                <p class="mt-0">{{$post->caption}}</p>
                            </div>
                            </div>
                        </div>
                        <div class="card-img">
                            <a href="/profile/{{$post->user->username}}">
                                <img src="/storage/{{$post->image}}" alt="" class="w-100">
                            </a>
                        </div>

                        <div class="card-body"></div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{$posts->links()}}
            </div>
        </div>

    </div>
@endsection
