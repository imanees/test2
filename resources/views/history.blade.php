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
				
				<form role="form">
					
					<div class="form-group">
						<label class="radio-inline">
							<input type="radio" name="radio-2" checked="">
							Last
						</label>
						<label class="radio-inline">
							<input type="radio" name="radio-2" checked="">
							Today Till Now
						</label>
						<label class="radio-inline">
							<input type="radio" name="radio-2">
							Previous Day
						</label>
						<label class="radio-inline">
							<input type="radio" name="radio-2">
							Previous 2 Days
						</label>
						<label class="radio-inline">
							<input onclick="showDateRange();" type="radio" name="radio-2" ">
							Custom
						</label>
					</div>
						<div><br></div>
						<div id="datepick" style="display: none !important;">
						<div class="form-group col-sm-12">
							<label class="col-sm-3 control-label" for="field-2"><span class="text-primary">Date Range with Timepicker</span></label>
							
							<div class="col-sm-9">
								
								<input  type="text" id="field-5" class="form-control daterange" data-time-picker="true" data-time-picker-increment="5" data-format="MM/DD/YYYY h:mm A" />
								
							</div>
						</div>
							<div class="form-group col-sm-12">
								<label class="col-sm-3 control-label" for="field-2"><span class="text-primary">Dialed Number</span></label>
								
								<div class="col-sm-3">
									<input type="text" class="form-control" id="field-2">
								</div>
							</div>
							<div class="form-group col-sm-12">
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
				<table class="table table-bordered table-striped table-condensed table-hover">
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
						<tr>
							<td>1</td>
							<td>Arlind</td>
							<td>Nushi</td>
							<td>1</td>
							<td>Arlind</td>
							<td>Nushi</td>
							<td>Nushi</td>
						</tr>
						
						<tr>
							<td>1</td>
							<td>Arlind</td>
							<td>Nushi</td>
							<td>1</td>
							<td>Arlind</td>
							<td>Nushi</td>
							<td>Nushi</td>
						</tr>
					</tbody>
				</table>
			
			</div>
		</div>
	
	</div>
</div>

<script>
	function showDateRange() {
	    var x = document.getElementById("datepick");
	    if (x.style.display === "none") {
	        x.style.display = "block";
	    } else {
	        x.style.display = "none";
	    }
	}
</script>
<link rel="stylesheet" href="{{ asset('js/daterangepicker/daterangepicker-bs3.css') }}">

<script src="{{ asset('js/moment.min.js') }}"></script>
<script src="{{ asset('js/daterangepicker/daterangepicker.js') }}"></script>
@endsection