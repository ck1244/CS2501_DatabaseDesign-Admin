<html lang="en">
  <head>
	<title class="title">Dreamhome Rental Agency</title>
   	<meta charset="utf-8" />
    	<meta name="viewport" content="initial-scale=1.0, width=device-width" />
    	<link rel="stylesheet" href="../CSS/dreamhome.css" />
    	<link rel="icon" href="../favicon.ico" />
	<style>
	    table, tr, td, th{
		border-collapse: collapse;
		padding: .5em;
		border: 1px solid green;
		text-align: center;
		margin-left: auto;
		margin-right: auto;	
	    }
	</style>
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
  <body>
  <h2>Find employees who work at a specific branch:</h2>
<form method="post">
    Branch No.:<br> 
B3 <input type="radio" name="bno" value="B3" checked> B5 <input type="radio" name="bno" value="B5"> B7 <input type="radio" name="bno" value="B7"> B4 <input type="radio" name="bno" value="B4"> B2 <input type="radio" name="bno" value="B2">
    <br><br>
    <input type="submit" value="Get Staff Members ">
  </form>
  <br>
<?php
	include "../dreamsetup.php";
		$conn_id = dream_connect ()
 	or die ("Cannot connect to server");
	    if ($_POST){
    	$bno = $_POST['bno'];
    	$query = ("SELECT staff.Sno, staff.Fname, staff.Lname FROM staff JOIN branch WHERE branch.Bno = '".$bno."' AND staff.Bno = branch.Bno");
    	$result = mysqli_query($conn_id, $query)
      		or die("cannot execute query");
    	$table = "<h3>The following staff members work at branch number " .$bno. ":</h3>";
    	$table .= "<table><tr><th>Staff Number</th><th>First Name</th><th>Last Name</th></tr>";
    	while ($row = mysqli_fetch_assoc($result)){
		$table .= ("<tr><td>" .$row['Sno']. "</td><td>" .$row['Fname']. "</td><td>" .$row['Lname']. "</td></tr>");
    }
    	$table .= "</table>";
    	print($table);
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
