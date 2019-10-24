<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>MNK | Update Info</title>
	<?php include 'connection.php' ?>
	 <?php include 'headinglink.php' ?>
</head>
<body>
	<?php include 'menu.php' ?>
	<section class="my-3">
	<div>
		<h3 class="text-center">Update Information</h3>
	</div>
	<div class="w-50 m-auto">
		<form onsubmit="return validation()" method="POST">
			<div class="form-group">
				<label>First Name</label>
				<?php 
					$id=$_GET['id'];
					$sql="select * from register where id=$id";
					$query=mysqli_query($conn,$sql);
 					while($result=mysqli_fetch_array($query))
 					{
				?>
				<input type="text" name="fname" autocomplete="off" class="form-control" id="fname" value="<?php echo $result['fname'];?>">
				<span id="fnames" class="text-danger font-weight-bold"></span>				
			</div>
			<div class="form-group">
				<label>Last Name</label>
				<input type="text" name="lname" autocomplete="off" class="form-control" id="lname" value="<?php echo $result['lname'];?>">	
				<span id="lnames" class="text-danger font-weight-bold"></span>			
			</div>
			
			<label>Gender</label>
			<br>
			<label class="radio-inline">
      			<input type="radio" name="gender" value="male" checked>Male
    		</label>
    		<label class="radio-inline">
      			<input type="radio" name="gender" value="female">Female
    		</label>
    		<span id="genders" class="text-danger font-weight-bold"></span>
    		<br>   	
			<div class="form-group">
				<label>Mobile No.</label>
				<input type="text" name="mobile" autocomplete="off" class="form-control" id="mobile" value="<?php echo $result['mobile'];?>">	
				<span id="mobiles" class="text-danger font-weight-bold"></span>				
			</div>
			<div class="form-group">
				<label>Email Id</label>
				<input type="text" name="emailid" autocomplete="off" class="form-control" id="emailid" value="<?php echo $result['emailid'];?>">
				<span id="emailids" class="text-danger font-weight-bold"></span>			
			</div>	
				
			<div class="form-group">
				<label>Password</label>
				<input type="text" name="text" autocomplete="off" class="form-control" id="password" value="<?php echo $result['password'];?>">	
				<span id="passwords" class="text-danger font-weight-bold"></span>				
			</div>
			<?php }?>
			<div class="form-group">
				<label>Confirm Password</label>
				<input type="text" name="password" autocomplete="off" class="form-control" id="cpassword">	
				<span id="cpasswords" class="text-danger font-weight-bold"></span>				
			</div>
			<button class="btn btn-success" name="update"><a href="updateuser.php?id=<?php echo $result['id'];?>">Update</a></button>	
			<a href="index.php" class="btn btn-success">Cancel</a>
		</form>
	</div>
</section>
<script>
	function validation()
	{
			var fname =document.getElementById('fname').value;
			var lname =document.getElementById('lname').value;
			var mobile =document.getElementById('mobile').value;
			var emailid =document.getElementById('emailid').value;
			var password =document.getElementById('password').value;
			var cpassword =document.getElementById('cpassword').value;

			var fnamecheck=/^[A-Za-z. ]{3,20}$/;
			var lnamecheck= /^[A-Za-z. ]{3,20}$/;
			var mobilecheck=/^[789][0-9]{9}$/;
			var emailcheck=/^[A-Za-z0-9_.]{3,}@[A-Za-z]{2,}[.]{1}[A-Za-z]{2,6}$/;
			var passwordcheck=/^(?=.*[0-9])(?=.*[A-Z])(?=.*[!@#$%^&*])[A-Za-z0-9!@#$%^&*]{8,16}$/;

	
		if ((fnamecheck.test(fname)) && (fname!==""))
		{
			document.getElementById('fnames').innerHTML="";
		}
		else
		{
			document.getElementById('fnames').innerHTML="** First Name is invalid";
			return false;
		}
		if ((lnamecheck.test(lname)) && (lname!==""))
		{
			document.getElementById('lnames').innerHTML="";
		}
		else
		{
			document.getElementById('lnames').innerHTML="** Last Name is invalid";
			return false;
		}

		if ((mobilecheck.test(mobile)) && (mobile!==""))
		{
			document.getElementById('mobiles').innerHTML="";
		}
		else
		{
			document.getElementById('mobiles').innerHTML="** Mobile Number is invalid";
			return false;
		}

		if ((emailcheck.test(emailid)) && (emailid!==""))
		{
			document.getElementById('emailids').innerHTML="";
		}
		else
		{
			document.getElementById('emailids').innerHTML="** Email Id is invalid";
			return false;
		}
		if ((passwordcheck.test(password)) && (password!==""))
		{
			document.getElementById('passwords').innerHTML="";
		}
		else
		{
			document.getElementById('passwords').innerHTML="** Password must be atleast 8 characters & contain atleast 1 uppercase, 1 number and 1 special character";
			return false;
		}
		
		if(cpassword!=="")
		{
			document.getElementById('cpasswords').innerHTML="";	
			
		}
		else
		{
			document.getElementById('cpasswords').innerHTML="Please re-enter password";
			return false;
		}

		if (cpassword.match(password))
		{
			document.getElementById('cpasswords').innerHTML="";
		}
		else
		{
		document.getElementById('cpasswords').innerHTML="Password does not match";	
		return false;
		}
	}

</script>
<?php include'footer.php'?>
<?php include'scripts.php'?>
</body>
</html>