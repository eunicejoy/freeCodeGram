@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Search result:</h3>
    @if ($results->count() == 0)
       <div>
        <p>No result found.</p>
       </div>
    @else
    @foreach ($results as $result)
        <div>
            <a href="/profile/{{$result->id}}">{{$result->username}}</a>
        </div>
    @endforeach
    @endif
</div>
@endsection