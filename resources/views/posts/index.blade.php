@extends('layouts.app')

@section('content')
<div class="container">

    @if ($posts->count() == 0)
        <div class="h1">
            Welcome
        </div>
    @else
    @foreach ($posts as $post)
    {{-- <div class="row justify-content-center">
        <div class="d-flex align-items-center">
            <div class="pr-3">
                <img src="{{$post->user->profile->profileImage()}}" class="rounded-circle w-100" alt="user-pic" style="max-width:40px">
            </div>
            <div class="font-weight-bold">
                <a href="/profile/{{$post->user->id}}">
                    <span class="text-dark pr-3">{{$post->user->username}}</span>
                </a>
            </div>
        </div>
    </div> --}}
    <div class="row">
        <div class="col-6 offset-3">
            <a href="/profile/{{$post->user->id}}"><img src="/storage/{{$post->image}}" alt="" class="w-100"></a>
        </div>
        <div class="col-6 offset-3 pt-2 pb-4">
            <p>
                <span class="font-weight-bold">
                    <a href="/profile/{{$post->user->id}}">
                        <span class="text-dark">{{$post->user->username}}</span>
                    </a>
                </span> {{ $post->caption }}
            </p>
        </div>
    </div>
    
    @endforeach

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
           {{ $posts->links()}}
        </div>
    </div>
    @endif
   
</div>
@endsection
