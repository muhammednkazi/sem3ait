

<!DOCTYPE html>
<html>
<head>
	<title>MNK | </title>
	<?php include'headinglink.php'?>
</head>
<body>

<?php include 'menu.php' ?>
<?php
$id=$_GET['id'];
$sql="select * from course where id='$id'";
$query=mysqli_query($conn,$sql);
 $rowvalue=mysqli_fetch_array($query);
?>
<div class="container my-3"  >
	<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
<!-- 16:9 aspect ratio -->
<div class="embed-responsive embed-responsive-16by9" >
 <iframe width="560" height="315" src="<?php echo $rowvalue['course_video']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">
<div class="jumbotron">
  
  <?php echo $rowvalue['course_description']; ?>
  </div>
</div>
</div>
<div class="jumbotron my-1 py-1">
 <?php echo $rowvalue['course_content']; ?>
</div>
</div>

<?php include'footer.php'?>
<?php include'scripts.php'?>
</body>
</html>