@extends('_master')

@section('title')
spots
@stop

@section('content')

<div class="content">

<div id="navbar">
	<h3><a href="/spots">all</a></h3>	
	<h3><a href="/add">add</a></h3>
	@if(Auth::check())
    <h3><a href='/logout'>logout</a></h3>
@else 
    <h3><a href='/login'>login</a></h3>
@endif
</div>

	<h1 class="centertext notification">keep the session rolling</h1>

	<p class="paragraph">Spots is a way to keep track of different locations in your life. A spot is any place that you feel is worthy of mention, whether it be a nice restaurant, interesting art gallery or a good place to skate. Add spots by title, address and description and start contributing to this awesome library of spots. You know what to do.</p>

	<h1 class="centertext"><a href='/signup'>sign-up</a></h1>

</div>

@stop