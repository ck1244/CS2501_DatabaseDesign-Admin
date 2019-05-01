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
        	<th colspan="4"><a href="staffoperations.html" class ="home">Staff Operations</a></th>
   	</tr>
	</table>

	<h2>Update the address corresponding to a staff number</h2>
	<h3>Enter staff number and address below</h3>

	<form method="POST" >
	Staff Number: <input type="text" name="staffnumber" required ><p>
	New Address: <input type="text" name="newaddress" required ><p>
	<input type="submit" value="Update Address">
	</form>

<?php
if (count ($_POST) != 0){
	$staffnumber = $_POST['staffnumber'];
	$newaddress = $_POST['newaddress'];

	include "../dreamsetup.php";
	$conn_id = dream_connect ()
 	or die ("Cannot connect to server");

	$query = "UPDATE staff SET Address = '$newaddress'
	"
	."where Sno = '$staffnumber'";
	$result_id = mysqli_query ($conn_id, $query)
	or die ("Cannot execute query");

	if ($result_id){
		print("<p> Address of staff number:   <b> " .$staffnumber. "</b> 					updated successfully.</p>");
	} else {
		print("<p> Address of staff number:   <b> " .$staffnumber. "</b>  NOT updated 				successfully.</p>");
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
