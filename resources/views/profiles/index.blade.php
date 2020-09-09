@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fccu10-1.fna.fbcdn.net/v/t51.2885-19/s150x150/106510147_2651008048479474_8371245779971824130_n.jpg?_nc_ht=instagram.fccu10-1.fna.fbcdn.net&_nc_ohc=RZfPoKWqYVUAX_QoX6R&oh=38a62e4a0995278a237688263be4ddce&oe=5F7E8411" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username}}</h1>
                <a href="/p/create">Add new Post</a>
            </div>
            <a href="/profile/{{$user->id}}/edit">Edit profile</a>
            <div class="d-flex">
                <div class="div pr-3"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="div pr-3"><strong>152</strong> followers</div>
                <div class="div pr-3"><strong>212</strong> following</div>
            </div>
            <div class="div pt-4 font-weight-bold   ">{{$user->profile->title}}</div>
            <div class="div">{{$user->profile->description}}</div>
            <div class="div"><a href="#">{{$user->profile->url}}</a></div>
        </div>

    </div>
    <div class="row pt-5">

        @foreach($user->posts as $post)

        <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}"><img src="/storage/{{ $post->image}}" class="w-100"></a>
        </div>

        @endforeach
    </div>
</div>
@endsection