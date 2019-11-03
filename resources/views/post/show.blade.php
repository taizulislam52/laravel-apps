@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{$post->image}}" alt="" class="w-100">
            </div>

            <div class="col-4 bg-white">
                <div class="d-flex  align-items-center pl-2 pt-4 pb-3">
                    <div class="pr-4">
                        <img src="{{$post->user->profile->profileImage()}}" alt="" class="rounded-circle " style="height: 40px">
                    </div>
                    <div>
                        <div class="font-weight-bold">
                            <a href="/profile/{{$post->user->id}}"><span class="text-dark">{{$post->user->username}}</span></a>
                            <a href="#" class="pl-3">Follow</a>
                        </div>

                    </div>
                </div>
                <hr>
                <p><span class="font-weight-bold"><a href="/profile/{{$post->user->id}}" style="color: #003569;">{{$post->user->username}}</a></span>  {{$post->caption}}</p>
            </div>
        </div>

    </div>
@endsection
