<!-- Left links for user info navbar -->
				<ul class="user-info-menu left-links list-inline list-unstyled">
					
					<li class="hidden-sm hidden-xs hidden-new">
						<a href="#" data-toggle="sidebar">
							<i class="fa-bars"></i>
						</a>
					</li>
					<li class="hidden-sm hidden-xs">
					</li>
					
				</ul>
				
				
				<!-- Right links for user info navbar -->
				<ul class="user-info-menu right-links list-inline list-unstyled">
					
                    <li class="hidden-sm hidden-xs">
                        </br></br>
                        Balance:<b><span style="color: green"> @if(isset($balance)) {{$balance}} @endif USD </span></b></br>
                        Credit: <b><span style="color: red"> 0.00 USD </span></b><!-- </br> -->
                        <!-- Status: Active -->
					</li>
					
					<li class="dropdown user-profile">
						<a href="#" data-toggle="dropdown">
							<img src="{{ asset('images/user/user-4.png') }}" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
							<span>
								Welcome {{ Auth::user()->name }}
								<i class="fa-angle-down"></i>
							</span>
						</a>
						
						<ul class="dropdown-menu user-profile-menu list-unstyled">
							<li>
								<a href="#settings">
									<i class="fa-wrench"></i>
									Settings
								</a>
							</li>
							<li>
								<a href="/profile">
									<i class="fa-user"></i>
									Profile
								</a>
							</li>
							<li class="last">
								<a href="/logout">
									<i class="fa-lock"></i>
									Logout
								</a>
							</li>
						</ul>
					</li>
					<!-- 
					<li>
						<a href="#" data-toggle="chat">
							<i class="fa-comments-o"></i>
						</a>
					</li> -->
					
				</ul>