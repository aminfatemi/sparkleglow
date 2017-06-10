@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
<<<<<<< HEAD
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
=======
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
>>>>>>> refs/remotes/origin/master
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
<<<<<<< HEAD
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
=======

>>>>>>> refs/remotes/origin/master
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection