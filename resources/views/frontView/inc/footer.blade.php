
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-left">
			<h2><a href=""><img src="{{$logo}}" width="180" height="70" alt=" " /></a></h2>
			<p>Website Rights UM</p>
		</div>
		<div class="col-md-9 footer-right">
			<div class="col-sm-7 newsleft">
				<h3 class="{{$font}}">SIGN UP FOR MORE FEATURE !</h3>
			</div>
			<!-- <div class="col-sm-6 newsright">
				<form>
					<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" class="{{$theme}}" value="Submit">
				</form>
			</div> -->
			<div class="clearfix"></div>
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4 class="{{$font}}">Information</h4>
					<ul>
						<li><a class="{{$font}}" href="mainhome">Home</a></li>
						<li><a class="{{$font}}" href="abot">About</a></li>
						<li><a class="{{$font}}" href="item">Category</a></li>
						<li><a class="{{$font}}" href="gallery">Gallery</a></li>
						<li><a class="{{$font}}" href="exhibition">Exhibition</a></li>
						<li><a class="{{$font}}" href="contact">Contact</a></li>
					</ul>
				</div>
				
				<div class="col-md-6 sign-gd-two ">
					<h4 class="{{$font}}">Museum Information</h4>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker {{$font}}" aria-hidden="true"></i>Address : {{$contacts->address}}</li>
						<li><i class="glyphicon glyphicon-envelope {{$font}}" aria-hidden="true"></i>Email : {{$contacts->email1}}</li>
						<li><i class="glyphicon glyphicon-earphone {{$font}}" aria-hidden="true"></i>Phone : {{$contacts->contact1}}</li>
					</ul>
				</div>
				<div class="col-md-4 sign-gd flickr-post">
					<!-- <h4> Posts</h4>
					<ul>
						<li><a href="item"><img src="{{ asset('frontEnd') }}/images/1.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="item"><img src="{{ asset('frontEnd') }}/images/2.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="item"><img src="{{ asset('frontEnd') }}/images/3.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="item"><img src="{{ asset('frontEnd') }}/images/4.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="item"><img src="{{ asset('frontEnd') }}/images/5.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="item"><img src="{{ asset('frontEnd') }}/images/6.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="item"><img src="{{ asset('frontEnd') }}/images/7.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="item"><img src="{{ asset('frontEnd') }}/images/8.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="item"><img src="{{ asset('frontEnd') }}/images/9.jpg" alt=" " class="img-responsive" /></a></li>
					</ul> -->
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">&copy Muttaki Khan | Design by <a href="muttakikhan50@gmail.com">UM</a></p>
	</div>
</div>
<!-- //footer -->
<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-bottom">
										<h3>Sign up for free</h3>
										<form>
											<div class="sign-up">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<h4>Re-type Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<input type="submit" value="REGISTER NOW" >
											</div>
											
										</form>
									</div>
									<div class="login-right">
										<h3>Sign in with your account</h3>
										<form>
											<div class="sign-in">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-in">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												<a href="#">Forgot password?</a>
											</div>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<div class="sign-in">
												<input type="submit" value="SIGNIN" >
											</div>
										</form>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>


