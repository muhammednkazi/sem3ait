<?php
include("connection.php");
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$mobile=$_POST['mobile'];
$emailid=$_POST['emailid'];
$password=$_POST['password'];

$sql="insert into register(fname,lname,gender,mobile,emailid,password) values('$fname','$lname','$gender','$mobile','$emailid','$password')";

if ($conn->query($sql) === TRUE) {
    header('location:register.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
