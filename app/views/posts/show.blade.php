@extends('layouts.master')

@section('top-script')
	<link rel="stylesheet" type="text/css" href="/css/resume.css">
@stop

@section('content')
	<p><a href="{{{ action('PostsController@index')}}}">All Posts</a></p>
	<p>{{{ $post['created_at']->setTimezone('America/Chicago')->format('F d, Y') }}}</p>
	<h2>{{{ ucfirst($post['title']) }}}</h2>
	<p>{{{ ucfirst($post['description']) }}}</p>
	<a href=" {{{ action('PostsController@edit', $post->id) }}}" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i>&nbsp;Edit</a>
@stop