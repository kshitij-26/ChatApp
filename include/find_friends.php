<!DOCTYPE html>
<?php
session_start();
include("include/connection.php");
if(!isset($_SESSION['user_email'])){
	header("location: signin.php");
}
else{

?>
<html>
<head>
	<title>Search for Friends</title>

		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
	<nav class="navbar-brand" href="#">
		<a class="navbar-brand" href="#">
			<?php
				$user = $_SESSION['user_email'];
				$get_user = "select * from users where user_email='$user'";
				$run_user = mysqli_query($con, $get_user);
				$row = mysqli_fetch_array($run_user);
				$user_name = $row['user_name'];
				echo" <a href='../home.php?user_name=$user_name'>MyChat</a>";
				?>
			</a>
		</nav>


</body>

</html>