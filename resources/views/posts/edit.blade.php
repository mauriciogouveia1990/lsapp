@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}               {{-- controller@funcao --}}
        <div class="form-group">
            {{Form::label('title', 'Title')}}                                                   {{-- labelName, Text --}}
            {{Form::text('title', $post->title, ['class' =>'form-control', 'placeholder' => 'Title'])}}   {{-- name, value, atributos --}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['id' =>'article-ckeditor', 'class' =>'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        <a href="/posts" class="btn btn-light float-right">Go back</a>
        {!! Form::close() !!}
@endsection