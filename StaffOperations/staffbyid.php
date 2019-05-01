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
	<h2>Get the name of an employee using their staff number</h2>
	<h3>Enter STAFF number below</h3>
	<form  method="POST" >
	Staff Number: <input type="text" name="staffnum" placeholder="SG21" required><p>
	<input type="submit" value="Check Staff number">
	</form>

<?php
if (count ($_POST) != 0){
	$staffnum = $_POST['staffnum'];
	include "../dreamsetup.php";
	$conn_id = dream_connect ()
 	or die ("Cannot connect to server");
	$query = "select Lname, Fname,Sno
	"
	."from staff where Sno = '$staffnum'";
	$result_id = mysqli_query ($conn_id, $query)
	or die ("Cannot execute query");
	while ($row = mysqli_fetch_assoc ($result_id))
	{
	printf ("<b>Employee Name:</b> %s %s <b> Staff Number:</b> %s", $row["Fname"], $row["Lname"], $row["Sno"]);
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




