@extends('theme.layout')



@section('content')
<div class="row">
				<div class="col-sm-12">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Cost Calculator</h3>
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
							
							<form role="form" class="form-horizontal">

								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-2">Dialed Number</label>
									
									<div class="col-sm-3">
										<input type="text" class="form-control" id="field-1" placeholder="Number">
									</div>
								</div>
								
								<div class="form-group-separator"></div>

								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-2">Country</label>
									
									<div class="col-sm-3">
										{!!$country!!}
									</div>
								</div>

								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-2">Operator</label>
									
									<div class="col-sm-3">
										<select class="form-control">
											<option>Option 1</option>
											<option>Option 2</option>
											<option>Option 3</option>
											<option>Option 4</option>
											<option>Option 5</option>
										</select>
									</div>
								</div>
								
								<div class="form-group-separator"></div>

								<div class="form-group">
									<div class="col-sm-2"></div>
									<div class="col-sm-6">
										<button type="button" class="btn btn-info btn-single">Calculate</button>
									</div>
								</div>
							</form>
							
						</div>
					</div>
					
				</div>
			</div>
			<script type="text/javascript">
				var d = document.getElementById("countryID");
				d.className += " form-control";
			</script>

@endsection