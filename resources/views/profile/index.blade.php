@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 p-5">
            <img alt="freecodecamp's profile picture" class="rounded-circle w-100" src="{{$user->profile->profileImage()}}">
        </div>
        <div class="col-md-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="font-weight-light h4 mr-4">{{$user->username}}</div>
                   <follow-button user-id ="{{$user->id}}" follows="{{$follows}}"></follow-button>
                </div>

                @can('update',$user->profile)
                    <a href="{{route('post.create')}}">Add new Post</a>
                @endcan

            </div>
            @can('update',$user->profile)
            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex mr-2">
                <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-5"><strong>{{$user->profile->followers->count()}}</strong> followers</div>
                <div class="pr-5"><strong>{{$user->following->count()}}</strong> following</div>
            </div>
            <div class="font-weight-bold pt-4">{{$user->profile->title }}</div>
            <div>{{$user->profile->description}}</div>
            <div >
                <a href="#" style="color: #003569;" class="font-weight-bold">{{$user->profile->url}}</a>
            </div>
        </div>
    </div>
    <div class="row pt-5 ">
        @foreach($user->posts as  $post)
            <div class="col-4 pb-4">
                <a href="/p/{{$post->id}}">
                <img alt="" class="w-100" src="/storage/{{$post->image}}"  style="object-fit: cover;">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
