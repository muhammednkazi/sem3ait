<?php
session_start();
include("connection.php");

$emailid=$_POST['emailid'];
$password=$_POST['password'];

$sql="select * from register where emailid='$emailid' and password='$password'";
$query=mysqli_query($conn,$sql);
 $row=mysqli_num_rows($query);
 $rowvalue=mysqli_fetch_array($query);
 	if($row==1)
 	{
		if($emailid=="muhammednkazi@gmail.com") 		
 		{
 			$_SESSION['seshan']="admin";
 		}
 		else
 		{
		$_SESSION['seshan']= $rowvalue['fname'];
		}
 		header('location: index.php'); 
 	}
 	else
 {
 	header('location:login.php');
 }		
?>