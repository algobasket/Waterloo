<!DOCTYPE html>
<html lang="en">
<head>
<title>WaterLoo</title> 
<!-- For-Mobile-Apps-and-Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="WaterLoo" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps-and-Meta-Tags -->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all"> 
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<link rel='stylesheet' type='text/css' href='css/jquery.easy-gallery.css' />
<!-- //Custom Theme files -->
<link href="css/custom.css" type="text/css" rel="stylesheet" media="all"> 
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->
<!-- js -->
<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type='text/javascript' src='js/app.js'></script>
<!-- //js -->
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
  $(window).load(function() {
    $(".bg_load").fadeOut(3000);
    $(".wrapper").fadeOut(3000);
    isSession();
})	
  
</script>

</head>
<body class="bg">
    <?php include 'sidebar.php';?>
	<div id="ban" class="agileinfo_menu w3l_menu">
		<div class="agileinfo_menu_left">
			<h1><a href="main.html">Waterloo</a></h1>
		</div>
		<div class="agileinfo_menu_right isLogin">
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
			 	<span id="result"></span>
				<span>
					<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
					<input type="email" name="email" id="email" placeholder="Email" required=""/>
				</span>
				<span class="w3_modal">
					<i class="glyphicon glyphicon-lock" aria-hidden="true"></i>
					<input type="text" name="password" id="password" placeholder="Password" required=""/>
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
				</div><br>
				<button type="button" onclick="login()" class="btn btn-success btn-block">Sign In</button>
			</form>
			<h4>Continue With</h4>
			<div class="social_icons agileinfo_social_asd">
				<!-- Facebook -->
				<a href="#" class="slide-social wthree_slide_social">
					<div class="facebook icon"> <i class="fa fa-facebook" aria-hidden="true"></i> </div>
					<div class="facebook slide">
						<p>Facebook</p>
					</div>
				</a>
				<!-- Twitter -->
				<a href="#" class="slide-social wthree_slide_social">
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
				<span id="result2"></span>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Name</span>
					<input type="text" name="Name" placeholder="Your Name" required="" id="Fullname"/>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Date Of Birth</span>
					<input class="date" id="datepicker" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '2/08/2013';}" required="" id="rDOB">
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Country</span>
					<input type="text" name="Country" placeholder=" " required="" id="rCountry"/>
				</div>
				<div class="w3_modal_body_grid">
					<span>Email</span>
					<input type="email" name="Email" placeholder=" " required="" id="rEmail"/>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Password</span>
					<input type="password" name="Password" placeholder=" " required="" id="rPassword"/>
				</div>
				<button type="button" onclick="signUp()" class="btn btn-success btn-block">Sign Up</button>
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