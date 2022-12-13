@extends('layouts.app')



@section('content')
<h1>Edit</h1>
<form method="post" action="/todo/{{$todo->id}}">
    @csrf
    @method('PUT')
    <div class="container">
        <div class="mb-3">
            <label for="Title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="{{$todo->title}}">
        </div>
        <div class="mb-3">
            <label for="Content" class="form-label">Content</label>
            <input type="text" class="form-control" name="content" id="content" value="{{$todo->content}}">
        </div>
        <div class="mb-3">
            <label for="Due" class="form-label">Due</label>
            <input type="text" class="form-control" name="due" id="due" value="{{$todo->due}}">
        </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</div>
</form>
@endsection