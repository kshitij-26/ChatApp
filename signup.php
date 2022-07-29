<!DOCTYPE html>
<html>
<head>
	<title>Create new Account.</title>
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/signup.css">


</head>
<body>
	<div class="signup-form">
		<form action="" method="post">
			<div class="form-header">
				<h2>Sign Up</h2>
				<p>Signup and start chatting with your friends and family.</p>
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" name="user_name" placeholder="Name" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="user_pass" placeholder="Password" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label>Email Address</label>
				<input type="email" class="form-control" name="user_email" placeholder="Email Id" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label>Country</label>
				<select class="form-control" name="user_country" required>
					<option disabled="">Select a Country</option>
					<option>India</option>
					<option>USA</option>
					<option>UK</option>
					<option>France</option>
					<option>Dubai</option>
					<option>Sri Lanka</option>
				</select>
			</div>
			<div class="form-group">
				<label>Gender</label>
				<select class="form-control" name="user_gender" required>
					<option disabled="">Select your Gender</option>
					<option>Male</option>
					<option>Female</option>
					<option>Others</option>
				</select>
			</div>
			<div class ="form-group">
				<label class="checkbox-inline"><input type="checkbox" required>I accept the <a href="#">Terms of Use</a>&amp; <a href="#">Privacy Policy</a></label>
			</div>
			
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Sign Up</button>
			</div>
			 <?php include("signup_user.php"); ?> 


		</form>
		<div class="text-center small" style="color: #ffffff;">Already have an account? <a href="signin.php">Signin Here</a></div>
	</div> 

</body>
</html>