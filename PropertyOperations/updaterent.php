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

	<h2>Update the rent of a Property</h2>
	<h3>Enter property number and new rent below:</h3>

	<form method="POST">
	Property Number: <input type="text" name="propertynumber" required><p>
	New Rent: <input type="number" name="rent"><p>
	<input type="submit" value="Update">
	</form>

<?php
if (count ($_POST) != 0){
	$propertynumber = $_POST['propertynumber'];
	$rent = $_POST['rent'];

	include "../dreamsetup.php";
	$conn_id = dream_connect ()
 	or die ("Cannot connect to server");

	$query = "UPDATE property_for_rent SET Rent = '$rent'
	"
	."where Pno = '$propertynumber'";
	$result_id = mysqli_query ($conn_id, $query)
	or die ("Cannot execute query");

	if ($result_id){
			print("<p> Rent of property number:   <b> " .$propertynumber. "</b> updated successfully to €<b> " .$rent. "</b> </p>");
		} else {
			print("<p> Rent of property number:   <b> " .$propertynumber. "</b>  NOT updated successfully.</p>");
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
