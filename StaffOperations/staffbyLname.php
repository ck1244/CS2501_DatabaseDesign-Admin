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

	<h2>Get the ADDRESS AND TELEPHONE NUMBER of an Employee </h2>
	<h3>Enter LAST name of the employee below</h3>
	<form method="POST">
	Last Name: <input type="text" name="lastname" placeholder = "Bloggs" required><p>
	<input type="submit" value="Check Staff name:">
	</form>

<?php
if (count ($_POST) != 0){
	$lastname = $_POST['lastname'];
	include "../dreamsetup.php";
	$conn_id = dream_connect ()
 		or die ("Cannot connect to server");
	$query = "select Lname, Fname,Address, Tel_No
	"
	."from staff where LName = '$lastname'";
	$result_id = mysqli_query ($conn_id, $query)
	or die ("Cannot execute query");
	while ($row = mysqli_fetch_assoc ($result_id))
	{
	printf ("<b>Employee Name:</b> %s %s</b><br>\n</br>", $row["Fname"], $row["Lname"]);
	printf ("<b>Employee Address:</b> %s</b><br>\n</br>", $row["Address"]);
	printf ("<b>Employee Telephone Number:</b> %s</b>", $row["Tel_No"]);
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




