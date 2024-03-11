@extends('layouts.admin')
@section('content')
@section('title')

@endsection

@foreach($posts as $post)

    <h1>{{$post->title}}</h1>
    <h3>{{$post->description}}</h3>

@endforeach
@endsection