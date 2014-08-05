@extends('_master')

@section('title')
spots sign up
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

<h1 class="centertext notification">sign-up</h1>

{{ Form::open(array('url' => '/signup')) }}

    <div class='centertext logo'>
	{{ Form::label('email') }}<br>
    {{ Form::text('email') }}<br>
</div>

    <div class='centertext logo'>
	{{ Form::label('password') }}<br>
    {{ Form::password('password') }}<br>
</div>
<br>
<div class='centertext logo'>
    {{ Form::submit('Submit') }}
</div>

{{ Form::close() }}

</div>

@stop