<?php
session_start();
if(isset($_SESSION['seshan']))
{
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>MNK | Login</title>
<?php include 'headinglink.php' ?>
</head>
<body>
	<?php include 'menu.php' ?>
<div class="container-fluid">
<section class="my-5">
	<div>
		<h3 class="text-center">Login</h3>
	</div>
	<div class="w-50 m-auto">
		<form  onsubmit="return validation()" action="logincheck.php" method="POST">
			<div class="form-group">
				<label>Email Id</label>
				<input type="text" name="emailid" id="emailid" autocomplete="off" class="form-control">
				<span id="emailids" class="text-danger font-weight-bold"></span>				
			</div>		
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" id="password" autocomplete="off" class="form-control mb-2 mr-sm-2">
				<span id="passwords" class="text-danger font-weight-bold"></span>				
			</div>
			<input type="submit" name="submit" class="btn btn-success">
			<a class="btn btn-success" href="index.php">Cancel</a>
			</form><br>
		<p>Don't have an Account?</p>
		<a class="btn btn-success" href="register.php">Sign up!</a>
	</div>
</section>
</div>
<script>
	function validation()
	{
			var emailid =document.getElementById('emailid').value;
			var password =document.getElementById('password').value;

		if (emailid!=="")
		{
			document.getElementById('emailids').innerHTML="";
		}
		else
		{
			document.getElementById('emailids').innerHTML="** Please Enter Email Id";
			return false;
		}

		if (password!=="")
		{
			document.getElementById('passwords').innerHTML="";
		}
		else
		{
			document.getElementById('passwords').innerHTML="** Please Enter Password";
			return false;
		}
	}
</script>

<?php include'footer.php'?>
<?php include'scripts.php'?>
</body>
</html>