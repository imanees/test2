@extends('theme.layout')



@section('content')
<div class="page-title">
	
	<div class="title-env">
		<h1 class="title">Request a Mobile Top Up</h1>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Recharge to Single Number</h3>
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
									<label class="col-sm-4 control-label" for="field-2">Top Up Country</label>
									
									<div class="col-sm-6">
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
									<label class="col-sm-4 control-label" for="field-2">Operator</label>
									
									<div class="col-sm-6">
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
									<div class="col-sm-4"></div>
									<div class="col-sm-6">
										<button type="button" class="btn btn-info btn-single">Reset</button>
										<button type="button" class="btn btn-info btn-single">Submit</button>
									</div>
								</div>
							</form>
							
						</div>
					</div>
	</div>


	<div class="col-sm-6">
		<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Bulk TopUp</h3>
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
									<label class="col-sm-4 control-label" for="field-4">CSV File</label>
									
									<div class="col-sm-6">
										<input type="file" class="form-control" id="field-4">
									</div>
								</div>
								<span class="text-success">CSV File Format</span>

								<span>Mobile Number, TopUp Amount,Service Type</span>
								<div class="form-group-separator"></div>

								<div class="form-group">
									<div class="col-sm-4"></div>
									<div class="col-sm-6">
										<button type="button" class="btn btn-info btn-single">Reset</button>
										<button type="button" class="btn btn-info btn-single">Submit</button>
									</div>
								</div>
							</form>
							
						</div>
					</div>
	</div>
	
</div>
	
<!--<script src="{{ asset('js/moment.min.js') }}"></script>
<script src="{{ asset('js/colorpicker/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ asset('js/select2/select2.min.js') }}"></script>
<script src="{{ asset('js/selectboxit/jquery.selectBoxIt.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui/jquery-ui.min.js') }}"></script>

<script src="{{ asset('js/tagsinput/bootstrap-tagsinput.min.js') }}"></script>
<script src="{{ asset('js/typeahead.bundle.js') }}"></script>
<script src="{{ asset('js/handlebars.min.js') }}"></script> -->
@endsection