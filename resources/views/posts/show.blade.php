@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-7">
           <img class="h-50" src="/storage/{{$post->image}}">
       </div>

       <div class="col-5">
           <div class="d-flex align-items-center">
               <img class="w-25 mr-3" style="max-width: 40px;" src="/storage/{{$post->user->profile->image}}">
               <a href="/profile/{{$post->user->id}}" class="pr-3 font-weight-bold text-dark ">{{$post->user->username}}</a>
           </div>
           <hr />
            <div class="d-flex">
           <a href="/profile/{{$post->user->id}}" class="pr-3 font-weight-bold text-dark">{{$post->user->username}}</a>
           <p>{{$post->caption}}</p>
            </div>
           <a class="btn btn-primary" href="/profile/{{auth()->user()->id}}">BACK</a>
       </div>
   </div>
</div>
@endsection
