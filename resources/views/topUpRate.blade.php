@extends('theme.layout')



@section('content')
@if(Session::has('message')) 
  <div class="alert alert-info" style="font-family: serif; color: #06a704de">
    <script type="text/javascript">
      alert("{{Session::get('message')}} ");
    </script>
  </div> 
@endif
<div class="page-title">
				
				<div class="title-env">
					<h3 class="panel-title">MTU Rate |<a href="/ratePlanDetails" > <span class="text-info">My Buying Voice Rate Plan</span></a></h3>
				</div>
					
			</div>
<!-- Basic Setup -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">My Mobile Top Up Rate</h3>
					
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
					<form role="form" method="post" action="" class="form-horizontal" >
						{{csrf_field()}}

						<div class="form-group">
							<label class="col-sm-2 control-label" for="field-2">Country</label>
							
							<div class="col-sm-3">
								<input type="text" name="country" class="form-control" id="field-1" placeholder="Country ">
							</div>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-info btn-single">Search</button>
							</div>
						</div>
						
						<div class="form-group-separator"></div>
					</form>
					
					<script type="text/javascript">
					jQuery(document).ready(function($)
					{
						$("#example-1").dataTable({
							aLengthMenu: [
								[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]
							]
						});
					});
					</script>
					
					<table id="example-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Top Up Country</th>
								<th>Operator</th>
								<th>Service Type</th>
								<th>Mobile Top Up Currency</th>
								<th>Connection Charge</th>
								<th>Conversion Rate</th>								
							</tr>
						</thead>
					
						<tfoot>
							<tr>
								<th>Top Up Country</th>
								<th>Operator</th>
								<th>Service Type</th>
								<th>Mobile Top Up Currency</th>
								<th>Connection Charge</th>
								<th>Conversion Rate</th>
							</tr>
						</tfoot>
					
						<tbody>
							@if(isset($rate))
								@foreach($rates as $rate)

									@php $string = explode(',', $rate); @endphp
									@if(count($string)>2)
									<tr>
										<td>$country</td>
										<td>{{$string[0]}}</td>
										<td>{{$string[1]}}/td>
										<td>0</td>
										<td>{{$string[2]}}</td>
										<td>{{$string[3]}}</td>
									</tr>
									@endif
									
							    @endforeach
						    @endif
						</tbody>
					</table>
					
				</div>
			</div>
	<script src="{{ asset('js/datatables/js/jquery.dataTables.min.js') }}"></script>


	<!-- Imported scripts on this page -->
	<script src="{{ asset('js/datatables/dataTables.bootstrap.js') }}"></script>
	<script src="{{ asset('js/datatables/yadcf/jquery.dataTables.yadcf.js') }}"></script>
	<script src="{{ asset('js/datatables/tabletools/dataTables.tableTools.min.js') }}"></script>

@endsection