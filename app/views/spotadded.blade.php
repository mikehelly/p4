@extends('_master')

@section('title')
spot added
@stop

@section('content')

<div class="content">

<div id="navbar">
	<h3><a href="/spots">spots</a></h3>	
	<h3><a href="/add">add</a></h3>
</div>

	<h1 class="centertext notification">added a spot</h1>

	<?php $spots = Spot::all();
	$last_spot = $spots->last();
	 ?>
@for ($i = 0; $i < 1; $i++)

<h1 class="centertext">
{{ $last_spot['title'] }}
</h1>
<h3 class="centertext">
near {{ $last_spot['location'] }}
</h3>
<iframe
  width="800"
  height="400"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBvh_CaQdZnbbXI04fqMHLiwSexlO6_bDc
    &q={{ $last_spot['location'] }}">
</iframe><br>
<h3 class="centertext">
{{ $last_spot['description'] }}<br>
</h3>
<br>

@endfor

</div>

@stop