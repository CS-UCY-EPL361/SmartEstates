<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>SignUp</title>
		<meta name="author" content="Admin" />
		<!-- Date: 2016-11-13 -->
	</head>
	<body>

	<?php
	if(isset($_SESSION['errormessage'])) {
		echo $_SESSION['errormessage'];
	}
	?>
		<div class="container">

			<div class="row">
				<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
					<form role="form" action="signup_inc.php" method="POST">
						<h2>Sign Up As A Broker </h2>
						<hr class="colorgraph">
						<div class="row">
							<small>YOUR NAME</small>
							<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
							<br>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" autocomplete="on" required>
									<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2" autocomplete="on" required>
								</div>
							</div>
						</div>
						<p></p>
						<small>CHOOSE A USERNAME</small>
						<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
						<div class="form-group">
							<input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Username" tabindex="3" required>
						</div>
						<div class="form-group">
							<p></p>
							<small>GENDER</small>
							<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
							<div class="col-md-8 ">
								<label>
									<input type="radio" name="gender" value="True" required>
									Male </label>
								<label>
									<input type="radio" name="gender" value="False" required>
									Female </label>
							</div>
						</div>
						<p></p>
						<small>DATE OF BIRTH	:</small>
						<select class="form-control" name="month">
							<option value="01">January</option>
							<option value="02">February</option>
							<option value="03">March</option>
							<option value="04">April</option>
							<option selected value="05">May</option>
						</select>
					<select name="day" class="form-control">
						<option value="01">1</option>
						<option value="02">2</option>
						<option value="03">3</option>
						<option value="04">4</option>
						<option selected value="05">5</option>
					</select>
					<select name="year" class="form-control">
						<option value="1980">1980</option>
						<option value="1981">1981</option>
						<option value="1982">1982</option>
						<option value="1983">1983</option>
						<option value="1984">1984</option>
						<option selected value="1985">1985</option>
					</select>
			</div>
		</div>
		</div>
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
			<small>CREATE A PASSWORD</small>
			<span runat="server" ID="required" style="color:Red;" visible="false"> *</span>
			<br>
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="form-group">
					<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5" required pattern=".{6,}"
					oninvalid="setCustomValidity('Insert at least 6 characters')"
					onchange="try{setCustomValidity('')}catch(e){}" />
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
						<input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1" required>
					</span>
					<i> I agree to the <a href="http://www.omegarealestate.gr/en/" data-toggle="modal" data-target="#t_and_c_m"> Terms and Conditions</a> set out by this site, including the Cookie Use. </i>
				</p>
			</div>
		</div>
		<hr class="colorgraph">
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7">
				<button type="reset" class="btn btn-default btn-sm">
					Reset
				</button>
			</div>
		</div>
		</form>
		</div>

		</div>
		</div>
		<?php
		unset($_SESSION['errormessage']);
		?>

	</body>
</html>
