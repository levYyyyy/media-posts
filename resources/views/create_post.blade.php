@extends('layouts/main')
@section('structure')

<div class="container">
    <form action="" method ="post">
        @csrf
        <input type="text" name="title" class="form-control">
        <input type="text" name="content" class="form-control">
        <input type="submit" value="submit"> 
    </form>
</div>

@endsection