@extends('_master')

@section('title')
spots login
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

	<h1 class="centertext notification">login</h1>

{{ Form::open(array('url' => '/login')) }}

    <div class='centertext logo'>
	{{ Form::label('email') }}<br>
    {{ Form::text('email') }}<br><br>
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