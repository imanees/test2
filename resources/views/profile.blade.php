@extends('theme.layout')



@section('content')
			<div class="row">
				<div class="col-sm-12">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">#'s Profile</h3>
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
									<span class="text-primary">Account Information</span>
								</div>
								
								<div class="form-group-separator"></div>

								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-2">Password</label>
									
									<div class="col-sm-10">
										<input type="password" name="password" class="form-control" id="field-1" placeholder="(Password)">
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-2">Confirm Password</label>
									
									<div class="col-sm-10">
										<input type="password" name="confPassword" class="form-control" id="field-2" placeholder="(Conf Password)">
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label">Caller ID</label>
									
									<div class="col-sm-10">
										<input type="text" class="form-control" id="field-1" placeholder="Placeholder">
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-3">Balance Alert</label>
									
									<div class="col-sm-10">
										<p>
											<label class="radio-inline">
												<input type="radio" name="radio-2" checked>
												Inline radio button 1
											</label>
											<label class="radio-inline">
												<input type="radio" name="radio-2">
												Inline radio button 2
											</label>
										</p>
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-4">Alert At Balance</label>
									
									<div class="col-sm-10">
										<input type="text" class="form-control" id="field-1" placeholder="Placeholder">
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-5">IVR Language</label>
									
									<div class="col-sm-10">
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
									<span class="text-primary">Call Forwarding Configuration</span>
								</div>
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-5">Service status</label>
									
									<div class="col-sm-10">
										<select class="form-control">
											<option>Disable</option>
											<option>Enable</option>
										</select>
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-6">Forward To</label>
									
									<div class="col-sm-10">
										<input type="text" class="form-control" id="field-1" placeholder="Placeholder">
									</div>
								</div>

								<div class="form-group-separator"></div>
								<div class="form-group">
									<span class="text-primary">Contact Information</span>
								</div>

								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-7">Name</label>
									
									<div class="col-sm-10">
										<input type="text" name="name" class="form-control" id="field-7" placeholder="Name" value="@if(isset($info['name']))
										{{$info['name']}} @endif">
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-8">Designation</label>
									
									<div class="col-sm-10">
										<input type="text" name="designation" class="form-control" id="field-8" placeholder="Designation" value="@if (isset ($info['Designation'])) {{$info['Designation']}} @endif">
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-9">Company Name</label>
									
									<div class="col-sm-10">
										<input type="text" name="companyname" class="form-control" id="field-9" placeholder="Company" value="@if (isset ($info['Company'])) {{$info['Company']}} @endif">
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">Phone</label>
									
									<div class="col-sm-10">
										<input type="text" name="phone" class="form-control" id="field-1" placeholder="Phone" value="@if (isset ($info['Phone'])) {{$info['Phone']}} @endif">
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">Fax</label>
									
									<div class="col-sm-10">
										<input type="text" class="form-control" id="field-1" placeholder="Fax" value="@if (isset ($info['Fax'])) {{$info['Fax']}} @endif">
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">Email</label>
									
									
									<div class="col-sm-10">
										<input type="email" name="emailID" class="form-control" id="field-3" placeholder="Enter your email&hellip;" value="@if (isset ($info['emailID'])) {{$info['emailID']}} @endif">
										<p class="help-block">Example block-level help text here. Emails inputs are validated on native HTML5 forms.</p>
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">Post Code</label>
									
									<div class="col-sm-10">
										<input type="text" name="pincode" class="form-control" id="field-1" placeholder="Pin code">
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">State</label>
									
									<div class="col-sm-10">
										<input type="text" class="form-control" id="field-1" placeholder="State" value="@if (isset ($info['state'])) {{$info['state']}} @endif">
									</div>
								</div>

								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label">Country</label>
									
									<div class="col-sm-10">
										{!!$country!!}
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								<div class="form-group">
									<span class="text-primary">Billing Contact</span>
								</div>

								<div class="form-group-separator"></div>

								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">Name</label>
									
									<div class="col-sm-10">
										<input type="text" class="form-control" id="field-1" placeholder="Name" value="@if (isset ($info['name'])) {{$info['name']}} @endif">
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">Designation</label>
									
									<div class="col-sm-10">
										<input type="text" class="form-control" id="field-1" placeholder="Designation">
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">Email</label>
									
									<div class="col-sm-10">
										<input type="email" class="form-control" id="field-3" placeholder="Enter your email&hellip;" value="@if (isset ($info['emailID'])) {{$info['emailID']}} @endif">
										<p class="help-block">Example block-level help text here. Emails inputs are validated on native HTML5 forms.</p>
									</div>
								</div>

								<div class="form-group-separator"></div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">Phone</label>
									
									<div class="col-sm-10">
										<input type="text" class="form-control" id="field-1" placeholder="Phone">
									</div>
								</div>

								<div class="form-group-separator"></div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">Fax</label>
									
									<div class="col-sm-10">
										<input type="text" class="form-control" id="field-1" placeholder="Fax">
									</div>
								</div>

								<div class="form-group-separator"></div>

								<div class="form-group pull-right">
									<button type="button" class="btn btn-info btn-single">Reset</button>
									<button type="button" class="btn btn-info btn-single">Update Profile</button>
									<button type="button" class="btn btn-info btn-single">Advance</button>
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