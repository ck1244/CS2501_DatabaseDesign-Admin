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
        	<th colspan="4"><a href="staffoperations.html" class ="home">Staff Operations</a></th>
    	</tr>
	</table>
  <body>
  <h3>Find the address of the branch employing a staff member</h3>
	<section>
	    <form method="post">
		First Name: <br>
		<input type="text" value="" name="fname" required placeholder="Joe"><br><br>
		Last Name: <br>
		<input type="text" value="" name="lname" required placeholder="Bloggs"><br><br>
		<input type="submit" value="Find Branch Address">
	    </form>
	    <br>
<?php
	  include "../dreamsetup.php";
	  $conn_id = dream_connect ()
	 	or die ("Cannot connect to server");
	  if ($_POST){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$query = "SELECT branch.Street, branch.Area, branch.City, branch.Pcode FROM staff JOIN branch WHERE staff.Fname = '".$fname."' AND staff.Lname = '".$lname."' AND staff.Bno = branch.Bno";
		$result = mysqli_query($conn_id, $query)
			or die("Cannot execute query");
		if (mysqli_num_rows($result) > 0){
			$table = "<p>Staff member <b>" .$fname. " " . $lname . "</b> works at:</p>";
			$row = mysqli_fetch_assoc($result);
			$table .= "<p>Branch Address: <b>" .$row['Street']. ", " .$row['Area']. ", " .$row['City']. ", " .$row['Pcode']. "</b></p>";
		print($table);
		} else {
			print("<p>Please try again.</p>");
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
