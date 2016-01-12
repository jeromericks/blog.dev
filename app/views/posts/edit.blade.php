@extends('layouts.master')

@section('top-script')
	<link rel="stylesheet" type="text/css" href="/css/posts_edit.css">
@stop

@section('content')
	<p><a href="{{{ action('PostsController@index')}}}" class="all_posts">All Posts</a></p>
	<form method="POST" action="{{{ action('PostsController@update', $post['id']) }}}">
		<input type="hidden" name="_method" value="PUT">
  		<div class="form-group">
    		<label for="title">Title</label>
    		<input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{{ $post['title'] }}}">
  		</div>
  		<div class="form-group">
    		<label for="description">Description</label>
    		<textarea name="description" class="form-control" id="description" placeholder="Description">{{{ $post['description'] }}}</textarea>
  		</div>
  		<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i>&nbsp;Submit</button>
	</form>
	<form action="{{{ action('PostsController@destroy', $post->id) }}}" method="POST">
		<input type="hidden" name="_method" value="DELETE">
		<button class="btn btn-danger"><i class="fa fa-times"></i>&nbsp;Delete</button>
	</form>
	<a href="{{{ action('PostsController@show', $post->id) }}}" class="btn btn-success"><i class="fa fa-undo"></i>&nbsp;Cancel</a>
@stop