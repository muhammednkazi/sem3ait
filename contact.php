<!DOCTYPE html>
<html>
<head>
<title>MNK | Contact Us</title>
<?php include 'headinglink.php' ?>
</head>
<body>
	<?php include 'menu.php' ?>
	<div  class="container-fluid">
<section class="my-4">
	<div>
		<h3 class="text-center">Contact us</h3>
	</div>
	<div class="w-50 m-auto">
		<form onsubmit="return validation()" action="contactcheck.php" method="POST">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" id="name" autocomplete="off" class="form-control">
				<span id="names" class="text-danger font-weight-bold"></span>				
			</div>	
			<div class="form-group">
				<label>Email Id</label>
				<input type="text" name="emailid" id="emailid" autocomplete="off" class="form-control">				
				<span id="emailids" class="text-danger font-weight-bold"></span>			
			</div>	
			<div class="form-group">
				<label>Mobile No.</label>
				<input type="text" name="mobile" id="mobile"autocomplete="off" class="form-control">
				<span id="mobiles" class="text-danger font-weight-bold"></span>				
			</div>	
			<div class="form-group">
				<label>Comments</label>
				<textarea type="text" name="comments" id="comments"autocomplete="off" class="form-control"></textarea>		
				<span id="commentss" class="text-danger font-weight-bold"></span>	
			</div>
			<button type="submit" class="btn btn-success">Submit</button>
		</form>
	</div>
</div>
</section>
</div>

<script type="text/javascript">
	function validation()
	{
			var name =document.getElementById('name').value;
			var emailid =document.getElementById('emailid').value;
			var mobile =document.getElementById('mobile').value;
			var comments =document.getElementById('comments').value;

			var namecheck=/^[A-Za-z. ]{3,30}$/;
			var mobilecheck=/^[789][0-9]{9}$/;
			var emailcheck=/^[A-Za-z0-9_.]{3,}@[A-Za-z]{2,}[.]{1}[A-Za-z]{2,6}$/;
			var commentscheck=/^[A-Za-z0-9!@#$%^&* ]{2,100}$/;
			
		if ((namecheck.test(name)) && (name!==""))
		{
			document.getElementById('names').innerHTML="";
		}
		else
		{
			document.getElementById('names').innerHTML="** Name is invalid";
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
		if ((mobilecheck.test(mobile)) && (mobile!==""))
		{
			document.getElementById('mobiles').innerHTML="";
		}
		else
		{
			document.getElementById('mobiles').innerHTML="** Mobile Number is invalid";
			return false;
		}
		if ((commentscheck.test(comments)) && (comments!==""))
		{
			document.getElementById('commentss').innerHTML="";
		}
		else
		{
			document.getElementById('commentss').innerHTML="** Please enter more than 9 characters";
			return false;
		}
	}
</script>

<?php include'footer.php'?>
<?php include'scripts.php'?>
</body>
</html>