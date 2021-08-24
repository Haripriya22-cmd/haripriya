<?php
session_start();
$host="localhost";
$user="root";
$password="";
$databasename="pgas";
$con=mysqli_connect("$host","$user","$password","$databasename");


$id= $_SESSION['id'];
$pw=$_POST["currentPassword"];


echo $id;
$q= "SELECT * FROM user WHERE id= '$id' and password= '$pw'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if ($num>0)
	{	
 header('location:user-new-pass.php');

}
else
{
	 header('location:user-chng-pass.php');

}
?>