@extends('layout.app')
@section('content')
<h3>Create Posts</h3>

{!! Form::open(['action'=>'PostController@store', 'method'=>'POST']) !!}
<div class="form-group">
    {{Form::label('title', 'Title of the Post')}}
    {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title of the Post'])}}
</div>

<div class="form-group">
    {{Form::label('body', 'Body')}}
    {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'Content of your post'])}}
</div>
</br>
  
{{Form::submit('Submit',['class'=>'btn btn-primary'])}}

{!! Form::close() !!}

@endsection