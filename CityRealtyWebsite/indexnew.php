<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>City Realty</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="css/stylish-portfolio.css" rel="stylesheet">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- Custom Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

	<!-- Our CSS Styles -->
	<link href="css/home-style.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

	<!--Navbar style-->
	<style type="text/css">
		.navbar {
			position: relative;
			min-height: 50px;
			margin-bottom: 1px;
			border: 1px solid transparent;
			background-color: transparent;
			width: 100%
		}
	</style>

	<!--Dropdown style-->
	<style>
		.dropdown-content {
			list-style: none;
			display: none;
			position: absolute;
			background-color: #f9f9f9;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		}

		.dropdown-content a {
			color: #337ab7;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
			text-align: left;
		}

		.dropdown-content a:hover {
			background-color: #f1f1f1
		}

		.dropdown:hover .dropdown-content {
			display: block;
		}
	</style>

	<script>
		function myFunction() {
			alert("Username or email already used!");
		}
		function myFunction2() {
			alert("Your username or password is incorrect!");
		}
		function myFunction3() {
			alert("You have successfully signed up!");
		}
	</script>

	<script>	
		function showtemplate(temp) {
			$.ajax({
				type: "POST",
				url: 'showLocations.php',
				data: { 'section': temp},
				success: function(data) {
					$("#somewhere").html(data);
				}
			});  
		}  
	</script>

</head>

<body>

	<!-- Navigation -->
	<nav class="navbar navbar-custom navbar-fixed-top " role="navigation">

		<div class="container-fluid" >

			<ul class="nav navbar-nav ">
				<li>
					<a class="page-scroll" href="index.html" style="color: #FFCC00"><img width="50px" height="50px" src="img/menu/home2.png">Home</span> </a>
				</li>

				<li>
					<a class="page-scroll" href="#services" style="color: #FFCC00"><img width="50px" height="50px" src="img/menu/sale22.png">Sale</span></a>

				</li>
				<li>
					<a class="page-scroll " href="#services" style="color: #FFCC00"><img width="50px" height="50px" src="img/menu/rent22.png">Rent </span></a>

				</li>
				<li>
					<a class="page-scroll " href="#services" style="color: #FFCC00"><img width="50px" height="50px" src="img/menu/sell22.png">Sell</span></a>

				</li>
				<li>
					<a class="page-scroll " href="#services" style="color: #FFCC00"><img width="50px" height="50px" src="img/menu/search2.png">Search</a>
				</li>

				<li>
					<a class="page-scroll" href="#contact" style="color: #FFCC00"><img width="50px" height="50px" src="img/menu/contactUs2.png">Contact Us</a>
				</li>

				<?php
				if(isset($_SESSION['errormessage'])) {
					echo "<script type='text/javascript'>myFunction();</script>";
					unset($_SESSION['errormessage']);
				}
				if(isset($_SESSION['errorlogin'])) {
					echo "<script type='text/javascript'>myFunction2();</script>";
					unset($_SESSION['errorlogin']);
				}						
				if(isset($_SESSION['signedup'])) {
					echo "<script type='text/javascript'>myFunction3();</script>";
					unset($_SESSION['signedup']);
				}
				?>
			</ul>

			<ul class="nav navbar-nav navbar-right">

				<?php
				if(!isset($_SESSION['id'])) {
					echo"
					<li class='dropdown'>
						<a href='javascript:void(0)' class='dropbtn' onclick='DropDownFunction()' style='color: #FFCC00'><span class='glyphicon glyphicon-user' aria-hidden='true'></span> SignUp</a>
						<div class='dropdown-content' id='myDropdown'>
							<a href='#SignUp-modal' data-toggle='modal' data-target='#my-modal-lg' style='color: #FFCC00'>As A Client</a>
							<a class='page-scroll' href='#ExBroker-modal' data-toggle='modal' data-target='#ExBromodal-lg' style='color: #FFCC00'>As An Agent </span></a>
						</div>
					</li>
					<li>

						<a href='#LogIn-modal' data-toggle='modal' data-target='#my-logInmodal-sm' style='color: #FFCC00'>Log in</a>";
					}
					else {
						echo "<li><a href='#' style='color: #FFCC00'>" . $_SESSION['id'] . "</a></li><li>
						<a href='logout_inc.php' style='color: #FFCC00'>Log Out</a>
					</li>";
				}
				?>
				<li>
					<a href="#" style="color: #FFCC00"><img src="img/menu/Greece.png"> Ελληνικά</a>
				</li>

				<li>
					<a href="#" style="color: #FFCC00"><img src="img/menu/United Kingdom(Great Britain).png"> English</a>
				</li>
			</ul>
		</div>
		<!-- /.container -->
	</nav>

	<!-- Search Property ID -->
	<div class="col-md-3">
		<div class="form-group">
			<label>ID Ακινήτου:</label>
			<input type="text" class="form-control" placeholder="ID Ακινήτου" id="name">
			<p class="help-block text-danger"></p>
		</div>
	</div>

	<!-- Header -->
	<header id="top" class="header">
		<div class="page_title">
			<p>
				Empire Estates Website
			</p>
		</div>
	</header>

	<!-- Search -->

	<header class="w3-container w3-teal" style = "background: transparent; padding: 3em">
		<div class="row" >
			<div class="col-lg-12 text-center">
				<h3 class="section-subheading text-muted"></h3>
			</div>
		</div>
	</header>

	<section id="search" style =  "background: #fff; background: rgba(255,255,255,0.7); padding: 5em">
		<div class="container">
			<h1 class="section_title">Αναζήτηση</h1>
			<hr class="small">
			<div class="row">
				<div class="col-lg-12">
					<form name="sentMessage" id="contactForm" novalidate>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Τύπος:</label>
									<select class="form-control">
										<option>Στούντιο</option>
										<option>Διαμέρισμα</option>
										<option>Κατοικία</option>
										<option>Επαγγελματικός χώρος</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Περιοχή:</label>
									<select name="Location" id="Location" class="form-control" onchange="showtemplate(this.value)">
										<option value="">--</option>
										<option value="Nicosia">Λευκωσία</option>
										<option value="Limassol">Λεμεσός</option>
										<option value="Larnaca">Λάρνακα</option>
										<option value="Pafos">Πάφος</option>
										<option value="Famagusta">Αμμόχωστος</option>
									</select>
								</div>
							</div>
						</div>
						<!--/row-->

						<div class="row" id="somewhere">
						</div>

						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label>Υπνοδωμάτια:</label>
									<select class="form-control">
										<option>Στούντιο</option>
										<option>1ος υπνοδωματίου</option>
										<option>2 υπνοδωματίων</option>
										<option>3 υπνοδωματίων</option>
										<option>4+ υπνοδωματίων</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Τετραγωνικά μέτρα:</label>
									<select class="form-control">
										<option>--</option>
										<option>0-30</option>
										<option>30-100</option>
										<option>100-200</option>
										<option>200+</option>
									</select>
									<br>
								</div>
							</div>
						</div><!--/row-->
						<div class="col-md-10">
							<div class="form-group">
								<label>Τιμή:</label>
								<form action="action_page.php">
									<br>
									<input type="range" multiple id="a" name="a" min ="100" max="1000" step="10" value="500">
								</form>
							</div>
						</div>

						<div class="col-lg-10">
							<div class="form-group">
								<div class="checkbox">
									<label>
										<input type="checkbox" value="Sale">Για αγορά
									</label>
									<label>
										<input type="checkbox" value="Rent">Για ενοικίαση
									</label>
								</div>
							</div>
						</div>

						<div class="clearfix"></div>
						<div class="col-lg-12 text-center">
							<div id="success"></div>
							<button type="submit" class="btn btn-xl"style = "background-color:#D3D3D3  border: 2px solid black; font-weight: bold;">
								Αναζήτηση
							</button>
						</div>

					</form>
				</div>
			</div>
		</div>
	</section>

	<footer class="w3-container w3-teal " style = "background: transparent; padding: 2em">		
	</footer>

	<!-- /.Search -->

	<!-- Services -->
	<!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
	<section id="services" class="services bg-primary">
		<div class="container">
			<div class="row text-center">
				<div class="col-lg-10 col-lg-offset-1">
					<h2>Our Services</h2>
					<hr class="small">
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<div class="service-item">
								<span class="fa-stack fa-4x"> <i class="fa fa-circle fa-stack-2x"></i> <i class="fa fa-cloud fa-stack-1x text-primary"></i> </span>
								<h4><strong>Service Name</strong></h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								</p>
								<a href="#" class="btn btn-light">Learn More</a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="service-item">
								<span class="fa-stack fa-4x"> <i class="fa fa-circle fa-stack-2x"></i> <i class="fa fa-compass fa-stack-1x text-primary"></i> </span>
								<h4><strong>Service Name</strong></h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								</p>
								<a href="#" class="btn btn-light">Learn More</a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="service-item">
								<span class="fa-stack fa-4x"> <i class="fa fa-circle fa-stack-2x"></i> <i class="fa fa-flask fa-stack-1x text-primary"></i> </span>
								<h4><strong>Service Name</strong></h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								</p>
								<a href="#" class="btn btn-light">Learn More</a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="service-item">
								<span class="fa-stack fa-4x"> <i class="fa fa-circle fa-stack-2x"></i> <i class="fa fa-shield fa-stack-1x text-primary"></i> </span>
								<h4><strong>Service Name</strong></h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								</p>
								<a href="#" class="btn btn-light">Learn More</a>
							</div>
						</div>
					</div>
					<!-- /.row (nested) -->
				</div>
				<!-- /.col-lg-10 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</section>

	<!-- Map -->
	<section id="contact" class="map">
		<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="100" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d417906.1679578008!2d32.79202249830512!3d35.08443270516032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14de1767ca494d55%3A0xbfa61172e2b992ff!2zzpvOtc-FzrrPic-Dzq_OsSwgzprPjc-Az4HOv8-C!5e0!3m2!1sel!2sus!4v1479281118979"></iframe>
		<br />
		<small> <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d417906.1679578008!2d32.79202249830512!3d35.08443270516032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14de1767ca494d55%3A0xbfa61172e2b992ff!2zzpvOtc-FzrrPic-Dzq_OsSwgzprPjc-Az4HOv8-C!5e0!3m2!1sel!2sus!4v1479281118979"></a> </small>
	</section>
	<p>
		<br>
		<br>
		<br>
	</p>

	<!-- Contact Section -->
	<section id="contact" style =  "background: #fff; background: rgba(148,147,138,0.7); padding: 3em;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 style="color: #FFCC00">Contact Us</h2>
					<h3 class="section-subheading text-muted"></h3>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<form name="sentMessage" id="contactForm" novalidate>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Enter your Name *" id="name" required data-validation-required-message="Please enter your name.">
									<p class="help-block text-danger"></p>
								</div>
								<div class="form-group">
									<input type="email" class="form-control" placeholder="Enter your Email *" id="email" required data-validation-required-message="Please enter your email address.">
									<p class="help-block text-danger"></p>
								</div>
								<div class="form-group">
									<input type="tel" class="form-control" placeholder="Enter your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
									<p class="help-block text-danger"></p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<textarea class="form-control" placeholder="Enter your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
									<p class="help-block text-danger"></p>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="col-lg-12 text-center">
								<div id="success"></div>
								<button type="submit" class="btn btn-xl">
									Send Message
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<footer>
		<section id="contact" style =  "background: #fff; background: rgba(255,255,255,0.7); padding: 3em;">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1 text-center">
						<p>
							Αγχιαλού 11
							<br>
							Λευκωσία,Αγίοι Ομολογητές,Κύπρος
						</p>
						<ul class="list-unstyled">
							<li>
								<i class="fa fa-phone fa-fw"></i> 97-900809
							</li>
							<li>
								<i class="fa fa-envelope-o fa-fw" style="color: #000000"></i><a href="mailto:marygeorgiou85@gmail.com " style="color: #000000">marygeorgiou85@gmail.com</a>
							</li>
						</ul>
						<br>
						<ul class="list-inline">
							<li>
								<a href="https://www.facebook.com/" title="Facebook"><i class="fa fa-facebook fa-fw fa-3x " style="color: #E4B006 " ></i></a>
							</li>
							<li>
								<a href="https://twitter.com/" title="Twitter"><i class="fa fa-twitter fa-fw fa-3x" style="color: #E4B006"></i></a>
							</li>
							<li>
								<a href="https://gr.pinterest.com/" title="Pinterest"><i class="fa fa-pinterest fa-fw fa-3x " style="color: #E4B006 " ></i></a>
							</li>
							<li>
								<a href="https://plus.google.com/collections/featured" title="Google+"><i class="fa fa-google-plus fa-fw fa-3x " style="color: #E4B006 " ></i></a>
							</li>
							<li>
								<a href="https://www.instagram.com/" title="Instagram"><i class="fa fa-instagram fa-fw fa-3x " style="color: #E4B006 " ></i></a>
							</li>
							<li>
								<a href="https://www.tumblr.com/" title="Tumblr"><i class="fa fa-tumblr fa-fw fa-3x " style="color: #E4B006 " ></i></a>
							</li>

						</ul>
						<hr class="small">
						<p class="text-muted" style="color: #FFFFFF">
							Copyright &copy; University of Cyprus
						</p>
					</div>
				</div>
			</div>

			<a id="to-top" href="#top" class="btn btn-circle"><i class="fa fa-angle-double-up fa-fw fa-1x"></i></a>
		</section>
	</footer>
	<!-----------------------------------signUp---------------------------------->
	<div class="modal my-modal-lg" id="my-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">


				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						×
					</button>
					<h3>Please Sign Up</h3>
				</div>

				<div class="modal-body">
					<form role="form" action="signup_inc.php" method="POST">

						<div class="row">
							<small>&nbsp&nbsp&nbsp&nbsp&nbspYOUR NAME</small>
							<br>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" autocomplete="on">
									<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2" autocomplete="on">
								</div>
							</div>
						</div>
						<p></p>
						<small>CHOOSE A USERNAME</small>
						<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
						<div class="form-group">
							<input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Username" tabindex="3" required>
						</div>
						<p></p>
						<small>EMAIL ADDRESS</small>
						<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
						<br>
						<div class="form-group">
							<input type="email" name="email" id="email" class="form-control input-lg" placeholder="e.g. example@domain.com" tabindex="4" autocomplete="on" size="47" required>
						</div>
						<div class="row">
							<p></p>
							<small>&nbsp&nbsp&nbsp&nbsp&nbspCREATE A PASSWORD</small>
							<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
							<br>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5" required pattern=".{6,}">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6" required>
								</div>
							</div>

						</div>
						<div class="row">
							<div class="col-xs-8 col-sm-9 col-md-9">
								<p>
									<span class="button-checkbox">
										<input type="checkbox" name="t_and_c" id="t_and_c"  value="1" required>
									</span>
									<i> I agree to the <a href="http://www.omegarealestate.gr/en/" data-toggle="modal" data-target="#t_and_c_m"> Terms and Conditions</a> set out by this site, including the Cookie Use. </i>
								</p>
							</div>
						</div>

						<!--</form>-->
					</div>

					<div class="modal-footer">
						<div class="col-xs-12 col-md-6">
							<input type="submit" value="Sign Up" class="btn btn-primary btn-block btn-lg" tabindex="7">
						</div>
						<div class="col-xs-12 col-md-6">
							<input type="reset" value="Reset" class="btn btn-primary btn-block btn-lg" tabindex="7">

							<!--<input type="reset" value="Reset" class="btn btn-default btn-lg" tabindex="7">-->
						</div>
					</div>
				</form>
				<div class="panel-footer">
					Already a Member? <a href="#LogIn-modal" data-toggle="modal" data-target="#my-logInmodal-sm">Sign in here</a>
				</div>
			</div>
		</div>
	</div>
	<!----------------------------end of signUp---------------------------------->

	<!-----------------------------------Log In---------------------------------->

	<div class="modal my-logInmodal-sm" id="my-logInmodal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						×
					</button>
					<h3>Log In</h3>
				</div>

				<div class="modal-body">
					<form id="MyForm"class="form-horizontal" role="form" action="login_inc.php" method="POST">


						<div class="form-group">
							<div class="col-sm-9">
								<input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Username" tabindex="3" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-9">
								<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-0 col-sm-9">
								<div class="checkbox">
									<label>
										<input type="checkbox"/>
										Remember me 
									</label>
								</div>
							</div>
						</div>
					</div>

					<div class="modal-footer">
						<div class="col-xs-12 col-md-6">
							<input type="submit" value="Sign In" class="btn btn-primary btn-block btn-lg" tabindex="7">
						</div>
						<div class="col-xs-12 col-md-6">
							<input type="reset" value="Reset" class="btn btn-primary btn-block btn-lg" tabindex="7">

							<!--<input type="reset" value="Reset" class="btn btn-default btn-lg" tabindex="7">-->
						</div>
						<a href="https://el-gr.facebook.com/"><img src="img/facebookSI.png"></a>
						<a href="https://accounts.google.com/ServiceLogin?hl=EN#identifier"><img src="img/loginGoogle.png"></a>
					</div>
				</form>
				<div class="panel-footer">
					No account? <a href="#SignUp-modal" data-toggle="modal" data-target="#my-modal-lg">Sign up now</a>
				</div>
			</div>
		</div>
	</div>
	<!----------------------------end of LogIn---------------------------------->

	<!----------------------------Sign Up Broker---------------------------------->
	<div class="modal my-ExBromodal-lg" id="ExBromodal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						×
					</button>
					<h3>Sign Up As A Broker</h3>
				</div>

				<div class="modal-body">
					<form role="form" action="signup2_inc.php" method="POST">
						<div class="row">
							<small>&nbsp&nbsp&nbsp&nbsp&nbspYOUR NAME</small>
							<br>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" autocomplete="on">
									<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2" autocomplete="on">
								</div>
							</div>
						</div>
						<p></p>
						<small>CHOOSE A USERNAME</small>
						<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
						<div class="form-group">
							<input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Username" tabindex="3" required>
						</div>
						<small>GENDER</small>
						<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
						<p></p>
						<div class="col-md-8 ">
							<label>
								<input type="radio" name="gender" value="0" required>
								Male
							</label>
							<label>
								<input type="radio" name="gender" value="1" required>
								Female 
							</label>
						</div>
						<p>
							<br>
						</p>
						<small>DATE OF BIRTH	:</small>
						<select class="form-control" name="month">
							<option value="01">January</option>
							<option value="02">February</option>
							<option value="03">March</option>
							<option value="04">April</option>
							<option value="05">May</option>
							<option value="06">June</option>
							<option value="07">July</option>
							<option value="08">August</option>
							<option value="09">September</option>
							<option value="10">October</option>
							<option value="11">November</option>
							<option value="12">December</option>
							<option selected value="">---</option>
						</select>
						<select name="day" class="form-control">
							<option value="01">01</option>
							<option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
							<option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
							<option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
							<option selected value="">--</option>
						</select>
						<select name="year" class="form-control">
							<option value="2012">2016</option>
							<option value="2012">2015</option>
							<option value="2012">2014</option>
							<option value="2012">2013</option>
							<option value="2012">2012</option>
							<option value="2011">2011</option>
							<option value="2010">2010</option>
							<option value="2009">2009</option>
							<option value="2008">2008</option>
							<option value="2007">2007</option>
							<option value="2006">2006</option>
							<option value="2005">2005</option>
							<option value="2004">2004</option>
							<option value="2003">2003</option>
							<option value="2002">2002</option>
							<option value="2001">2001</option>
							<option value="2000">2000</option>
							<option value="1999">1999</option>
							<option value="1998">1998</option>
							<option value="1997">1997</option>
							<option value="1996">1996</option>
							<option value="1995">1995</option>
							<option value="1994">1994</option>
							<option value="1993">1993</option>
							<option value="1992">1992</option>
							<option value="1991">1991</option>
							<option value="1990">1990</option>
							<option value="1989">1989</option>
							<option value="1988">1988</option>
							<option value="1987">1987</option>
							<option value="1986">1986</option>
							<option value="1985">1985</option>
							<option value="1984">1984</option>
							<option value="1983">1983</option>
							<option value="1982">1982</option>
							<option value="1981">1981</option>
							<option value="1980">1980</option>
							<option value="1979">1979</option>
							<option value="1978">1978</option>
							<option value="1977">1977</option>
							<option value="1976">1976</option>
							<option value="1975">1975</option>
							<option value="1974">1974</option>
							<option value="1973">1973</option>
							<option value="1972">1972</option>
							<option value="1971">1971</option>
							<option value="1970">1970</option>
							<option value="1969">1969</option>
							<option value="1968">1968</option>
							<option value="1967">1967</option>
							<option value="1966">1966</option>
							<option value="1965">1965</option>
							<option value="1964">1964</option>
							<option value="1963">1963</option>
							<option value="1962">1962</option>
							<option value="1961">1961</option>
							<option value="1960">1960</option>
							<option value="1959">1959</option>
							<option value="1958">1958</option>
							<option value="1957">1957</option>
							<option value="1956">1956</option>
							<option value="1955">1955</option>
							<option value="1954">1954</option>
							<option value="1953">1953</option>
							<option value="1952">1952</option>
							<option value="1951">1951</option>
							<option value="1950">1950</option>
							<option selected value="">---</option>
						</select>

						<p></p>
						<small>EMAIL ADDRESS</small>
						<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
						<br>
						<div class="form-group">
							<input type="email" name="email" id="email" class="form-control input-lg" placeholder="e.g. example@domain.com" tabindex="4" autocomplete="on" size="47" required>
						</div>
						<p></p>
						<small>PHONE</small>
						<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
						<br>
						<div class="form-group">
							<input type="tel" name="phone" id="phone" class="form-control input-lg" placeholder="Phone Number" tabindex="4" required>
						</div>
						<div class="row">
							<p></p>
							<small>&nbsp&nbsp&nbsp&nbsp&nbspCREATE A PASSWORD</small>
							<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
							<br>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="password" name="password2" id="password2" class="form-control input-lg" placeholder="Password" tabindex="5" required pattern=".{6,}">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="password" name="password_confirmation2" id="password_confirmation2" class="form-control input-lg" placeholder="Confirm Password" tabindex="6" required>
								</div>
							</div>

						</div>
						<div class="row">
							<div class="col-xs-8 col-sm-9 col-md-9">
								<p>
									<span class="button-checkbox">
										<input type="checkbox" name="t_and_c" id="t_and_c"  value="1" required>
									</span>
									<i> I agree to the <a href="http://www.omegarealestate.gr/en/" data-toggle="modal" data-target="#t_and_c_m"> Terms and Conditions</a> set out by this site, including the Cookie Use. 
									</i>
								</p>
							</div>
						</div>

						<div class="modal-footer">
							<div class="col-xs-12 col-md-6">
								<input type="submit" value="Sign Up" class="btn btn-primary btn-block btn-lg" tabindex="7">
							</div>
							<div class="col-xs-12 col-md-6">
								<input type="reset" value="Reset" class="btn btn-primary btn-block btn-lg" tabindex="7">

								<!--<input type="reset" value="Reset" class="btn btn-default btn-lg" tabindex="7">-->
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!----------------------------end of Sign Up Broker---------------------------------->

	<!-- jQuery -->
	<script src="js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>

	<!-- Custom Theme JavaScript -->
	<script>
		<!-- Scrolls to the selected menu item on the page -->
		$(function() {
			$('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
				if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
					if (target.length) {
						$('html,body').animate({
							scrollTop : target.offset().top
						}, 1000);
						return false;
					}
				}
			});
		});
		<-- #to-top button appears after scrolling -->
		var fixed = false;
		$(document).scroll(function() {
			if ($(this).scrollTop() > 250) {
				if (!fixed) {
					fixed = true;
					$('#to-top').show("slow", function() {
						$('#to-top').css({
							position : 'fixed',
							display : 'block'
						});
					});
				}
			} else {
				if (fixed) {
					fixed = false;
					$('#to-top').hide("slow", function() {
						$('#to-top').css({
							display : 'none'
						});
					});
				}
			}
		});
		var onMapMouseleaveHandler = function(event) {
			var that = $(this);
			that.on('click', onMapClickHandler);
			that.off('mouseleave', onMapMouseleaveHandler);
			that.find('iframe').css("pointer-events", "none");
		};
		var onMapClickHandler = function(event) {
			var that = $(this);
			<!-- Disable the click handler until the user leaves the map area -->
			that.off('click', onMapClickHandler);
			<!-- Enable scrolling zoom -->
			that.find('iframe').css("pointer-events", "auto");
			<!-- Handle the mouse leave event -->
			that.on('mouseleave', onMapMouseleaveHandler);
		};
		<!-- Enable map zooming with mouse scroll when the user clicks the map -->
		$('.map').on('click', onMapClickHandler);
	</script>

	<!--Password check-->

	<script>
		var passwordSu = document.getElementById("password"),
		confirm_passwordSu = document.getElementById("password_confirmation");

		function validatePassword() {
			if (passwordSu.value != confirm_passwordSu.value) {
				confirm_passwordSu.setCustomValidity("Passwords Don't Match");
			} else {
				confirm_passwordSu.setCustomValidity('');
			}
		}

		passwordSu.onchange = validatePassword;
		confirm_passwordSu.onkeyup = validatePassword;

		var passwordSb = document.getElementById("password2"),
		confirm_passwordSb = document.getElementById("password_confirmation2");

		function validatePasswordSb() {
			if (passwordSb.value != confirm_passwordSb.value) {
				confirm_passwordSb.setCustomValidity("Passwords Don't Match");
			} else {
				confirm_passwordSb.setCustomValidity('');
			}
		}

		passwordSb.onchange = validatePasswordSb;
		confirm_passwordSb.onkeyup = validatePasswordSb;
	</script>
	<!-- Drop Down Menu Sign Up -->
	<script>
		function DropDownFunction() {
			document.getElementById("myDropdown").classList.toggle("show");
		}

	</script>

</body>

</html>