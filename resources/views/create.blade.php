@extends('layouts.app')
@section('content')
<h1>Create</h1>
<form method="post" action="/todo">
    @csrf
    <div class="container">
        <div class="mb-3">
            <label for="Title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Title">
        </div>
        <div class="mb-3">
            <label for="Content" class="form-label">Content</label>
            <input type="text" class="form-control" name="content" id="content" placeholder="Content">
        </div>
        <div class="mb-3">
            <label for="Due" class="form-label">Due</label>
            <input type="text" class="form-control" name="due" id="due" placeholder="Due">
        </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</div>
</form>
@endsection