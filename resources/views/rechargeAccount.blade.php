@extends('theme.layout')



@section('content')
			<div class="row">
				<div class="col-sm-12">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Payment Option</h3>
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
									<div class="col-sm-3">
										<input type="radio" name="radio-2" checked="">By Recharge Card
									</div>
								</div>
								
								<div class="form-group-separator"></div>

								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-2">Recharge Card Serial</label>
									
									<div class="col-sm-3">
										<input type="text" class="form-control" id="field-1" placeholder="">
									</div>
								</div>
								
								<div class="form-group-separator"></div>

								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-2">Recharge Card No</label>
									
									<div class="col-sm-3">
										<input type="text" class="form-control" id="field-2" placeholder="">
									</div>
								</div>

								<div class="form-group-separator"></div>

								<div class="form-group">
									<div class="col-sm-2"></div>
									<div class="col-sm-6">
										<button type="button" class="btn btn-info btn-single">Reset</button>
										<button type="button" class="btn btn-info btn-single">Recharge Account</button>
									</div>
								</div>
								<div class="form-group-separator"></div>
							</form>
							<form role="form" class="form-horizontal">
								<div class="form-group">
									<div class="col-sm-3">
										<input type="radio" name="radio-2"> By Credit Card
									</div>
								</div>
								
								<div class="form-group-separator"></div>

								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-2">Credit Card Number</label>
									
									<div class="col-sm-3">
										<input type="text" class="form-control" id="field-1" placeholder="">
									</div>
								</div>
								
								<div class="form-group-separator"></div>

								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-2">CVV</label>
									
									<div class="col-sm-3">
										<input type="text" class="form-control" id="field-2" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-2">Expiration (MM/YYYY)</label>
									
									<div class="col-sm-3">
										<input type="text" class="form-control" id="field-1" placeholder="">
									</div>
								</div>
								
								<div class="form-group-separator"></div>

								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-2">Amount</label>
									
										<div class="col-xs-1">
											<input type="text" class="form-control" id="field-2" placeholder="">
										</div>
										<label class="col-xs-1 control-label" for="field-2" style="width: 2.333333% !important">/</label>
										<div class="col-xs-1">
											<input type="text" class="form-control" placeholder="">
										</div>
								</div>


								<div class="form-group-separator"></div>

								<div class="form-group">
									<div class="col-sm-2"></div>
									<div class="col-sm-6">
										<button type="button" class="btn btn-info btn-single">Reset</button>
										<button type="button" class="btn btn-info btn-single">Recharge Account</button>
									</div>
								</div>
								<div class="form-group-separator"></div>
							</form>
							<form role="form" class="form-horizontal">
								<div class="form-group">
									<div class="col-sm-3">
										<input type="radio" name="radio-2">By PIN
									</div>
								</div>
								
								<div class="form-group-separator"></div>

								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-2">Pin No</label>
									
									<div class="col-sm-3">
										<input type="text" class="form-control" id="field-1" placeholder="">
									</div>
								</div>
								
								<div class="form-group-separator"></div>

								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-2">Pin Password</label>
									
									<div class="col-sm-3">
										<input type="text" class="form-control" id="field-2" placeholder="">
									</div>
								</div>

								<div class="form-group-separator"></div>

								<div class="form-group">
									<div class="col-sm-2"></div>
									<div class="col-sm-6">
										<button type="button" class="btn btn-info btn-single">Reset</button>
										<button type="button" class="btn btn-info btn-single">Recharge Account</button>
									</div>
								</div>
							</form>
							
						</div>
					</div>
					
				</div>
			</div>
@endsection