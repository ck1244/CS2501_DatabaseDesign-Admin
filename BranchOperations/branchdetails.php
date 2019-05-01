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
	<h2>Get the address of a branch using their staff number</h2>
	<h3>Enter STAFF number below</h3>
	<form method="post">
		Branch No.: B3 <input type="radio" name="bno" value="B3" checked> B5 <input 			type="radio" name="bno" value="B5"> B7 <input type="radio" name="bno" 			value="B7"> B4 <input type="radio" name="bno" value="B4"> B2 <input 			type="radio" name="bno" value="B2"><br><br>
		<input type="submit" value="Get information">
	</form>
	<br>
<?php
if (count ($_POST) != 0){
	$bno = $_POST['bno'];

	include "../dreamsetup.php";
	$conn_id = dream_connect ()
 	or die ("Cannot connect to server");

	$query = "select Street, Area,City, Pcode, Tel_No,Fax_No
	"
	."from branch where Bno = '$bno'";
	$result_id = mysqli_query ($conn_id, $query)
	or die ("Cannot execute query");
	while ($row = mysqli_fetch_assoc ($result_id))
	{
		print("<p>Branch: <b>" .$bno. "</b></p>");
		printf("<b>Street: </b> %s<b> Area: </b> %s<b> City: </b> %s<b> Postcode: </b> %s", $row["Street"], $row["Area"], $row["City"], $row["Pcode"]);
		print ("<br><br>\n");
		printf("<b>Telephone Number: </b> %s<b> Fax Number: </b> %s<b>", $row["Tel_No"], $row["Fax_No"]);
		print ("<br><br>\n");
	}
	mysqli_free_result ($result_id);
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




