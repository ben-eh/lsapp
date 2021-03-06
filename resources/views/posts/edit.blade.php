@extends('layouts.app')

@section('content')
  <h1>Edit Post</h1>
  {!! Form::open(['url' => 'posts/'.$post->id, 'method' => 'put']) !!}
    <div class="form-group">
      {{Form::label('title', 'Title')}}
      {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
      {{Form::label('body', 'Body')}}
      {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
    </div>
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
  {!! Form::close() !!}
@endsection