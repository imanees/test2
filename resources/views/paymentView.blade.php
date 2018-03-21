@extends('theme.layout')



@section('content')
<div class="row">
	<div class="col-sm-12">
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Recharge History</h3>
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
				@if ($errors->any())
			        @foreach ($errors->all() as $error)
			            <span class="error">{{ $error }}</span>
			            <br>
			        @endforeach

			    @endif
				<form role="form" method="post" action="">
					{{csrf_field()}}
					
					<div class="form-group">
						<span class="text-primary">
							Report Span Last  
						</span>
						
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
						<div><br></div>
						<div class="form-group" id="datepick" style="display: none !important;">
							<label class="col-sm-3 control-label" for="field-2"><span class="text-primary">Date Range with Timepicker</span></label>
							
							<div class="col-sm-9">
								
								<input  type="text" id="field-5" class="form-control daterange" data-time-picker="true" data-time-picker-increment="5" data-format="MM/DD/YYYY h:mm A" />
								
							</div>
						</div>

					</div>
					<div><br></div>
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="field-2"><span class="text-primary">Records Per Page</span></label>
							
							<div class="col-sm-3">
								<input type="text" name="count" class="form-control" id="field-2" placeholder="30">
							</div>
					</div>

					<div class="form-group">
						<button class="btn btn-white btn-single">Get Report</button>
						<button class="btn btn-white btn-single">Download</button>
					</div>

				</form>
			
			</div>
		</div>
	
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Report</h3>
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
				
				<form role="form" class="form-inline pull-right">
					<div class="form-group">
									<input type="text" class="form-control" size="25" placeholder="search">
								</div>
								
								<div class="form-group">
									<button class="btn btn-secondary btn-single">Search</button>
								</div>
								
				</form>
									
				<table class="table table-bordered table-striped table-condensed table-hover">
					<thead>
						<tr>
							<th>SL. No.</th>
							<th>Client ID</th>
							<th>Amount</th>
							<th>Payment Type</th>
							<th>Date</th>
							<th>Description</th>
							<th>Added By</th>
						</tr>
					</thead>
					
					<tbody>
						@if(isset($result))
							@php $count = 1; @endphp
							@foreach($result as $value)

								@php $string = explode(',', $value); @endphp

								<tr>
									<td>{{$count}}</td>
									<td></td>
									<td>{{$string[2]}}</td>
									<td>{{$string[3]}}</td>
									<td>{{$string[0]}}</td>
									<td>{{$string[1]}}</td>
									<td>{{$string[4]}}</td>
								</tr>
								@php $count++; @endphp
						    @endforeach
					    @endif
					</tbody>
				</table>
			
			</div>
		</div>
	
	</div>
</div>
<!----- <tbody>
						@if(isset($result))
							@php $count = 1; @endphp
							@foreach($result as $value)

								@php $string = explode(',', $value); @endphp
								<tr>
									<td>{{$count}}</td>
									<td></td>
									<td>@if(isset($string[2])) {{$string[2]}} @endif</td>
									<td>@if(isset($string[3])) {{$string[3]}} @endif</td>
									<td>@if(isset($string[0])) {{$string[0]}} @endif</td>
									<td>@if(isset($string[1])) {{$string[1]}} @endif</td>
									<td>@if(isset($string[4])) {{$string[4]}} @endif</td>
								</tr>
								@php $count++; @endphp
						    @endforeach
					    @endif
					</tbody> -->
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