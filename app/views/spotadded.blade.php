@extends('_master')

@section('title')
spot added
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

	<h1 class="centertext notification">added a spot</h1>

	<?php $spots = Spot::all();
	$last_spot = $spots->last();
	 ?>
@for ($i = 0; $i < 1; $i++)

<div class="spot-box">
	<div class="map-box">
		<iframe
  width="380"
  height="400"
  frameborder="0" style="border:10"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBvh_CaQdZnbbXI04fqMHLiwSexlO6_bDc
    &q={{ $last_spot['location'] }}&maptype=satellite&zoom=18">
</iframe>
</div>
	<div class="title-box">
		<h3 class="centertext">
{{ $last_spot['title'] }}
</h3>
<p class="centertext">
near {{ $last_spot['location'] }}
</p>
<p class="centertext">
{{ $last_spot['description'] }}<br>
</p>
</div>
</div>

@endfor

</div>

@stop