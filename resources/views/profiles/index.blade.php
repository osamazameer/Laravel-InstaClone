@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-4 m-auto text-lg-center">
           <a href="/profile/{{$user->id}}">
               <img class="mt-3" src="/storage/{{$user->profile->image}}"  style="height: 125px;">
           </a>
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a class="btn btn-outline-secondary" href="/profile/edit/{{$user->id}}">Edit Profile</a>

                <a href="/p/create" class="mr-5 pr-4">Add New Post</a>
            </div>

            <div class="d-flex">
                <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>254</strong> following</div>
            </div>
            <div class="pt-3">
                <p>{{ $user->profile->desc }}</p>
                <a href="https://www.instagram.com/ocamajimmy">{{ $user->profile->url }}</a>
            </div>
        </div>
        <div style="clear:both;"></div>

    </div>
    <div style="margin-top:80px;">
    <div class="row">

        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{$post->id}}">
                <img class="w-100" src="/storage/{{$post->image}}" />
                </a>
            </div>
        @endforeach


    </div>
    </div>





</div>
@endsection
