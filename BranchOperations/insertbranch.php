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
  </head>
  <body>
	<h3>Insert a new branch</h3>
	    <form method="post">
		Branch No.:<br>
			<input type="text" value="" name="bno" maxlength="4" placeholder = "B5" required><br><br>
		Street: <br>
			<input type="text" value="" name="street" placeholder = "16 Holhead" required><br><br>
		Area: <br>
			<input type="text" value="" name="area" placeholder = "Dee" required><br><br>
		City: <br>
			<input type="text" value="" name="city" placeholder = "Aberdeen" required><br><br>
		Postcode: <br>
			<input type="text" value="" name="postcode" placeholder = "G1198X" minlength="3" maxlength="6" required><br><br>
		Telephone Number: <br>
			<input type="text" value="" name="telno" placeholder = "0181-963-1030" required><br><br>
		Fax Number: <br>
			<input type="text" value="" name="faxno" placeholder = "0181-453-7992" required><br><br>
		<input type="submit" value="Insert new branch">
	    </form>
	    <br>

<?php
	include "../dreamsetup.php";
		$conn_id = dream_connect ()
 	or die ("Cannot connect to server");
	  if ($_POST){
		$branch_no = $_POST['bno'];
		$street = $_POST['street'];
		$area = $_POST['area'];
		$city = $_POST['city'];
		$postcode = $_POST['postcode'];
		$telno = $_POST['telno'];
		$faxno = $_POST['faxno'];
		$insert= "INSERT INTO branch VALUES('".$branch_no."', '".$street."', '".$area."', '".$city."', '".$postcode."','".$telno."', '".$faxno."')";
		$result = mysqli_query($conn_id, $insert)
			or exit("Cannot execute insert");
		if ($result){
			print("<p> New branch <b>" .$branch_no. "</b> inserted into branch databases</p>");
		} else {
			print("<p> New branch <b>" .$branch_no. "</b> NOT inserted into branch databases</p>");
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
