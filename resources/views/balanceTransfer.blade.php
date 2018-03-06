@extends('theme.layout')



@section('content')
			<div class="row">
				<div class="col-sm-12">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Balance Transfer</h3>
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
									<label class="col-sm-2 control-label" for="field-2">Target Pin Number</label>
									
									<div class="col-sm-3">
										<input type="text" class="form-control" id="field-1" placeholder="Placeholder">
									</div>
								</div>
								
								<div class="form-group-separator"></div>

								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-2">Transfer Amount</label>
									
									<div class="col-sm-3">
										<input type="text" class="form-control" id="field-2" placeholder="Placeholder">
									</div>
								</div>

								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-2">Password</label>
									
									<div class="col-sm-3">
										<input type="password" class="form-control" id="field-3" placeholder="(Conf Password)">
									</div>
								</div>
								
								<div class="form-group-separator"></div>

								<div class="form-group">
									<div class="col-sm-2"></div>
									<div class="col-sm-6">
										<button type="button" class="btn btn-info btn-single">Reset</button>
										<button type="button" class="btn btn-info btn-single">Transfer</button>
									</div>
								</div>
							</form>
							
						</div>
					</div>
					
				</div>
			</div>
@endsection