@extends('_master')

@section('title')
Add a new book
@stop

@section('content')

<div class="content">

<h1>Add a New Spot</h1>


{{ Form::open(array('url' => '/spot/create', 'method' => 'POST')) }}

<div class='form-group'>
{{ Form::label('title') }}
{{ Form::text('title') }}
</div>

<div class='form-group'>
{{ Form::label('location') }}
{{ Form::text('location') }}
</div>

<div class='form-group'>
{{ Form::label('description') }}
{{ Form::text('description') }}
</div>

{{ Form::submit('Add') }}

{{ Form::close() }}

</div>

@stop