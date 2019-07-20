<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Matchmaking a Mobile App Flat Bootstrap Responsive Website Template | Single :: W3layouts</title> 
<!-- For-Mobile-Apps-and-Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Matchmaking Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, SmartPhone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps-and-Meta-Tags -->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all"> 
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- js -->
<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
<!-- //js -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->
<!-- web-fonts -->  
<link href='//fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- //web-fonts -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
</head>
<body class="bg">
<!-- menu -->
	<button class="btn-nav w3layouts_btn">
		<span class="bar arrow-top-r"></span>
		<span class="bar arrow-middle-r"></span>
		<span class="bar arrow-bottom-r"></span>
	</button>
	<nav class="nav-container hidden hideNav w3_nav">
	  <ul class="nav-list">
		<li class="list-item"><a href="main.html"><i class="glyphicon glyphicon-home" aria-hidden="true"></i></a></li>
		<li class="list-item"><a href="about.html"><i class="glyphicon glyphicon-info-sign" aria-hidden="true"></i></a></li>
		<li class="list-item"><a href="services.html"><i class="glyphicon glyphicon-cog" aria-hidden="true"></i></a></li>
		<li class="list-item"><a href="short-codes.html"><i class="glyphicon glyphicon-text-size" aria-hidden="true"></i></a></li>
		<li class="list-item"><a href="gallery.html"><i class="glyphicon glyphicon-picture" aria-hidden="true"></i></a></li>
		<li class="list-item"><a href="contact.html"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></a></li>
	  </ul>
	</nav>
	<div id="ban" class="agileinfo_menu w3l_menu">
		<div class="agileinfo_menu_left">
			<h1><a href="main.html">Matchmaking<span>For Happy <i>Marriages</i></span></a></h1>
		</div>
		<div class="agileinfo_menu_right">
			<ul>
				<li><a href="#small-dialog" class="play-icon popup-with-zoom-anim">Sign In</a></li>
				<li><a href="#small-dialog1" class="play-icon popup-with-zoom-anim">Sign Up</a></li>
			</ul>
			<div class="agileinfo_menu_right_pos">
				<p>Or</p>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- //menu -->
<!-- pop-up-box -->
	<div id="small-dialog" class="mfp-hide w3ls_small_dialog">
		<h2>Sign In</h2>		
		<div class="modal-body agileits_modal_body">
			 <form action="#" method="post">
				<span>
					<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
					<input type="email" name="Email" placeholder="Email" required=""/>
				</span>
				<span class="w3_modal">
					<i class="glyphicon glyphicon-lock" aria-hidden="true"></i>
					<input type="text" name="Password" placeholder="Password" required=""/>
				</span>
				<div class="agile_remember">
					<div class="agile_remember_left">
						<div class="check">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>remember me</label>
						</div>
					</div>
					<div class="agile_remember_right">
						<a href="#">Forgot Password?</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<input type="submit" value="Sign In">
			</form>
			<h4>Continue With</h4>
			<div class="social_icons agileinfo_social_asd">
				<!-- Facebook -->
				<a href="#" class="slide-social wthree_slide_social">
					<div class="button">5 Likes</div>
					<div class="facebook icon"> <i class="fa fa-facebook" aria-hidden="true"></i> </div>
					<div class="facebook slide">
						<p>Facebook</p>
					</div>
				</a>
				<!-- Twitter -->
				<a href="#" class="slide-social wthree_slide_social">
					<div class="button">8 Tweets</div>
					<div class="twitter icon"> <i class="fa fa-twitter" aria-hidden="true"></i> </div>
					<div class="twitter slide">
						<p>Twitter</p>
					</div>
				</a>
			</div>
			<h5>Don't have an account? <a href="#small-dialog1" class="play-icon popup-with-zoom-anim">Sign Up</a></h5>
		</div>
	</div>
	<div id="small-dialog1" class="mfp-hide">
		<h2>Sign Up</h2>		
		<div class="modal-body w3_agileits_modal_body">
			<form action="#" method="post">
				<div class="w3_modal_body_grid">
					<span>Profile For</span>
					<select id="w3_country" onchange="change_country(this.value)" class="frm-field required">
						<option value="null">Select</option>
						<option value="null">Myself</option>   
						<option value="null">Son</option>   
						<option value="null">Daughter</option>   
						<option value="null">Brother</option>   
						<option value="null">Sister</option>  
						<option value="null">Relative</option>
						<option value="null">Friend</option>						
					</select>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Name</span>
					<input type="text" name="Name" placeholder=" " required=""/>
				</div>
				<div class="w3_modal_body_grid">
					<span>Gender</span>
					<div class="w3_gender">
						<div class="colr ert">
							<label class="radio"><input type="radio" name="radio" checked=""><i></i>Male</label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio" name="radio"><i></i>Female</label>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Date Of Birth</span>
					<input class="date" id="datepicker" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '2/08/2013';}" required="">
				</div>
				<div class="w3_modal_body_grid">
					<span>religion</span>
					<select id="w3_country1" onchange="change_country(this.value)" class="frm-field required">
						<option value="null">Hindu</option>  
						<option value="null">Muslim</option>   
						<option value="null">Christian</option>   
						<option value="null">Sikh</option>   
						<option value="null">Jain</option>   
						<option value="null">Buddhist</option>
						<option value="null">No Religious Belief</option>   						
					</select>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Country</span>
					<input type="text" name="Country" placeholder=" " required=""/>
				</div>
				<div class="w3_modal_body_grid">
					<span>Email</span>
					<input type="email" name="Email" placeholder=" " required=""/>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Password</span>
					<input type="password" name="Password" placeholder=" " required=""/>
				</div>
				<input type="submit" value="Sign Up">
			</form>
			<!-- Calendar -->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->
			<h4>Continue With</h4>
			<div class="social_icons agileits_w3layouts_cons">
				<!-- Facebook -->
				<a href="#" class="slide-social">
					<div class="button">5 Likes</div>
					<div class="facebook icon agile_facebook"> <i class="fa fa-facebook" aria-hidden="true"></i> </div>
					<div class="facebook slide">
						<p>Facebook</p>
					</div>
				</a>
				<!-- Twitter -->
				<a href="#" class="slide-social">
					<div class="button">8 Tweets</div>
					<div class="twitter icon w3_agile_twitter"> <i class="fa fa-twitter" aria-hidden="true"></i> </div>
					<div class="twitter slide">
						<p>Twitter</p>
					</div>
				</a>
			</div>
			<h5>Already a member <a href="#small-dialog" class="play-icon popup-with-zoom-anim">Sign In</a></h5>
		</div>
	</div>
				<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
				<script>
					$(document).ready(function() {
					$('.popup-with-zoom-anim').magnificPopup({
						type: 'inline',
						fixedContentPos: false,
						fixedBgPos: true,
						overflowY: 'auto',
						closeBtnInside: true,
						preloader: false,
						midClick: true,
						removalDelay: 300,
						mainClass: 'my-mfp-zoom-in'
					});
																					
					});
				</script>
