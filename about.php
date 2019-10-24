<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>MNK | About Us</title>
	 <?php include 'headinglink.php' ?>
 
</head>
<body>
<?php include 'menu.php' ?>

<div class="jumbotron">
  <h1>MNK</h1>
  <p> Mnk is a Website that provides its user to learn programming language asynchronously by watching videos.
  it is platform where you can watch whole language programming in a single Video.</p>
</div>

<section class="my-4">
  <div class="py-1">
    <h3 class="text-center">About Us</h3>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="images/about.jpg" class="img-fluid aboutimg">
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <h2 class="display-4">MNK</h2>
        <p class="py-3">Mnk is a Website that provides its user to learn programming language asynchronously by watching videos</p>
      </div>
    </div>
  </div>
</section>

<?php include'footer.php' ?>
<?php include'scripts.php'?>
</body>
</html>