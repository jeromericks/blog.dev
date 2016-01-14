@extends('layouts.master')

@section('top-script')
    <link rel="stylesheet" type="text/css" href="/css/posts_edit.css">
@stop

@section('content')
	<p><a href="{{{ action('PostsController@index')}}}" class="all_posts">All Posts</a></p>

	{{ Form::model($post, ['action' => ['PostsController@update', $post->id], 'method' => 'PUT']) }}
  		<div class="form-group">
  			{{ $errors->first('title', '<span class="help-block alert alert-danger">:message</span>') }}
  			{{ Form::label('title', 'Title')}}
  			{{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Enter a title', 'id' => 'title'] )}}
  		</div>
  		<div class="form-group">
  			{{ $errors->first('description', '<span class="help-block alert alert-danger">:message</span>') }}
  			{{ Form::label('description', 'Description')}}
  			{{ Form::textarea('description', $post->description, ['class' => 'form-control', 'placeholder' => 'Enter a description', 'id' => 'description'] )}}
  		</div>
  		<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i>&nbsp;Submit</button>
	{{ Form::close() }}

	{{ Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'DELETE']) }}
        <button class="btn btn-danger btn-delete" data-id="{{ $post->id }}" data-name="{{ ucfirst($post->title) }}"><i class="fa fa-times"></i>&nbsp;Delete</button>
	{{ Form::close() }}

    <form method="POST" id="delete-form">
        <input type="hidden" name="id" id="delete-id">
    </form>

	<a href="{{{ action('PostsController@show', $post->id) }}}" class="btn btn-success"><i class="fa fa-undo"></i>&nbsp;Cancel</a>
@stop

@section('bottom-script')
    <script src="/js/posts_edit.js"></script>
@stop
