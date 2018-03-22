@extends('theme.layout')



@section('content')
<div class="row">
	<div class="col-sm-12">
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Voice CDR</h3>
				<div class="panel-options">
					<a href="#" data-toggle="panel">
						<span class="collapse-icon">&ndash;</span>
						<span class="expand-icon">+</span>
					</a>
					<a href="#" data-toggle="remove">
						&times;
					</a>
				</div>
			</div>
			<div class="panel-body">
				
				<form role="form" method="post" action="">
					{{csrf_field()}}
					
					<div class="form-group">
						<label class="radio-inline">
							<input type="radio" name="radio-2" checked="" >
							Last
						</label>
						<label class="radio-inline">
							<input type="radio" name="radio-2" onclick="showHistory(1)">
							Today Till Now
						</label>
						<label class="radio-inline">
							<input type="radio" name="radio-2" onclick="showHistory(2)">
							Previous Day
						</label>
						<label class="radio-inline">
							<input type="radio" name="radio-2" onclick="showHistory(3)">
							Previous 2 Days
						</label>
						<label class="radio-inline">
							<input onclick="showDateRange();" type="radio" name="radio-2" ">
							Custom
						</label>
					</div>
						<div><br></div>
						<div id="datepick" style="display: none !important;">
							@if ($errors->any())
						        @foreach ($errors->all() as $error)
						            <span class="error">{{ $error }}</span>
						            <br>
						        @endforeach

						    @endif
						<div class="form-group col-sm-12">
							<label class="col-sm-3 control-label" for="field-2"><span class="text-primary">Date Range with Timepicker</span></label>
							
							<div class="col-sm-9">
								
								<input  type="text" id="field-5" name="daterange" class="form-control daterange" data-time-picker="true" data-time-picker-increment="5" data-format="MM/DD/YYYY h:mm A" />
								
							</div>
						</div>
							<div class="form-group col-sm-12">
								<label class="col-sm-3 control-label" for="field-2"><span class="text-primary">Dialed Number</span></label>
								
								<div class="col-sm-3">
									<input type="text" class="form-control" id="field-2">
								</div>
							</div>
							<div class="form-group col-sm-12" style="display: none;">
								<label class="col-sm-3 control-label" for="field-2"><span class="text-primary">Report Type</span></label>
								<input type="radio" name="radio-3">
								Details
								<input type="radio" name="radio-3">
								Summary
							</div>
							<div class="form-group col-sm-12">
								<div class="col-sm-3"></div>
								<button class="btn btn-white btn-single">Get Report</button>
								<button class="btn btn-white btn-single">Download</button>
							</div>

						</div>

					
					<div><br></div>
					

					

				</form>
			
			</div>
		</div>
	
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Log</h3>
				<div class="panel-options">
					<a href="#" data-toggle="panel">
						<span class="collapse-icon">&ndash;</span>
						<span class="expand-icon">+</span>
					</a>
					<a href="#" data-toggle="remove">
						&times;
					</a>
				</div>
			</div>
			<div class="panel-body">			
				<table class="table table-bordered table-striped table-condensed table-hover" id="tabview">
					<thead>
						<tr>
							<th>Serial</th>
							<th>Time</th>
							<th>Destination</th>
							<th>Rate</th>
							<th>Dialed Number</th>
							<th>Duration</th>
							<th>Amount</th>
						</tr>
					</thead>
					
					<tbody>
						<?php //var_dump($logs); exit(); ?>
						@if(isset($logs))
							@php $count = 1; @endphp
							@foreach($logs as $val)
							@php $val[2] = round($val[2] / 60); @endphp
						    	@php $new = preg_split('/\s+/', $val[4]); @endphp
								<tr>
									<td>{{$count}}</td>
									<td>{{$val[1]}}</td>
									<td>{{$val[3]}}</td>
									<td>@if ($val[2] != 0) {{round($new[0] / $val[2] , 2)}} @else {{$new[0]}}  @endif</td>
									<td>{{$val[0]}}</td>
									<td>{{$val[2]}}</td>
									<td> {{$new[0]}}</td>
								</tr>
								@php $new = array(); $count++; @endphp

						    @endforeach
					    @else
					    <tr>
					    	<td>{{'No history found'}} </td>
					    </tr>
					    @endif
					</tbody>
				</table>
			
			</div>
		</div>
	
	</div>
</div>

<script>
	function showDateRange() {
	    var x = document.getElementById("datepick");
	    var y = document.getElementById("datepick");
	    if (x.style.display === "none") {
	        x.style.display = "block";
	    } else {
	        x.style.display = "none";
	    }
	}
function showHistory(tabVal){
	var x = document.getElementById("datepick");
	x.style.display = "none";
	//alert(tabVal);
		$("#tabview").html('<div style="float:left;margin-left:38%;"><img src="./images/animated_progress.gif" /></div>');	
		$.ajax({
			url:"/ajax/"+tabVal,
			success:function(result){
				//alert(result);
				$("#tabview").html(result);
			 }
		});
	};
</script>
<link rel="stylesheet" href="{{ asset('js/daterangepicker/daterangepicker-bs3.css') }}">

<script src="{{ asset('js/moment.min.js') }}"></script>
<script src="{{ asset('js/daterangepicker/daterangepicker.js') }}"></script>
@endsection