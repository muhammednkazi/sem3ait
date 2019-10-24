<?php
session_start();
if(!isset($_SESSION['seshan']))
{
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>MNK | Display Users</title>
	<?php include 'connection.php' ?>
	<?php include 'headinglink.php' ?>
</head>
<body>
	<?php include 'menu.php' ?>
	<br>
	<div class="container-fluid">
		<div class="row">
		<div class="col-lg-12 col-md-12 col-12 m-auto">
			<h3 class="text-center text-warning">Display All User Data</h3>
			<table class="table table-stripped table-hover table-bordered" >
				<tr>
					<th>ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Gender</th>
					<th>Mobile Number</th>
					<th>Email ID</th>
					<th>Password</th>
					<th>Update</th>
					<th>Delete</th>
				</tr>
				<?php 

					$sql="select * from register";
					$query=mysqli_query($conn,$sql);
 					while($result= mysqli_fetch_array($query))
 					{
				?>
				<tr>
					<td><?php echo $result['id'];?></td>
					<td><?php echo $result['fname'];?></td>
					<td><?php echo $result['lname'];?></td>
					<td><?php echo $result['gender'];?></td>
					<td><?php echo $result['mobile'];?></td>
					<td><?php echo $result['emailid'];?></td>
					<td><?php echo $result['password'];?></td>
					<td><a href="updateuser.php?id=<?php echo $result['id']; ?>" class="btn btn-primary text-white">Update</a></td>
					<td><a href="deleteuser.php?id=<?php echo $result['id']; ?>" class="btn btn-danger text-white" >Delete</a></td>
				</tr>
			<?php } ?>
			</table>
		</div>
	</div>
	</div>

<?php include'footer.php'?>
<?php include'scripts.php'?>
</body>
</html>