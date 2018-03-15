@if(Session::has('message')) 

    <script type="text/javascript">
      alert("{{Session::get('message')}} ");
    </script>

@endif
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />
	
	<title>iTel - Login</title>

<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
	<link rel="stylesheet" href="{{ asset('css/fonts/linecons/css/linecons.css') }}">
	<link rel="stylesheet" href="{{ asset('css/fonts/fontawesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('css/xenon-core.css') }}">
	<link rel="stylesheet" href="{{ asset('css/xenon-forms.css') }}">
	<link rel="stylesheet" href="{{ asset('css/xenon-components.css') }}">
	<link rel="stylesheet" href="{{ asset('css/xenon-skins.css') }}">
	<link rel="stylesheet" href="{{ asset('css/custom.css') }}">

	<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	
</head>
<body class="page-body login-page login-light">

	
	<div class="login-container">
	
		<div class="row">
		
			<div class="col-sm-6">
			
				<script type="text/javascript">
					jQuery(document).ready(function($)
					{
						// Reveal Login form
						setTimeout(function(){ $(".fade-in-effect").addClass('in'); }, 1);
						
						
						// Validation and Ajax action
						$("form#login").validate({
							rules: {
								name: {
									required: true
								},
								
								password: {
									required: true
								}
							},
							
							messages: {
								name: {
									required: 'Please enter your name.'
								},
								
								password: {
									required: 'Please enter your password.'
								}
							},
							
							// Form Processing via AJAX
							/*submitHandler: function(form)
							{
								show_loading_bar(70); // Fill progress bar to 70% (just a given value)
								
								var opts = {
									"closeButton": true,
									"debug": false,
									"positionClass": "toast-top-full-width",
									"onclick": null,
									"showDuration": "300",
									"hideDuration": "1000",
									"timeOut": "5000",
									"extendedTimeOut": "1000",
									"showEasing": "swing",
									"hideEasing": "linear",
									"showMethod": "fadeIn",
									"hideMethod": "fadeOut"
								};
									
								$.ajax({
									url: "logined",
									method: 'POST',
									dataType: 'json',
									data: {
										do_login: true,
										name: $(form).find('#name').val(),
										password: $(form).find('#password').val(),
									},
									success: function(resp)
									{
										show_loading_bar({
											delay: .5,
											pct: 100,
											finish: function(){
												
												// Redirect after successful login page (when progress bar reaches 100%)
												if(resp.accessGranted)
												{
													window.location.href = '/';
												}
																						}
										});
										
																			
										// Remove any alert
										$(".errors-container .alert").slideUp('fast');
										
										
										// Show errors
										if(resp.accessGranted == false)
										{
											$(".errors-container").html('<div class="alert alert-danger">\
												<button type="button" class="close" data-dismiss="alert">\
													<span aria-hidden="true">&times;</span>\
													<span class="sr-only">Close</span>\
												</button>\
												' + resp.errors + '\
											</div>');
											
											
											$(".errors-container .alert").hide().slideDown();
											$(form).find('#password').select();
										}
																		}
								});
								
							}*/
						});
						
						// Set Form focus
						$("form#login .form-group:has(.form-control):first .form-control").focus();
					});
				</script>
				
				<!-- Errors container -->
				<div class="errors-container">
				@if ($errors->has('name'))
               		<div class="login-error">{{ $errors->first('name') }}</div>
                @endif
                @if ($errors->has('password'))
               		<div class="login-error">{{ $errors->first('password') }}</div>
                @endif
									
				</div>
				
				<!-- Add class "fade-in-effect" for login form effect -->
				<form action="/login" method="post" role="form" id="login" class="login-form fade-in-effect">
					{{ csrf_field() }}
					<div class="login-header">
						<a href="dashboard-1.html" class="logo">
							<img src="{{ asset('images/logo/logo.png') }}" alt="" width="80"/>
						</a>
						
						<p>Dear user, log in to access the admin area!</p>
					</div>
	
					
					<div class="form-group">
						<label class="control-label" for="name">name</label>
						<input type="text" class="form-control" name="name" id="name" autocomplete="off" value="@if(null !== (old('name'))) {{old('name')}} @endif"/>
					</div>
					
					<div class="form-group">
						<label class="control-label" for="password">Password</label>
						<input type="password" class="form-control" name="password" id="password" autocomplete="off" />
					</div>
					
					<div class="form-group">
						<button type="submit" class="btn btn-primary  btn-block text-left">
							<i class="fa-lock"></i>
							Log In
						</button>
					</div>
					
					<div class="login-footer">
						<a href="#">Forgot your password?</a>
						
						<div class="info-links">
							<a href="#">ToS</a> -
							<a href="#">Privacy Policy</a>
						</div>
						
					</div>
					
				</form>
				
				<!-- External login -->
				<!-- 
				<div class="external-login">
					<a href="#" class="facebook">
						<i class="fa-facebook"></i>
						Facebook Login
					</a>
					-->
					<!-- 
					<a href="#" class="twitter">
						<i class="fa-twitter"></i>
						Login with Twitter
					</a>
					
					<a href="#" class="gplus">
						<i class="fa-google-plus"></i>
						Login with Google Plus
					</a>
					 -->
				</div>
				
			</div>
			
		</div>
		
	</div>



	<!-- Bottom Scripts -->
	<!-- Bottom Scripts -->
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/TweenMax.min.js') }}"></script>
	<script src="{{ asset('js/resizeable.js') }}"></script>
	<script src="{{ asset('js/joinable.js') }}"></script>
	<script src="{{ asset('js/xenon-api.js') }}"></script>
	<script src="{{ asset('js/xenon-toggles.js') }}"></script>


	<!-- Imported scripts on this page -->
	<script src="{{ asset('js/jquery-validate/jquery.validate.min.js') }}"></script>
	<script src="{{ asset('js/toastr/toastr.min.js') }}"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="{{ asset('js/xenon-custom.js') }}"></script>

</body>
</html>