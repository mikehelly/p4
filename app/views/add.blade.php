@extends('_master')

@section('title')
add a new spot
@stop

@section('content')

<div class="content">

<div id="navbar">
	<h3><a href="/spots">spots</a></h3>	
	<h3><a href="/add">add</a></h3>
</div>

	<h1 class="centertext notification">add a new spot</h1>


	{{ Form::open(array('url' => '/add', 'method' => 'POST')) }}

<div class='centertext logo'>
	{{ Form::label('title') }}
	{{ Form::text('title') }}
</div>

<div class='centertext logo'>
	{{ Form::label('location') }}
	{{ Form::text('location') }}
</div>

<div class='centertext logo'>
	{{ Form::label('description') }}
	{{ Form::text('description') }}
</div>

<div class='centertext'>
	{{ Form::submit('submit') }}
</div>

	{{ Form::close() }}

</div>

@stop