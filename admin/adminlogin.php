<?php
session_start();
include("../includes/db.php");
?>


<html>
<head>
	<title>Admin Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="adminlogin.css">
</head>

<body>
	<div class="container">
		<form class="form-login" action="" method="post">
			<h2 class="form-login-heading"> Admin login</h2>
			<input type="text" class=" form-control" name="admin_email" placeholder="Email" required="">
			<input type="password" class=" form-control" name="admin_pass" placeholder="password" required="">
			<button class="btn btn-lg btn-primary btn-block" type="submit" name="admin_login">Login</button>
			<h4 class="forgot-password"><a href="forgot_password.php">Forgot Password</a></h4>
		</form>		
	</div>
</body>
</html>

<?php
if (isset($_POST['admin_login'])) {
	$admin_email=mysqli_real_escape_string($con,$_POST['admin_email']);
	$admin_pass=mysqli_real_escape_string($con,$_POST['admin_pass']);
	$get_admin="select * from admin where admin_email='$admin_email' AND admin_pass='$admin_pass'";
	$run_admin=mysqli_query($con,$get_admin);
	$count=mysqli_num_rows($run_admin);
	if ($count==1) {
		$_SESSION['admin_email']=$admin_email;
		echo " <script>alert('you are logged in')</script>";
		echo " <script>window.open('admin.php','_self')</script>";
	}else{
		echo " <script>alert('email or password in incorrect')</script>";
	}
}

?>