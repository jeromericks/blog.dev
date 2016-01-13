@extends('layouts.master')

@section('top-script')
	<link rel="stylesheet" type="text/css" href="/css/posts_create.css">
@stop

@section('content')
  <p><a href="{{{ action('PostsController@index')}}}" class="all_posts">All Posts</a></p>
    {{ Form::open(['action' => 'PostsController@store']) }}
      <h2>Create A Post</h2>
  		<div class="form-group">
        {{ $errors->first('title', '<span class="help-block alert alert-danger">:message</span>') }}
        {{ Form::label('title', 'Title')}}
    		{{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter a title', 'id' => 'title'] )}}
  		</div>
  		<div class="form-group">
        {{ $errors->first('description', '<span class="help-block alert alert-danger">:message</span>') }}
        {{ Form::label('description', 'Description')}}
        {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Enter a description', 'id' => 'description']) }}
  		</div>
  		<button type="submit" class="btn btn-primary">Submit</button>
      <a href="{{{ action('PostsController@index') }}}" class="btn btn-danger"><i class="fa fa-undo"></i>&nbsp;Cancel</a>
	{{ Form::close() }}
@stop