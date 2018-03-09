@extends('theme.layout')



@section('content')
<div class="page-title">
				
				<div class="title-env">
					<h2 class="panel-title">My Buying Voice Rate Plan |<a href="/topUpRatePlanDetails" > <span class="text-info">MTU Rate</span></a></h2>
				</div>
					
			</div>
<!-- Basic Setup -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">My Buying Voice Rate Plan</h3>
					
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
								<th>Dest Name</th>
								<th>Dest Code</th>
								<th>TAX(%)</th>
								<th>FCD</th>
								<th>GP</th>
								<th>Connection Fee</th>
								<th>First Int</th>
								<th>Inc Int</th>
								<th>RPM</th>
							</tr>
						</thead>
					
						<tfoot>
							<tr>
								<th>Dest Name</th>
								<th>Dest Code</th>
								<th>TAX(%)</th>
								<th>FCD</th>
								<th>GP</th>
								<th>Connection Fee</th>
								<th>First Int</th>
								<th>Inc Int</th>
								<th>RPM</th>
							</tr>
						</tfoot>
					
						<tbody>
							@foreach($rates as $rate)

								@php $string = explode(',', $rate); @endphp
								@if(count($string)>2)
								<tr>
									<td>{{$string[1]}}</td>
									<td>{{$string[0]}}</td>
									<td>0.0</td>
									<td>0</td>
									<td>0</td>
									<td>0.0</td>
									<td>60</td>
									<td>60</td>
									<td>{{$string[2]}}</td>
								</tr>
								@endif
								
						    @endforeach
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