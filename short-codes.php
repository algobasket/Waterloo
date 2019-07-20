<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Matchmaking a Mobile App Flat Bootstrap Responsive Website Template | Short Codes :: W3layouts</title> 
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
		<li class="list-item active"><a href="short-codes.html"><i class="glyphicon glyphicon-text-size" aria-hidden="true"></i></a></li>
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
		<h3>Short Codes</h3>
	</div>
<!-- //banner -->
<!--typography-page -->
	<div class="typo">
		<div class="grid_3 grid_4">
			<h3 class="hdg">Headings</h3>
			<div class="bs-example">
				<table class="table">
					<tbody>
						<tr>
							<td><h1 id="h1.-bootstrap-heading">h1. Bootstrap heading<a class="anchorjs-link" href="#h1.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h1></td>
							<td class="type-info">Semibold 36px</td>
						</tr>
						<tr>
							<td><h2 id="h2.-bootstrap-heading">h2. Bootstrap heading<a class="anchorjs-link" href="#h2.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h2></td>
							<td class="type-info">Semibold 30px</td>
						</tr>
						<tr>
							<td><h3 id="h3.-bootstrap-heading">h3. Bootstrap heading<a class="anchorjs-link" href="#h3.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h3></td>
							<td class="type-info">Semibold 24px</td>
						</tr>
						<tr>
							<td><h4 id="h4.-bootstrap-heading">h4. Bootstrap heading<a class="anchorjs-link" href="#h4.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h4></td>
							<td class="type-info">Semibold 18px</td>
						</tr>
						<tr>
							<td><h5 id="h5.-bootstrap-heading">h5. Bootstrap heading<a class="anchorjs-link" href="#h5.-bootstrap-heading"><span class="anchorjs-icon"></span></a></h5></td>
							<td class="type-info">Semibold 14px</td>
						</tr>
						<tr>
							<td><h6>h6. Bootstrap heading</h6></td>
							<td class="type-info">Semibold 12px</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="grid_3 grid_5">
			<h3>Progress Bars</h3>
			<div class="tab-content">
				<div class="tab-pane active" id="domprogress">
					<div class="progress">    
						<div class="progress-bar progress-bar-primary" style="width: 20%"></div>
					</div>
					<p>Info with <code>progress-bar-info</code> class.</p>
					<div class="progress">    
						<div class="progress-bar progress-bar-info" style="width: 60%"></div>
					</div>
					<p>Success with <code>progress-bar-success</code> class.</p>
					<div class="progress">
						<div class="progress-bar progress-bar-success" style="width: 30%"></div>
					</div>
					<p>Warning with <code>progress-bar-warning</code> class.</p>
					<div class="progress">
						<div class="progress-bar progress-bar-warning" style="width: 70%"></div>
					</div>
					<p>Danger with <code>progress-bar-danger</code> class.</p>
					<div class="progress">
						<div class="progress-bar progress-bar-danger" style="width: 50%"></div>
					</div>
					<p>Inverse with <code>progress-bar-inverse</code> class.</p>
					<div class="progress">
						<div class="progress-bar progress-bar-inverse" style="width: 40%"></div>
					</div>
					<p>Inverse with <code>progress-bar-inverse</code> class.</p>
					<div class="progress">
						<div class="progress-bar progress-bar-success" style="width: 35%"><span class="sr-only">35% Complete (success)</span></div>
						<div class="progress-bar progress-bar-warning" style="width: 20%"><span class="sr-only">20% Complete (warning)</span></div>
						<div class="progress-bar progress-bar-danger" style="width: 10%"><span class="sr-only">10% Complete (danger)</span></div>
					</div>
				</div>
			</div>
		</div>
		<div class="grid_3 grid_5">
			<h3>Breadcrumbs</h3>
			<ol class="breadcrumb">
				<li class="active">Home</li>
			</ol>
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Library</li>
			</ol>
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li><a href="#">Library</a></li>
				<li class="active">Data</li>
			</ol>
		</div>
		<div class="grid_3 grid_5">
			<h3>Badges</h3>
			<div class="col-md-6">
				<p>Add modifier classes to change the appearance of a badge.</p>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Classes</th>
							<th>Badges</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>No modifiers</td>
							<td><span class="badge">42</span></td>
						</tr>
						<tr>
							<td><code>.badge-primary</code></td>
							<td><span class="badge badge-primary">1</span></td>
						</tr>
						<tr>
							<td><code>.badge-success</code></td>
							<td><span class="badge badge-success">22</span></td>
						</tr>
						<tr>
							<td><code>.badge-info</code></td>
							<td><span class="badge badge-info">30</span></td>
						</tr>
						<tr>
							<td><code>.badge-warning</code></td>
							<td><span class="badge badge-warning">412</span></td>
						</tr>
						<tr>
							<td><code>.badge-danger</code></td>
							<td><span class="badge badge-danger">999</span></td>
						</tr>
					</tbody>
				</table>                    
			</div>
			<div class="col-md-6">
				<p>Easily highlight new or unread items with the <code>.badge</code> class</p>
				<div class="list-group list-group-alternate"> 
					<a href="#" class="list-group-item"><span class="badge">201</span> <i class="ti ti-email"></i> Inbox </a> 
					<a href="#" class="list-group-item"><span class="badge badge-primary">5021</span> <i class="ti ti-eye"></i> Profile visits </a> 
					<a href="#" class="list-group-item"><span class="badge">14</span> <i class="ti ti-headphone-alt"></i> Call </a> 
					<a href="#" class="list-group-item"><span class="badge">20</span> <i class="ti ti-comments"></i> Messages </a> 
					<a href="#" class="list-group-item"><span class="badge badge-warning">14</span> <i class="ti ti-bookmark"></i> Bookmarks </a> 
					<a href="#" class="list-group-item"><span class="badge badge-danger">30</span> <i class="ti ti-bell"></i> Notifications </a> 
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>	
		<div class="grid_3 grid_5">
			<h3 class="bars">Tabs</h3>
			<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
				<ul id="myTab" class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Home</a></li>
					<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Profile</a></li>
					<li role="presentation"><a href="#profile1" role="tab" id="profile1-tab" data-toggle="tab" aria-controls="profile1">source</a></li>
				</ul>
				<div id="myTabContent" class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
						<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
						<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="profile1" aria-labelledby="profile1-tab">
						<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
					</div>
				</div>
			</div>
		</div>
		<h3 class="bars">Forms</h3>
		<div class="input-group">
			<span class="input-group-addon" id="basic-addon1">@</span>
			<input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
		</div>
		<div class="input-group">
			<input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2">
			<span class="input-group-addon" id="basic-addon2">@example.com</span>
		</div>
		<div class="input-group">
			<span class="input-group-addon">$</span>
				<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
			<span class="input-group-addon">.00</span>
		</div>
		<div class="input-group input-group-lg">
			<span class="input-group-addon" id="sizing-addon1">@</span>
			<input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
		</div>
		<div class="input-group">
			<span class="input-group-addon" id="sizing-addon2">@</span>
			<input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon2">
		</div>
		<div class="input-group input-group-sm">
			<span class="input-group-addon" id="sizing-addon3">@</span>
			<input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon3">
		</div>
		<div class="row">
			<div class="col-lg-6 in-gp-tl">
				<div class="input-group">
					<span class="input-group-addon">
						<input type="checkbox" aria-label="...">
					</span>
					<input type="text" class="form-control" aria-label="...">
				</div><!-- /input-group -->
			</div><!-- /.col-lg-6 -->
			<div class="col-lg-6 in-gp-tb">
				<div class="input-group">
					<span class="input-group-addon">
						<input type="radio" aria-label="...">
					</span>
					<input type="text" class="form-control" aria-label="...">
				</div><!-- /input-group -->
			</div><!-- /.col-lg-6 -->
		</div><!-- /.row -->
		<div class="row">
			<div class="col-lg-6 in-gp-tl">
				<div class="input-group">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button">Go!</button>
					</span>
					<input type="text" class="form-control" placeholder="Search for...">
				</div><!-- /input-group -->
			</div><!-- /.col-lg-6 -->
			<div class="col-lg-6 in-gp-tb">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search for...">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button">Go!</button>
					</span>
				</div><!-- /input-group -->
			</div><!-- /.col-lg-6 -->
		</div><!-- /.row -->
		<div class="row">
			<div class="col-lg-6 in-gp-tl">
				<div class="input-group">
					<div class="input-group-btn">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</div><!-- /btn-group -->
					<input type="text" class="form-control" aria-label="...">
				</div><!-- /input-group -->
			</div><!-- /.col-lg-6 -->
			<div class="col-lg-6 in-gp-tb">
				<div class="input-group">
					<input type="text" class="form-control" aria-label="...">
					<div class="input-group-btn">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
						<ul class="dropdown-menu dropdown-menu-right">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</div><!-- /btn-group -->
				</div><!-- /input-group -->
			</div><!-- /.col-lg-6 -->
		</div><!-- /.row -->
	</div>
<!-- //typography-page -->
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
<!-- for bootstrap working -->
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>