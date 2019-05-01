<html lang="en">
  <head>
	<title class="title">Dreamhome Rental Agency</title>
    	<meta charset="utf-8" />
   	<meta name="viewport" content="initial-scale=1.0, width=device-width" />
    	<link rel="stylesheet" href="../CSS/dreamhome.css" />
    	<link rel="icon" href="../favicon.ico" />
  </head>
  <body> 
  	<header>
		<h1>Dreamhome Rental Agency</h1>
    	</header>
	<table style="width:100%" id="table">
    		<tr>
        		<th colspan="4"><a href="../index.html" class ="home">Home Page</a></th>
    		</tr>
    		<tr>
        		<th colspan="4"><a href="propertyoperations.html" class ="home">Property Operations</a></th>
    		</tr>
	</table>
  </head>
  <body>
	<h2>Enter a new property for rent</h2>
	<form method="post">
	Property No.:<br>
	<input type="text" value="" name="property_no" maxlength="4" placeholder = "PA14" required><br><br>
	Street: <br>
	<input type="text" value="" name="street" placeholder = "16 Holhead" required><br><br>
	Area: <br>
	<input type="text" value="" name="area" placeholder = "Dee" required><br><br>
	City: <br>
	<input type="text" value="" name="city" placeholder = "Aberdeen" required><br><br>
	Postcode: <br>
	<input type="text" value="" name="postcode" placeholder = "G1198X" minlength="3" maxlength="6" required><br><br>
	Property Type: <br>
	<select name="type" required>
	<option value="House">House</option>
	<option value="Flat">Flat</option>
	</select><br><br>
	Number of Rooms: <br>
	<select name="num_rooms" required>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
	</select><br><br>
	Price €<br>
	<input type="text" value="" name="price" placeholder = "650" required><br><br>
	Owner Number: <br>
	<input type="text" value="" name="owner" placeholder = "C046" maxlength = "4" required><br><br>
	Staff Number: <br>
	<input type="text" value="" name="staff" placeholder = "SA9" maxlength = "4" required><br><br>
	Branch No.: <br><br>
	B3<input type="radio" name="bno" value="B3" checked> B5 <input type="radio" 		name="bno" value="B5"> B7 <input type="radio" name="bno" value="B7"> B4 <input 		type="radio" name="bno" value="B4"> B2 <input type="radio" name="bno" 			value="B2"><br><br>
	<input type="submit" value="Add new staff member to database">
	</form>
	<br>

<?php
	include "../dreamsetup.php";
		$conn_id = dream_connect ()
 	or die ("Cannot connect to server");
	  if ($_POST){
		$property_no = $_POST['property_no'];
		$street = $_POST['street'];
		$area = $_POST['area'];
		$city = $_POST['city'];
		$postcode = $_POST['postcode'];
		$type = $_POST['type'];
		$num_rooms = $_POST['num_rooms'];
		$price = $_POST['price'];
		$owner = $_POST['owner'];
		$staff = $_POST['staff'];
		$bno = $_POST['bno'];
		$insert= "INSERT INTO property_for_rent VALUES('".$property_no."', '".$street."', '".$area."', '".$city."', '".$postcode."','".$type."', '".$num_rooms."', '".$price."', '".$owner."', '".$staff."', '".$bno."')";
		$result = mysqli_query($conn_id, $insert)
			or exit("Cannot execute insert");
		if ($result){
			print("<p> New property <b>" .$property_no. "</b> inserted into property for rent.</p>");
		} else {
			print("<p> New property <b>" .$property_no. "</b> NOT inserted into property for rent.</p>");
		}
	   }
	?>
</body>
<footer>
        <p> 
            <small>
                   &copy; Colin Kelleher,  University College Cork. All rights reserved.
            </small>
        </p> 
    </footer>
</html>
