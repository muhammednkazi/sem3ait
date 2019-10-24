<?php
session_start();
if(!isset($_SESSION['seshan']))
{
	header('location:login.php');
}
?>

<html>
<head>
	<title>MNK | Services</title>
	<?php include 'headinglink.php' ?>
</head>
<body>
<?php include 'menu.php' ?>

<section class="my-1">
	<div class="py-1">
		<h3 class="text-center">Our Services</h3>
	</div>
	<div class="container-fluid">
		<div class="row	">
		
<?php
$sql="select * from course";
$query=mysqli_query($conn,$sql);
while($rowvalue=mysqli_fetch_array($query)){
?>		
		
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card" style="">
  <img class="card-img-top aboutimg" src="<?php echo $rowvalue['course_banner']; ?>" alt="Card image">
  <div class="card-body">
    <h4 class="card-title"><?php echo $rowvalue['course_title']; ?></h4>
    <a href="detail.php?id=<?php echo $rowvalue['id']; ?>" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>
<?php } ?>



	</div>
	</div>
</section>

<?php include'footer.php'?>
<?php include'scripts.php'?>
</body>
</html>
