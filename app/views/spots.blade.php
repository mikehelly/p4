@extends('_master')

@section('title')
all the spots
@stop

@section('content')

<div class="content">

<div id="navbar">
	<h3><a href="/spots">spots</a></h3>	
	<h3><a href="/add">add</a></h3>
</div>	

<?php $spots = Spot::all(); ?>
@foreach ($spots as $spot)

<h1 class="centertext">
{{ $spot['title'] }}
</h1>
<h3 class="centertext">
near {{ $spot['location'] }}
</h3>
<iframe
  width="800"
  height="400"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBvh_CaQdZnbbXI04fqMHLiwSexlO6_bDc
    &q={{ $spot['location'] }}">
</iframe><br>
<h3 class="centertext">
{{ $spot['description'] }}<br>
</h3>
<br>

@endforeach

</div>

@stop