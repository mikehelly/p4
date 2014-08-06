@extends('_master')

@section('title')
all the spots
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

<h1 class="centertext notification">all</h1>	

<?php $spots = Spot::all(); ?>
@foreach ($spots as $spot)

<h3 class="centertext">
{{ $spot['title'] }}
</h3>
<p class="centertext">
near {{ $spot['location'] }}
</p>
<iframe
  width="800"
  height="400"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBvh_CaQdZnbbXI04fqMHLiwSexlO6_bDc
    &q={{ $spot['location'] }}&maptype=satellite&zoom=18">
</iframe><br>
<p class="centertext">
{{ $spot['description'] }}<br>
</p>
<br>

@endforeach

</div>

@stop