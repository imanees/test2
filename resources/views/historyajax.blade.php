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