@extends('layouts/main')
@section('structure')
<div style="display: flex; justify-content: center">
    <h1>News feed</h1>
</div>

@foreach ($posts as $post)
    <div class="container">
        
        <ul class="list-group">
            <li class="list-group-item"><a href="post/{{ $post->id }}">{{ $post->title }}</a></li>
        </ul>
    </div>
    
@endforeach
@endsection