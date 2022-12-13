@extends('layouts.app')


@section('content')
<div class="container p-2">
    <a href="/" class="btn btn-secondary">Go Back</a>
    <h1>{{$todo->title}}</h1>
    <div class="badge bg-danger">{{$todo->due}}
    </div>
    <hr>
    <p>{{$todo->content}}</p>
    <form action="/todo/{{$todo->id}}" method="post">
        @csrf
        @method('Delete')
        <button type="submit" class="btn btn-danger" style="float: right">Delete</button>
    </form>
    <a href="{{$todo->id}}/edit" class="btn btn-primary">Edit</a>
</div>
@endsection