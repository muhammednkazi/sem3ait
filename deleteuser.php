<?php
include'connection.php';
$id=$_GET['id'];
$q="delete from register where id=$id";
mysqli_query($conn,$q);
header('location:displayusers.php');
?>