<!--//pop-up-box -->
<!-- banner -->
	<div class="banner1">
		<h3>Search</h3>
	</div>
<!-- //banner -->
<!-- your-search -->
	<div class="your-search">
		<div class="agileinfo_your_search_left">
			<div class="agileinfo_your_search_left_grid">
				<h4>Marital status</h4>
				<div class="agileinfo_your_search_left_grid_sub">
					<ul>
						<li><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><a href="#">Never Married</a></li>
						<li><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><a href="#">Divorced</a></li>
						<li><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><a href="#">Awaiting Divorced</a></li>
					</ul>
				</div>
			</div>
			<div class="agileinfo_your_search_left_grid">
				<h4>Photo Settings</h4>
				<div class="agileinfo_your_search_left_grid_sub">
					<ul>
						<li><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><a href="#">Visible All</a></li>
						<li><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><a href="#">Registered Members</a></li>
					</ul>
				</div>
			</div>
			<div class="agileinfo_your_search_left_grid">
				<h4>Religion</h4>
				<div class="agileinfo_your_search_left_grid_sub">
					<ul>
						<li><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><a href="#">Hindu</a></li>
						<li><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><a href="#">Muslim</a></li>
						<li><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><a href="#">Christian</a></li>
						<li><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><a href="#">No Religion</a></li>
					</ul>
				</div>
			</div>
			<div class="agileinfo_your_search_left_grid">
				<h4>Mother Tongue</h4>
				<div class="agileinfo_your_search_left_grid_sub">
					<ul>
						<li><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><a href="#">Chinese</a></li>
						<li><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><a href="#">English</a></li>
						<li><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><a href="#">Telugu</a></li>
						<li><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><a href="#">Urdu</a></li>
					</ul>
				</div>
			</div>
			<div class="agileinfo_your_search_left_grid">
				<h4>Education</h4>
				<div class="agileinfo_your_search_left_grid_sub">
					<ul>
						<li><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><a href="#">Bachelors</a></li>
						<li><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><a href="#">Masters</a></li>
						<li><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><a href="#">Below</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="agileinfo_your_search_right">
			<h3>Your search results</h3>
			<div class="agileinfo_your_search_right_grid">
				<h4>Angelica</h4>
				<div class="agileinfo_search_grid_left">
					<img src="images/16.jpg" alt=" " class="img-responsive" />
					<a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Chat Now</a>
				</div>
				<div class="agileinfo_search_grid_right">
					<ul>
						<li><span>Country</span> : China</li>
						<li><span>Mother Tongue</span> : Chinese</li>
						<li><span>Location</span> : China</li>
						<li><span>Education</span> : Masters - Management</li>
						<li><span>Profession</span> : Not Working</li>
					</ul>
					<p>"Integer id lacinia nisl. Mauris nunc quam, feugiat sit amet faucibus eu, porttitor vitae urna.</p>
				</div>
				<div class="clearfix"> </div>
				<div class="agileinfo_your_search_right_grid_sub">
					<h5>Like this member <a href="#small-dialog" class="play-icon popup-with-zoom-anim">Login Now</a> (or) <a href="#small-dialog1" class="play-icon popup-with-zoom-anim">Register Free</a></h5>
				</div>
			</div>
			<div class="agileinfo_your_search_right_grid">
				<h4>Bentley</h4>
				<div class="agileinfo_search_grid_left">
					<img src="images/17.jpg" alt=" " class="img-responsive" />
					<a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Chat Now</a>
				</div>
				<div class="agileinfo_search_grid_right">
					<ul>
						<li><span>Country</span> : USA</li>
						<li><span>Mother Tongue</span> : English</li>
						<li><span>Location</span> : America</li>
						<li><span>Education</span> : Bachelors</li>
						<li><span>Profession</span> : Engineer</li>
					</ul>
					<p>"Integer id lacinia nisl. Mauris nunc quam, feugiat sit amet faucibus eu, porttitor vitae urna.</p>
				</div>
				<div class="clearfix"> </div>
				<div class="agileinfo_your_search_right_grid_sub">
					<h5>Like this member <a href="#small-dialog" class="play-icon popup-with-zoom-anim">Login Now</a> (or) <a href="#small-dialog1" class="play-icon popup-with-zoom-anim">Register Free</a></h5>
				</div>
			</div>
			<div class="agileinfo_your_search_right_grid">
				<h4>Emmeline</h4>
				<div class="agileinfo_search_grid_left">
					<img src="images/16.jpg" alt=" " class="img-responsive" />
					<a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Chat Now</a>
				</div>
				<div class="agileinfo_search_grid_right">
					<ul>
						<li><span>Country</span> : India</li>
						<li><span>Mother Tongue</span> : Hindi</li>
						<li><span>Location</span> : Delhi</li>
						<li><span>Education</span> : Masters - Management</li>
						<li><span>Profession</span> : Marketing Professional</li>
					</ul>
					<p>"Integer id lacinia nisl. Mauris nunc quam, feugiat sit amet faucibus eu, porttitor vitae urna.</p>
				</div>
				<div class="clearfix"> </div>
				<div class="agileinfo_your_search_right_grid_sub">
					<h5>Like this member <a href="#small-dialog" class="play-icon popup-with-zoom-anim">Login Now</a> (or) <a href="#small-dialog1" class="play-icon popup-with-zoom-anim">Register Free</a></h5>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
		<nav class="w3agile_paging" aria-label="Page navigation">
		  <ul class="pagination">
			<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
			<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li>
			  <a href="#" aria-label="Next">
				<span aria-hidden="true">&raquo;</span>
			  </a>
			</li>
		  </ul>
		</nav>
	</div>
