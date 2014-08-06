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
    <h3><a href='/login'>login</a>
@endif
</div>

	<h1 class="centertext notification">keep the session rolling</h1>

	<p class="paragraph">spots is a way to keep track of different locations in your life. a spot is any place that you feel is worthy of mention, whether it be a nice restaurant, interesting art gallery or a good place to skate. add spots by title, address and description to start building your own personal library of spots.</p>

	<h1 class="centertext"><a href='/signup'>sign-up</a></h1>

</div>

@stop