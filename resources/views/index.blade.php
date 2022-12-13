@extends('layouts.app')

@section('content')
<h1>Todos</h1>
<div class="container">
@if(count($todos) > 0)
  @foreach($todos as $todo)
      <div class="card m-2">
          <h2><a href="todo/{{ $todo->id }}">{{$todo->title}}</a></h2>
          {{-- <h3>{{$todo->content}}</h3> --}}
          <p class="badge bg-danger">{{$todo->due}}</p>        
      </div>
  @endforeach
  @endif
</div>
@endsection
