@extends('layouts.app')


@section('content')

<h1>Create post</h1>

<!-- <form method ="post" action="/posts"> -->

{!! Form::open() !!}


{{ csrf_field() }}

<input type="text" name="title" placeholder="enter title">
<input type="submit" name="submit">

{!! Form::close() !!}

    
<!-- </form> -->


@endsection

