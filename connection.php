<?php
$conn=new mysqli("localhost","root","","mnkdatabase");

if($conn->connect_error)
{
	die("Connection Falied");
}
?>