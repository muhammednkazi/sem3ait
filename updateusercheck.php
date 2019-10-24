<?php
session_start();
if(!isset($_SESSION['seshan']))
{
	header('location:login.php');
}
?>

<?php
if(isset($_POST['update']))
{
include'connection.php';	
$id=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$mobile=$_POST['mobile'];
$emailid=$_POST['emailid'];
$password=$_POST['password'];

$sql="update register SET fname=$fname, lname=$lname, gender=$gender, mobile=$mobile, emailid=$emailid, password=$password where id= $id ";

if ($conn->query($sql) === TRUE) 
{
    header('location:displayusers.php');
} 

else 
{
    echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();
}

?>