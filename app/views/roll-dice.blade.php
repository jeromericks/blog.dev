@extends('layouts.master')

@section('content')
	<h2>Computer guess: {{{ $random }}}</h2>
	<h2>Your guess: {{{$guess}}}</h2>

	@if($random == $guess)
		<h2>Correct guess</h2>
	@elseif($random > $guess)
		<h2>Too low</h2>
	@else
		<h2>Too high</h2>
	@endif
@stop