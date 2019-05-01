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

	<h2>Update the phone number corresponding to a branch</h2>
	<h3>Select branch and enter new phone number below</h3>

	<form method="POST"">
    		Branch No.: <br> B3 <input type="radio" name="bno" value="B3" checked> B5 			<input type="radio" name="bno" value="B5"> B7 <input type="radio" name="bno" 			value="B7"> B4 <input type="radio" name="bno" value="B4"> B2 <input 			type="radio" name="bno" value="B2">
   		 <br><br>
		New Phone Number: <input type="text" name="newphn" required placeholder = "00441234567"><p>
	<input type="submit" value="Update">
	</form>

<?php
if (count ($_POST) != 0){
	$bno = $_POST['bno'];
	$newphone = $_POST['newphn'];

	include "../dreamsetup.php";
	$conn_id = dream_connect ()
 	or die ("Cannot connect to server");

	$query = "UPDATE branch SET Tel_NO = '$newphone'
	"
	."where Bno = '$bno'";
	$result_id = mysqli_query ($conn_id, $query)
	or die ("Cannot execute query");

	if ($result_id){
			print("<p> Phone number of Branch:   <b> " .$bno. "</b> updated successfully with <b> " .$newphone. "</b>.</p>");
		} else {
			print("<p> Phone number of staff number:   <b> " .$staffnumber. "</b>  NOT updated successfully.</p>");
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
