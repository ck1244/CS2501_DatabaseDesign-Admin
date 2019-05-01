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
  <h2>Find the staff number, last name and first name of those earning more or less than a given salary.
  </h2>
	<form method="post">
		<b>Find staff members earning:</b><br>
		Less <input type="radio" value="<" name="salary" checked> More <input 			type="radio" value=">" name="salary"><br><br>
		<b>than:</b> <input type="text" value="" name="amount" required placeholder='21000'><br><br>
		<input type="submit" value="Find staff member">
	</form>
	<br>

<?php
	include "../dreamsetup.php";
		$conn_id = dream_connect ()
 			or die ("Cannot connect to server");
	  if ($_POST){
		$salary = $_POST['salary'];
		$amount = $_POST['amount'];
		if ($amount && $amount > 0){
		if ($salary == "<"){
			$query = ("SELECT Fname, Lname, Sno, Salary FROM staff WHERE Salary < 						'".$amount."'");
			} else {
			$query = ("SELECT Fname, Lname, Sno, Salary FROM staff WHERE Salary > 						'".$amount."'");
			}
			$result = mysqli_query($conn_id, $query)
				or exit("Cannot execute insert");
			if (mysqli_num_rows($result) > 0){
				$string = "<h2><b>Staff members earning " .$salary. " " . 						$amount . "</b></h2>";
				$string .= "<table><tr><th>First Name</th><th>Last Name</th><th>Staff Number</th><th>Salary</th></tr>";
				while ($row = mysqli_fetch_assoc($result)){
					$string .= ("<tr><td>" .$row["Fname"]. "</td><td>" .$row["Lname"]. "</td><td>" .$row["Sno"]. "</td><td>" .$row["Salary"]. "</td></tr>");
				}
		$string .= "</table>";
		print($string);
		} else {
			print("<p><b>No staff member matches this search, please try again.</p></b>");
			}
		} else {
			print("<p><b>Error, PLease try again!.<b></p>");
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
