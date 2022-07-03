@extends('layouts/main')
@section('structure')
<div style="text-align: center;">
    <h1>Posts</h1>
    <a href="post/create">Create</a>
</div>

@foreach ($posts as $post)
    <div class="container">
        
        <ul class="list-group">
            <li class="list-group-item"><a href="post/id/{{ $post->id }}">{{ $post->title }}</a></li>
        </ul>
    </div>
    
@endforeach
@endsection