@extends('layout.main')
@section('content')

<div class="container">
	<div class="row" id='thumbnailrow'>
	  <a href="" class="col-sm-6 col-md-4">
	    <div class="thumbnail" id="link">
	      <div class="caption">
	        <h3>Links</h3>
	      </div>
	    </div>
	  </a>
	  <div class="col-sm-6 col-md-4">
	    <a href="" class="thumbnail" id="sql">
	      <div class="caption">
	        <h3>SQL Tables</h3>
	      </div>
	    </a>
	  </div>
	  <div class="col-sm-6 col-md-4">
	    <a href="" class="thumbnail" id="req">
	      <div class="caption">
	        <h3>Requests</h3>
	      </div>
	    </a>
	  </div>
	</div>
	<div class="row" id="changeCon">{!!$content!!}</div>

</div>
@stop

