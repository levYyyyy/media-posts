@extends('layouts/main')
@section('structure')
<div class="card" style="width: 18rem; margin: 0 auto;">
  <img src="" alt="" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">{{ $post->title }}</h5>
    <p class="card-text">{{ $post->content }}</p>
  </div>
</div>
@endsection