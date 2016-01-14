@extends('layouts.master')

@section('top-script')
	<link rel="stylesheet" type="text/css" href="/css/errors_missing.css">
@stop

@section('content')
	<p><a href="{{{ action('PostsController@create') }}}"><i class="fa fa-plus"></i>&nbsp;Create Post</a></p>
	<img src="/img/404.jpg">
@stop