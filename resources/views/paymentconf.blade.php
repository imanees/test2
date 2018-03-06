@extends('theme.layout')



@section('content')
			<div class="row">
				<div class="col-sm-12">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Payment Gateway Configuration</h3>
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
									<label class="col-sm-2 control-label" for="field-2">Paypal</label>
									<div class="col-sm-3">
										<input type="checkbox" name="onlinepaymentOptionPaypal" value="1" onclick="myFunction()">
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								<div id="payment" style="display: none;">
									<div class="form-group">
									<label class="col-sm-2 control-label" for="field-3">PayPal Auto Recharge</label>
									
									<div class="col-sm-10">
										<p>
											<label class="radio-inline">
												<input type="radio" name="radio-2" checked>
												Enable
											</label>
											<label class="radio-inline">
												<input type="radio" name="radio-2">
												Disable
											</label>
										</p>
									</div>
								</div>
								
								<div class="form-group-separator"></div>

									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-2">Amount to Recharge</label>
										
										<div class="col-sm-3">
											<input type="text" class="form-control" id="field-2" placeholder="Placeholder">
										</div>
									</div>

									<div class="form-group-separator"></div>
									
									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-2">Recharge at Balance</label>
										
										<div class="col-sm-3">
											<input type="text" class="form-control" id="field-2" placeholder="Placeholder">
										</div>
									</div>
									
									<div class="form-group-separator"></div>

									
								</div>
								<div class="form-group">
									<div class="col-sm-2"></div>
									<div class="col-sm-6">
										<button type="button" class="btn btn-info btn-single">Reset</button>
										<button type="button" class="btn btn-info btn-single">Submit</button>
									</div>
								</div>
							</form>
							<script type="text/javascript">
								function myFunction() {
								    var x = document.getElementById("payment");
								    if (x.style.display === "none") {
								        x.style.display = "block";
								    } else {
								        x.style.display = "none";
								    }
								}
							</script>					
						</div>
					</div>
					
				</div>
			</div>
@endsection