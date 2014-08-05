@extends('_master')

@section('title')
add a new spot
@stop

@section('content')

<div class="content">

<div id="navbar">
	<h3><a href="/spots">all</a></h3>	
	<h3><a href="/add">add</a></h3>
	<h3><a href="/signup">sign-up</a></h3>
	<h3><a href="/login">login</a></h3>
	<h3><a href="/logout">logout</a></h3>
</div>

	<h1 class="centertext notification">add a new spot</h1>


	{{ Form::open(array('url' => '/add', 'method' => 'POST')) }}

<div class='centertext logo'>
	{{ Form::label('name') }}<br>
	{{ Form::text('title') }}
</div>

<div class='centertext logo'>
	{{ Form::label('address') }}<br>
	{{ Form::text('location') }}
</div>

<div class='centertext logo'>
	{{ Form::label('what is it?') }}<br>
	{{ Form::text('description') }}
</div>
<br>
<div class='centertext'>
	{{ Form::submit('submit') }}
</div>

	{{ Form::close() }}

</div>

@stop