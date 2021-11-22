@extends('layout.app')
@section('content')

<a href="/posts" class = "btn btn-default">Go Back</a>
<h3>{{$post->title}}</h3>
<small>Written on {{$post->created_at}}</small>
<div class = "container">
    {{$post->body}}
</div>

<a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Edit Post</a>

{!!Form::open(['action'=>['PostController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}

{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger'])}}

{!!Form::close()!!}
@endsection