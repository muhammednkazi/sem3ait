<?php include("connection.php");  ?>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  
 <!-- <?php
 
 if($_SESSION['userid']==null){
	$_SESSION['userid']=0; 
 }else{
	$sql="select * from register where id=".$_SESSION['userid'];
$query=mysqli_query($conn,$sql);
 $rowvalue=mysqli_fetch_array($query);
 }
 ?> -->