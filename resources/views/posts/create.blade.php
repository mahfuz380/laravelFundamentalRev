@extends('layouts.app')


@section('content')

<form method ="post" action="/posts">

    <input type="text" name="title" placeholder="enter title">
    <input type="submit" name="submit">
</form>


@section('footer')

