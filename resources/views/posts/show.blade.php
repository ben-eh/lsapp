@extends('layouts.app')

@section('content')
  <h1>{{$post->title}}</h1>
  <div>
    {{$post->body}}
  </div>
  <small>Written on {{$post->created_at}}</small>
  <br>
  <a href="/posts" class="btn btn-secondary">Back</a>
  <a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Edit</a>
  {!! Form::open(['url' => 'posts/'.$post->id, 'method' => 'delete', 'style' => 'display:inline']) !!}
    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
  {!! Form::close() !!}
@endsection