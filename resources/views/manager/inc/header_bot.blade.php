<div class="header">
	
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="container">
		<div class="col-md-3 header-left">
			<h1><a href="index.html"><img class="imglogo" src="{{ asset('frontEnd') }}/images/mainlogo.png"></a></h1>
		</div>
		<div class="col-md-3 Soft-header-middle">
			<form action="search" method="get">
				<div class="search">
					<input type="search" name="search" placeholder="Search Name">
				</div>
				<div class="section_room">
					
				</div>
				<div class="col-md-3 Soft-header-middle">
					<input type="submit" value=" ">
				</div>
				


			</form> 

		</div>
		<div class="col-sm-3 newsright">
				<form action="http://127.0.0.1:8000">
    <input type="submit" value="search image" />
                </form>
			</div>


		<div class="col-md-3 header-right footer-bottom">

			<ul>
				

				
@if (Auth::guest())  
   
    <li><a href="login" class="use1"  ><span>Login</span></a>
				</li>

@else


				<li><a href="{{ route('logout') }}"onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                </li>  

                @endif   

				<li><a class="fb" href="https://www.facebook.com/"></a></li>
				<li><a class="twi" href="https://twitter.com/"></a></li>
				<li><a class="insta" href="https://www.instagram.com/"></a></li>
				<li><a class="you" href="https://www.youtube.com/"></a></li>
			</ul>

			



		</div>
		<div class="clearfix"></div>
	</div>
</div>