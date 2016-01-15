@extends('layouts.master')

@section('top-script')
	<link rel="stylesheet" type="text/css" href="/css/login.css">
@stop

@section('content')
	{{ Form::open(['action' => 'HomeController@postLogin']) }}
		<div class="form-group">
			{{ Form::label('email', 'Email')}}
    		{{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter your email', 'id' => 'email'] )}}
    	</div>
    	<div class="form-group">
    		{{ Form::label('password', 'Password')}}
    		{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Enter your password', 'id' => 'password'] )}}
    	</div>
    	<button type="submit" class="btn btn-primary">Login</button>
	{{ Form::close() }}
@stop