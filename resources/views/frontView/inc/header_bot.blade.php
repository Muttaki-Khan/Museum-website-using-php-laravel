<style>
.button {
  display: inline-block;
  padding: 5px 10px;
  margin-top: 5px;
  font-size: 14px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  border: none;
  border-radius: 15px;
  box-shadow: 0 5px #999;
}
</style>
<div class="header" >
	
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot"  >
	<div class="container">
		<div class="col-md-3 header-left">

			<!-- <h1><a href="index.html" ><img class="imglogo" id="logoID"  src="{{ asset('frontEnd') }}/images/mainlogo.png"></a></h1> -->
			<h1><a href="" ><img class="imglogo" id="logoID"></a></h1>

		</div>
		<!-- <div class="col-md-3 Soft-header-middle {{$theme}}">
			<form action="search " method="get">
				<div class="search" >
					<input type="search"  name="search" placeholder="Search Name">
				</div>
				<div class="section_room">
				</div>
				<div class="col-md-3 Soft-header-middle">
					<input type="submit"  value=" " >
				</div>	
			</form> 
		</div> -->

    <div class='col-md-3 '>
        <form class='navbar-form' action="search " method="get">
          <div class='input-group'>
            <input class='form-control' type='search' name='search' placeholder='Search Name' />
            <span class="input-group-btn">
              <button type='submit' class='btn btn-default {{$textcolor}} {{$theme}}'>
                <span class='glyphicon glyphicon-search' style=""></span>
              </button>
            </span>

          </div>
        </form>
		
    </div>

		<!-- <div class="col-sm-3 newsright ">
				<form action="http://127.0.0.1:8000">
    			<input type="submit" class="button {{$theme}} {{$font}} {{$textcolor}}" value="search image"  />
                </form>
		</div> -->

		<div class="col-sm-3 newsright">
				<!-- <a type="submit"  class="button {{$theme}} {{$font}} {{$textcolor}}" href="">Machine Learning Feature</a> -->
				<?php
				if (Auth::user() && strlen(Auth::user()->colablink)>5){
				?>
    			<a typ="submit"  class="button {{$theme}} {{$font}} {{$textcolor}}" href="{{ Auth::user()->colablink }} ">Machine Learning Feature</a>

				<?php
				
				}
				?>


		</div>


		<div class="col-md-3 header-right footer-bottom">

			<ul>
				

@if (Auth::guest())  
   
    <li><a href="login" class="use1 {{$theme}} {{$font}} {{$textcolor}}"  ><span>Login</span></a></li>
		
@else
				<i class="{{$font}}">{{ Auth::user()->name }} </i> 

				<li><a class="use1" href="{{ route('logout') }}"onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();"><span>Logout</span></a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                </li>  

                @endif   

				<!-- <li><a class="fb" href="https://www.facebook.com/"></a></li>
				<li><a class="twi" href="https://twitter.com/"></a></li>
				<li><a class="insta" href="https://www.instagram.com/"></a></li>
				<li><a class="you" href="https://www.youtube.com/"></a></li> -->
			</ul>


		</div>
		<div class="clearfix"></div>
	</div>
</div>



