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
							@foreach($logs as $log)

								@php $log = explode(';', $log); @endphp
								@if(count($log)>0)
								<tr>
									<td>{{$count}}</td>
									<td>{{$log[2]}}</td>
									<td>{{$log[4]}}</td>
									<td>{{$log[5] / $log[3]}}</td>
									<td>{{$log[1]}}</td>
									<td>{{$log[3]}}</td>
									<td>{{$log[5]}}</td>
								</tr>
								@endif
								@php $count++; @endphp
						    @endforeach
					    @endif
					</tbody>