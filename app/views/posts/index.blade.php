@extends('layouts.master')

@section('top-script')
	<link rel="stylesheet" type="text/css" href="/css/posts.css">
@stop

@section('content')
	<a href="{{{ action('PostsController@create') }}}"><i class="fa fa-plus"></i>&nbsp;Create Post</a>
	<div class="row">
		@foreach($posts as $post)
		<div class="col-sm-8">
			<p class="date">{{{ $post->created_at->format('F d, Y') }}}</p>
			<div class="main_content">
				<h2><a href="{{{ action('PostsController@show', $post->id) }}}">{{{ ucfirst($post->title) }}}</a></h2>
				<p>{{{ 'Posted by: ' . ucfirst($post->user->username) }}}</p>
				<p>{{{ ucfirst($post->description) }}}</p>
			</div>
		</div>
		@endforeach
	</div>
	<span>{{ $posts->links() }}</span>
	<span class="page">{{ $posts->getCurrentPage() }} of {{ $posts->getLastPage() }}</span>
@stop