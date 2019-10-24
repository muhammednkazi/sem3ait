<?php
include("connection.php");
$name=$_POST['name'];
$emailid=$_POST['emailid'];
$mobile=$_POST['mobile'];
$comments=$_POST['comments'];

$sql="insert into contactus(name,emailid,mobile,comments) values('$name','$emailid','$mobile','$comments')";

if ($conn->query($sql) === TRUE) {
    header('location:contact.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
