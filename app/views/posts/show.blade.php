@extends('layouts.master')

@section('top-script')
	<link rel="stylesheet" type="text/css" href="/css/posts_show.css">
@stop

@section('content')
	<p><a href="{{{ action('PostsController@index')}}}">All Posts</a></p>
	<p>{{{ $post->created_at->format('F d, Y') }}}</p>
	<div class="main_content">
		<h2>{{{ ucfirst($post->title) }}}</h2>
		<p>{{{ 'Posted by: ' . ucfirst($post->user->username) }}}</p>
		<p>{{{ ucfirst($post->description) }}}</p>
		<p><small>{{{ 'Updated: ' . $post->updated_at->diffForHumans() }}}</small></p>
	</div>
	<a href=" {{{ action('PostsController@edit', $post->id) }}}" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i>&nbsp;Edit</a>
@stop