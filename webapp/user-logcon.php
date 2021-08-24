<?php
 session_start();
 $host="localhost";
 $user="root";
 $password="";
 $database_name="pgas";
 $con=mysqli_connect("$host","$user","$password","$database_name");
 if (isset($_POST['email']))

 	$email = $_POST["email"];
 $s=  "SELECT * FROM user  WHERE email ='".$_POST['email']."' and password ='" .$_POST['password']."'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);
if ($num>0)
{
$nom= mysqli_fetch_row($result);
$_SESSION['aid']=$nom[0];
$_SESSION['name']=$nom[1];
$_SESSION['email']=$nom[2];
$_SESSION['phone']=$nom[4];
header('location:user-home.php');
}
else
{
	header('location:user-login.php');
}