<!-- //your-search -->
<!-- footer -->
	<div class="footer">
		<div class="agile_footer_grid">
			<h3>Subscribe to <span>Newsletter</span></h3>
			<form action="#" method="post">
				<input type="email" name="Email" placeholder="Email" required=""/>
				<input type="submit" value="Send">
			</form>
		</div>
		<div class="footer-copy">
			<div class="w3agile_footer_grids">
				<div class="w3agile_footer_grid">
					<h3>About Us</h3>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse.<span>Excepteur sint occaecat cupidatat 
						non proident, sunt in culpa qui officia deserunt mollit.</span></p>
				</div>
				<div class="w3agile_footer_grid">
					<h3>Contact Info</h3>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
					</ul>
				</div>
				<div class="w3agile_footer_grid w3agile_footer_grid1">
					<h3>Navigation</h3>
					<ul>
						<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="about.html">About Us</a></li>
						<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="gallery.html">Gallery</a></li>
						<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="services.html">Services</a></li>
						<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="contact.html">Mail Us</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="copy-right-social">
			<div class="footer-pos">
				<a href="#ban" class="scroll"><span></span></a>
			</div>
			<div class="copy-right">
				<p>&copy; 2016 Matchmaking. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
			<div class="copy-right-social1">
				<ul class="wthree_social_icons1">
					<li><a href="#" class="icon1 w3_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="icon1 w3_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="icon1 w3_instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#" class="icon1 w3_g_plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //footer -->
<!-- nav -->
<script>
 $(window).load(function() {
   $(".btn-nav").on("click tap", function() {
     $(".nav-container").toggleClass("showNav hideNav").removeClass("hidden");
     $(this).toggleClass("animated");
   });
 });
</script>
<!-- //nav -->
</body>
</html>