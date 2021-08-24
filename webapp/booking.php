<html>
<head>
	<title>booking</title>
	<link rel="stylesheet" type="text/css" href="css/booking.css">
</head>
<body>
<div class="header">
<h3>ROOM BOOKING<h3>
	
	</div>
	
	<form method="post" action="book.php">
	

		
		
		<div class="input-group">
		
			<label>pg id</label>
			<input type="text"  name="pid"  placeholder="Enter PG id">
		</div>
		
		
		<div class="input-group">
		
			<label>PG NAME</label>
			<input type="text"  name="pgname"  placeholder="Enter PG name">
		</div>
		<div class="input-group">
		<label>NAME</label>
			<input type="text"  name="name"  placeholder="Enter user name">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" placeholder="Enter email">
		</div>
		
		<div class="input-group">
			<label>City</label>
			<input type="text" name="city"  placeholder="Enter city">
		</div>
		
		<div class="input-group">
			<label>State</label>
			<input type="text"  name="state" placeholder="Enter state" >
			</div>
		<div class="date">
		<label for="start">check in date:</label>
<input type="date" id="start" name="date1"
       value="2021-01-01"
       min="2021-01-01" max="2030-12-31">
		
		<label for="start">check out date:</label>
<input type="date" id="start" name="date2"
       value="2021-01-01"
       min="2021-01-01" max="2030-12-31">
		</div>
		<div class="input-group">
			<label>Pin code</label>
			<input type="text" name="pincode"  placeholder="Enter pincode" >
			
			</div>
		
				
		<div class="input-group">
			<label>How many people are staying? </label>
			<select name="no">
			<option value="1"selected>1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			
			</select>
			
			
			</div>
				
		
		
			<div class="input-group">
			<label>contact no.</label>
			<input type="text" name="contact"  placeholder="Enter contact number" >
			
			</div>
				
		



	
			
		<div class="input-group">
			 <button type="submit" class="btn"  name="add-details">submit</button>
		</div>
		
			
</form>


</body>
</html>