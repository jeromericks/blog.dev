@extends('layouts.master')

@section('top-script')
	<link rel="stylesheet" type="text/css" href="/css/resume.css">
@stop

@section('content')
	<form method="POST" action="{{{ action('PostsController@store') }}}">
  		<div class="form-group">
    		<label for="title">Title</label>
    		<input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{{ Input::old('title') }}}">
  		</div>
  		<div class="form-group">
    		<label for="description">Description</label>
    		<textarea name="description" class="form-control" id="description" placeholder="Description">{{{ Input::old('description') }}}</textarea>
  		</div>
  		<button type="submit" class="btn btn-default">Submit</button>
	</form>
@stop