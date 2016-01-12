@extends('layouts.master')

@section('top-script')
	<link rel="stylesheet" type="text/css" href="/css/posts_create.css">
@stop

@section('content')
  <p><a href="{{{ action('PostsController@index')}}}" class="all_posts">All Posts</a></p>
	<form method="POST" action="{{{ action('PostsController@store') }}}">
      <h2>Create A Post</h2>
  		<div class="form-group">
        {{ $errors->first('title', '<span class="help-block">:message</span>') }}
    		<label for="title">Title</label>
    		<input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{{ Input::old('title') }}}">
  		</div>
  		<div class="form-group">
        {{ $errors->first('description', '<span class="help-block">:message</span>') }}
    		<label for="description">Description</label>
    		<textarea name="description" class="form-control" id="description" placeholder="Description">{{{ Input::old('description') }}}</textarea>
  		</div>
  		<button type="submit" class="btn btn-primary">Submit</button>
      <a href="{{{ action('PostsController@index') }}}" class="btn btn-danger"><i class="fa fa-undo"></i>&nbsp;Cancel</a>
	</form>
@stop