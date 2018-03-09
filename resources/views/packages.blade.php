@extends('theme.layout')



@section('content')
			<div class="row">
				<div class="col-sm-12">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Package Info</h3>
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
							<strong>Available Packages:</strong>
							
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>Package Name</th>
										<th>Package Period(Days)</th>
										<th>Package Value</th>
										<th>Registration Fee</th>
										<th>DeActivation Date</th>
										<th>Package Description</th>
										<th>choose</th>
									</tr>
								</thead>
								
								<tbody>
									
								</tbody>
							</table>
							<strong>last 10 Package History:</strong>
							
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>Sl No</th>
										<th>Package Name</th>
										<th>Package Period(Days)</th>
										<th>Package Value</th>
										<th>Registration Fee</th>
										<th>Activation Date</th>
										<th>DeActivation Date</th>
									</tr>
								</thead>
								
								<tbody>
									
								</tbody>
							</table>
							
						</div>
					</div>
					
				</div>
			</div>
@endsection