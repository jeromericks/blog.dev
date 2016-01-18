@extends('layouts.master')

@section('top-script')
	<link rel="stylesheet" type="text/css" href="/css/posts_manage.css">
@stop

@section('content')
	<div class="container" ng-app="blog">
		<main ng-controller="ManagePostsController">
			<p><a href="{{{ action('PostsController@index')}}}" class="all_posts">All Posts</a></p>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Title</th>
						<th>Description</th>
						<th>Author</th>
						<th>Date Posted</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat="post in posts">
						<td ng-cloak>@{{ post.title }}</td>
						<td ng-cloak>@{{ post.description }}</td>
						<td ng-cloak>@{{ post.user.first_name + ' ' + post.user.last_name }}</td>
						<td ng-cloak>@{{ post.created_at.date }}</td>
						<td><button class="btn btn-danger" ng-click="deletePost($index)"><i class="fa fa-times"></i>&nbsp;Delete</button></td>
					</tr>
				</tbody>
			</table>
		</main>
	</div>
@stop

@section('bottom-script')
	<script src="/js/angular.min.js"></script>
	<script src="/js/blog.js"></script>
@stop