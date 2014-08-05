@extends('_master')

@section('title')
spots new user
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

<?php $users = User::all();
	$last_user = $users->last();
	 ?>

	 @for ($i = 0; $i < 1; $i++)

	<h1 class="centertext notification">new user</h1>

	<h3 class="centertext">welcome {{ $last_user['email'] }}</h3>

	@endfor

	</div>

@stop