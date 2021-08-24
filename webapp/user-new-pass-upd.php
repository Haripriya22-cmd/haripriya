<?php
session_start();
$host="localhost";
$user="root";
$password="";
$databasename="pgas";
$con=mysqli_connect("$host","$user","$password","$databasename");
$id= $_SESSION['id'];
$pw=$_POST["newPassword"];
$cpw=$_POST["confirmPassword"];


echo $id;
$update="UPDATE user SET password='$pw' WHERE id= '$id'";
$q = mysqli_query($con,$update);

if($q){
header('location:user-home.php');
}
else
{
header('location:user-login.php');	
}

?>