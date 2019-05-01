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
        	<th colspan="4"><a href="branchoperations.html" class ="home">Branch Operations</a></th>
    	</tr>
	</table>
	<h2>Update details of branch after relocation</h2>
	<h3>Enter details below</h3>
	<form method="post">
    		Branch No.: <br> B3 <input type="radio" name="bno" value="B3" checked> B5 			<input type="radio" name="bno" value="B5"> B7 <input type="radio" name="bno" 			value="B7"> B4 <input type="radio" name="bno" value="B4"> B2 <input 			type="radio" name="bno" value="B2">
   		 <br><br>
    	New Address: <br>
    	Street: <input type="text" value="" name="street" required><br>
		<br>
    	Area:   <input type="text" value="" name="area" required><br>
		<br>
    	City:   <input type="text" value="" name="city" required> <br>
		<br>
    	Postcode:   <input type="text" value="" name="pcode" required> <br>
		<br>
    	Phone Number:   <input type="text" value="" name="phone" required> <br>
		<br>
    	Fax Number:   <input type="text" value="" name="fax" required> <br>
		<br>
    	<input type="submit" value="Update Branch Location">
  	</form>


<?php
if (count ($_POST) != 0){
	$bno = $_POST['bno'];
    	$street = $_POST['street'];
    	$area = $_POST['area'];
    	$city = $_POST['city'];
  	$postcode = $_POST['pcode'];
  	$phone = $_POST['phone'];
	$fax = $_POST['fax'];
	include "../dreamsetup.php";
	$conn_id = dream_connect ()
 	or die ("Cannot connect to server");
	$query = ("UPDATE branch SET Street = '".$street."', Area = '".$area."', City = '".$city."', Pcode = '".$postcode."', Tel_No = '".$phone."', Fax_No = '".$fax."' WHERE Bno = '".$bno."'");

	$result_id = mysqli_query ($conn_id, $query)
	or die ("Cannot execute query");
	if ($result_id)
	{
		print("<h3>Branch number " .$bno. " now has now moved to: " .$street. ", " .$area. ", " .$city. "., " .$postcode. ".</h3>");
		print("<h3>with Phone number: " .$phone. " and Fax number: " .$fax. "</h3>");
	} else {
			print("<h3><b>PLease try again</h3></b>");

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




