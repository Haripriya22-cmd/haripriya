<?php
 $host="localhost";
 $user="root";
 $password="";
 $database_name="pgas";
 $con=mysqli_connect("$host","$user","$password","$database_name");
  $s="SELECT * FROM rom";
 $q=mysqli_query($con, $s);
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>rooms</title>
  <link rel="stylesheet" type="text/css" href="styles/rooms.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</head>
<body>

<div id="header">
<a href="user_home.php">
<img src="home.png" alt="HTML tutorial" style="width:85px;height:85px; float: right; padding-top:10px; padding-right:20px; padding-down:10px;margin-right:30px;margin-top:-500;">

</a>
<h2 style="color:white;">ROOM DETAILS</h2>
</div>

<div class="container">
  
        

  <table class="table table-bordered">
    <thead>
      <tr>
        <th> PG NAME</th>
        <th>RATE</th>
        <th>EMAIL</th>
		<th>PICTURE</th>
		<th>CITY</th>
		<th>STATE</th>
		<th>BED.NO</th>
		<th>PINCODE</th>
		<th>FOOD</th>
		<th>CONTACT</th>
		<th>BOOK</th>
      </tr>
    </thead>
    <tbody>
      <tr>
       <?php
  while($row=mysqli_fetch_array($q))
  {

    ?>
    <tr>
  <td><?php echo $row["name"];?></td>
  <td><?php echo $row["rate"];?></td>
  <td><?php echo $row["email"];?></td>
  <td><img src="<?php echo $row['image']; ?>" width="200" height="100"></td>
  <td><?php echo $row["city"];?></td>
  <td><?php echo $row["state"];?></td>
  
  <td><?php echo $row["bedno"];?></td>
  <td><?php echo $row["pincode"];?></td>
  <td><?php echo $row["food"];?></td>
  <td><?php echo $row["contact"];?></td>
 

	<th><button onclick="document.location='booking.php'" style="color: white; font-size:30px;background:rebeccapurple; font-family:Trattatello; padding:8px;"  >BOOK NOW</button></th>
</tr>
<?php
}
?>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
