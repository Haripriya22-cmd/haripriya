<?php

$host= "localhost";
$user= "root";
$password= "";
$database_name= "pgas";
$con=mysqli_connect("$host","$user","$password","$database_name");


$name = $_POST["name"];
$email = $_POST["email"];
$password =$_POST["password"];
$phone=$_POST["phone"];

$s ="SELECT * FROM user WHERE email = '$email'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num == 1)
{
	$status = "email already exit";
	header('location:user-reg.php');
}
else
{
$reg = "INSERT INTO user(name, email, password,phone) VALUES ('$name', '$email', '$password','$phone')";
mysqli_query($con,$reg);
header('location:user-login.html');
}
?>