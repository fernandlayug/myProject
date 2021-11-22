@extends('layout.app')
@section('content')
<h3>Edit Posts</h3>

{{-- {!! Form::open(['action'=>'PostController@store', 'method'=>'POST']) !!} --}}

{!! Form::open(['action'=>['PostController@update', $post->id], 'method'=>'POST']) !!}
<div class="form-group">
    {{Form::label('title', 'Title of the Post')}}
    {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title of the Post'])}}
</div>

<div class="form-group">
    {{Form::label('body', 'Body')}}
    {{Form::textarea('body',$post->body,['class'=>'form-control','placeholder'=>'Content of your post'])}}
</div>
</br>
  
{{Form::hidden('_method', 'PUT')}}

{{Form::submit('Submit',['class'=>'btn btn-primary'])}}

{!! Form::close() !!}

@endsection