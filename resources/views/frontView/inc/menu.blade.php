
<div class="soft-ban-top {{$theme}} {{$font}} "  id="themeID">
	<div class="container" >
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid" >
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1" >
				  <ul class="nav navbar-nav menu__list">
					
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link {{$textcolor}}" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About us <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<!-- <div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="mens.html"><img src="{{ asset('frontEnd') }}/images/m1.jpg" alt=" "/></a>
									</div> -->
									<div class="col-sm-3 multi-gd-img" style="width:100%">
										<ul class="multi-column-dropdown" >
											<li><a href="introduction">Introduction</a></li>
											<li><a href="goals">Goals</a></li>
											<li><a href="staff">Staff Directory</a></li>
											<li><a href="contact">Contact</a></li>
											
											
										</ul>
									</div>
									
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>

					<li class="menu__item"><a class="menu__link {{$textcolor}}" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a></li>

					<!-- <li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link {{$textcolor}}" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category<span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">

											<li><a href="item">All items</a></li>
											<li><a href="item">Kendi</a></li>
											<li><a href="item">Other</a></li>
											@foreach($categories as $category)    
                                            <option href="{{$category->id}}" value='{{$category->id}}'>{{$category->categoryName}}</option>
                                            @endforeach
										</ul>
									</div>
									
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="womens.html"><img src="{{ asset('frontEnd') }}/images/m2.jpg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li> -->
					<li class=" menu__item"><a class="menu__link {{$textcolor}}" href="{{url('/item')}}">All ITEMS</a></li>
					<li class=" menu__item"><a class="menu__link {{$textcolor}}" href="{{url('/gallery')}}">Gallery</a></li>
					<li class=" menu__item"><a class="menu__link {{$textcolor}}" href="{{url('/exhibition')}}">Events</a></li>
					<li class=" menu__item"><a class="menu__link {{$textcolor}}" href="{{url('/contact')}}">contact</a></li>
					<li class=" menu__item"><a class="menu__link {{$textcolor}}" href="{{url('/museums')}}">Museums</a></li>

				  </ul>
				</div>
			  </div>
			</nav>	
		</div>

		<div class="clearfix"></div>
	</div>
</div>

<script>
	window.onload = function() {
	// document.getElementById("themeID").classList.add('<?php echo $theme; ?>');
	//console.log('{{$logo}}');
	document.getElementById("logoID").src='{{$logo}}';
};
</script>

