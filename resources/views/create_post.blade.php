@extends('layouts/main')
@section('structure')

<div class="container">
    <form action="" method ="post">
        @csrf
        <input required="" type="text" name="title" class="form-control" maxlength="250">
        <input required="" type="text" name="content" class="form-control" maxlength="250">
        <input type="submit" value="submit"> 
    </form>
</div>

@endsection