@extends('layouts.app')


@section('content')

<h1>edit post</h1>

{!! Form::model($post,['method'=>'PATCH', 'action'=>['PostsController@update', $post->id]]) !!}

    {{ csrf_field() }}

    {!! Form::label('title','Title') !!}
{!! Form::text('title',null, ['class'=>'form-control']) !!}


 
{!! Form::submit('Update Post', ['class'=>'btn btn-info']) !!}
{!! Form::close() !!}

<form method="post" action="/posts/{{$post->id}}">

{{ csrf_field() }}

<input type="hidden" name="_method" value="DELETE">

<input type="submit" value="DELETE">

</form>


@endsection
